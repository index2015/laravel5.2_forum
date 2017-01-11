<?php

namespace App\Http\Controllers\Index;

use App\Admin;
use App\http\models\Post_data;
use App\http\models\PostBar;
use App\http\models\Users;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Http\Request;
use Illuminate\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;


class IndexController extends Controller
{


    public function index(){
        #、吧
        $postBar = Cache::rememberForever('postBar', function() {
            return PostBar::where(array('state'=>B,'recommend'=>B))->limit(4)->get();
        });
        $Bar=PostBar::where(array('state'=>B,'recommend'=>B))->limit(3)->orderBy('PId','desc')->get();
        #、数据精华

        $postData=Cache::rememberForever('postData',function(){
            return Post_data::where('postStatePost','>',A)->where(array('postEssence'=>B))->limit(6)->orderBy('id','desc')->get();
        });
        #、会员
        $userList=Users::where(array('state'=>A))->get();
        $userList = collect($userList)->all();
        $barPostDataModel=new Post_data();
        $barPost=new PostBar();
        $barPostDataHome=$barPostDataModel->getList(array('postStatePost'=>C),'10',10);
        foreach($barPostDataHome as $k=>$vo){
            $barPostDataHome[$k]['bar_name']=$barPost->getInfo($vo['postBar']);
            $barPostDataHome[$k]['bar_addtime']=$barPost->getInfoTime($vo['postBar']);
            $barPostDataHome[$k]['creator_name']='system';
        }
        return view('index.index',
            ['uid'=>$this->uid,
                'postBar'=>$postBar,
                'Bar'=>$Bar,
                'userList'=>$userList,
                'postData'=>$postData,
                'barPostDataHome'=>$barPostDataHome,
            ]);
    }
}
