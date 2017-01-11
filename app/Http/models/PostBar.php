<?php

namespace App\http\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostBar extends Model
{
    protected $table = 'post_bar';


    public function getInfo($id){

        $amp['PId']=$id;
        $dataInfo=$list=PostBar::where($amp)->first();
        return $dataInfo['bar_name'];
    }
    public function getInfoTime($id){

        $amp['PId']=$id;
        $dataInfo=$list=PostBar::where($amp)->first();
        return $dataInfo['add_time'];
    }

    /** 获得一个帖子的所有有效数据
     * @param $map  条件  -任何条件
     * @return mixed
     */
    public function barPostData($map){
        $bar_postData=PostBar::where($map)->first();
        $bar_postData['data']=self::getPostData($bar_postData['PId']);
        return $bar_postData;

    }

    /** 获取帖子自定义数据
     * @param $PId 条件
     * @return mixed
     */
    public function getPostData($PId,$page='8'){
        $map['postStatePost']=A;
        $map['postBar']=$PId;
        $list=Post_data::where($map)->paginate($page);
        foreach($list as $k=>$vo){
            $list[$k]['creator_name']='admins';

        }
        return $list;
    }
}
