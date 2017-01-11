<?php

namespace App\Http\Controllers\Index;

use App\http\models\IpLog;
use App\http\models\Post_data;
use App\http\models\PostBar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function index(){
        $list=Cache::rememberForever('barList', function() {
            $listModel= DB::table('post_bar');
            $listBar=  $listModel->where(array('top'=>1,'state'=>1))->get();
            foreach($listBar as $k=>$v){
                $listBar[$k]->data=self::subordinate($v->PId);
            }
            return $listBar;
        });
        //推荐
        $recommendList=Cache::rememberForever('recommendList', function() {
            return DB::table('post_bar')->where(array('recommend'=>1))->get();
        });
        return view('index.forum',['list'=>$list,'recommendList'=>$recommendList]);
    }
    /**
     * @param $top 父级ID
     * @return mixed
     */
    public function subordinate($top){
        $return=DB::table('post_bar')->where(array('The'=>$top))->get();
        return $return;

    }

    /**  帖子列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postForum(){
        $barInfo= DB::table('post_bar')->where(array('PId'=>intval($_GET['id'])))->first();
        $models=new Post_data();
        $mbp=[];
        $mbp['postBar']=intval($_GET['id']);
        if(@$_GET['postTop']!=null){
            $mbp['postTop']=$_GET['postTop'];
        }  if(@$_GET['postEssence']!=null){
            $mbp['postEssence']=$_GET['postEssence'];
        }


        $dataList= $models->getList($mbp,10,10,@$_GET['postAddTime']);

        return view('index.postForum',['barInfo'=>$barInfo,'dataList'=>$dataList]);
    }


    public function showPost(){
        $models=new Post_data();
        $info=$models->getInfo(intval($_GET['id']));
        #、记录日志
        $logInfo=IpLog::where(array('ip_log_ip'=>getIP(),'ip_log_visits'=>$info['id'],'ip_log_date'=>date('Y-m-d')))->first();
        if(!$logInfo){
            $ipLog=array(
                'ip_log_ip'=>getIP(),
                'ip_log_date'=>date('Y-m-d',time()),
                'ip_log_visits'=>$info['id'],
                'ip_log_page'=>$info['postName'],
                'ip_log_type'=>'post'
            );
            IpLog::Insert($ipLog);
            #、累计浏览量根据ip
            $models->GetRead($_GET['id'],B);
        }
        return view('index.show_post',['info'=>$info]);


    }

    /**
     * 发帖子页面
     */
    public function newthread(){
        return view('index.forum_newthread',['postBar'=>intval($_GET['id'])]);
    }

    /**
     *  会员发布帖子
     */
    public function memberPost(){
        $newModel=new Post_data();
        $return= $newModel->addData($_POST);
        $msg=[];
        if($return){
            $msg['state']='1';
            $msg['msg']='发布成功';
            echo json_encode($msg);
            exit();
        }else{
            $msg['state']='2';
            $msg['msg']='发布成功';
            echo json_encode($msg);
            exit();
        }
    }

}
