<?php

namespace App\http\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post_data extends Model
{
    protected $table = 'post_data';




    public function addData($data){
        $Insert=[];
        $Insert['postName']=$data['postName'];
        $Insert['postContent']=$data['editorValue'];
        $Insert['postBar']=$data['postBa'];
        $Insert['postUid']=session('uid');
        $Insert['postAddTime']=time();
        $Insert['postJurisdiction']=$data['postJurisdiction']; //权限
        $return= DB::table('post_data')->Insert($Insert);
        if($return){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param $amp 条件
     * @param string $limit 个数
     * @param string $page 分页
     * @param string $order 排序
     * @return mixed
     */
    public function getList($amp,$limit='15',$page='',$order='postAddTime'){


        if($order==null){
            $order='postAddTime';
        }
        $list=Post_data::where($amp)->limit($limit)->orderBy($order,'desc')->paginate($page);
        foreach($list  as $k=>$vo){
            $list[$k]['userName']=self::getUserName($vo['postUid']);
        }
        return $list;
    }

    public function getUserName($uid){
        $returnName= Users::where('id','=',$uid)->first();
        return $returnName['name'];

    }

    public function getInfo($id){
        $amp['id']=$id;
        $dataInfo=$list=Post_data::where($amp)->first();
        $bar=new PostBar();
        $dataInfo['nameBarName']=$bar->getInfo($dataInfo['postBar']);
        return $dataInfo;
    }

    /**  +浏览量
     * @param $id 帖子ID
     * @param string $num 次数
     * @return mixed
     */
    public function GetRead($id,$num='1'){

        $return=DB::table('post_data')->where('id',$id)->increment('postAccessTimes',$num);
        return $return;
    }

    /**  - 浏览量累加
     * @param $id 帖子ID
     * @param string $num 次数
     * @return mixed
     */
    public function getDecrement($id,$num='1'){
        $return=DB::table('post_data')->where('id',$id)->decrement('read',$num);
        return $return;
    }
}
