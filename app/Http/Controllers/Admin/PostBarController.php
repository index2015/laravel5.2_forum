<?php

namespace App\Http\Controllers\Admin;
/**
 * 帖子吧
 */
use App\http\models\Post_data;
use App\http\models\PostBar;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostBarController extends Controller
{
     public function index(){

        return view('admin.post_bar_index');
    }

    /**   帖子吧管理
     * @param Request $request
     * @return string
     */
    public function showData(Request $request){
        $search = $request->input('_search');
        $rows = $request->input('rows');
        $page = $request->input('page');
        $sidx = $request->input('sidx');
        $sord = $request->input('sord');

        if($sidx==''){
            $sidx='PId';
        }
        $offset = (int)($page - 1) * $rows;
        if($search == 'true')
        {
            //查找...
            $searchField = $request->input('searchField');
            $searchString = $request->input('searchString');
            $searchOper = $request->input('searchOper');
            if($searchOper == 'eq') {
                $records = count(DB::table('post_bar')->where($searchField,'=',$searchString)->get());
                $total = ceil($records/$rows);

            }
            if( $searchOper == 'cn')
            {
                $mpc = DB::table('post_bar')
                    ->where($searchField,'like','%' . $searchString . '%')
                    ->orderBy($sidx,$sord)
                    ->skip($offset)
                    ->take($rows)
                    ->get();
                $records = count(DB::table('post_bar')
                    ->where($searchField,'like','%' . $searchString . '%')
                    ->get());
                $total = ceil($records/$rows);
            }
            $json = array(
                'page' => $page,
                'total' => $total,
                'records' => $records,
                'rows' => $mpc
            );
            return json_encode($json);
        }else{
            $asc =PostBar::orderBy($sidx,$sord)
                ->skip($offset)
                ->take($rows)
                ->get();
            $records = count(DB::table('post_bar'));

            $total = ceil($records/$rows);
            $json = array(
                'page' => $page,
                'total' => $total,
                'records' => $records,
                'rows' => $asc
            );
            return json_encode($json);
        }
    }

    /** 获取所属贴吧名称
     * @param $id
     * @return mixed
     */
    public function getTheName($id){
        $return=  DB::table('post_bar')->where(array('PId'=>$id))->first();
        return $return->bar_name;
    }

    /** @param  操作类型
     * @param Request $request
     */
    public function saveData(Request $request){
        $oper = $request->input('oper');
        $addReturnModel= DB::table('post_bar');
        $msg=[];
        $data=[];
        $data['bar_name']=$request->input('bar_name');
        $data['describe']=$request->input('describe');
        $data['The']=$request->input('The');
        if($request->input('The')==0){
            $data['top']='1';
        }
//        $data['thumbnail']=$request->input('thumbnail');
        $data['state']=$request->input('state');


        $data['add_time']=time();;
        if($oper == 'add') //新增
        {
            $data['thumbnail']=$request->input('thumbnail');
            $data['state']='0';
            $addReturn=$addReturnModel->Insert($data);
            if($addReturn){
                $msg['state']='1';
                $msg['msg']='保存成功';
                echo json_encode($msg);
                exit;
            }else{
                $msg['state']='1';
                $msg['msg']='编辑成功';
                echo json_encode($msg);
                exit;
            }

        }
        if($oper == 'edit') //修改
        {
            $editReturn= $addReturnModel->where(array('PId'=>$request->input('id')))->update($data);
            if($editReturn){
                $msg['state']='1';
                $msg['msg']='编辑成功';
                echo json_encode($msg);
                exit;
            }else{
                $msg['state']='1';
                $msg['msg']='编辑失败';
                echo json_encode($msg);
                exit;
            }
        }

        if($oper == 'del')//删除
        {
            DB::table('post_bar') ->where('PId','=',$request->input('id'))->delete();
        }
    }


    public function selectData()
    {
        $Icon_arr= DB::table('post_bar')->where(array('top'=>1))->get();
        $select_str = "<select>";
        foreach( $Icon_arr as $k=>$v )
        {
            $select_str .= "<option value=\"0\">顶级</option><option value='" . $v->PId . "'>" . $v->bar_name . "</option>";
        }
        $select_str .= "</select>";
        echo $select_str;
    }
    public function Grouping()
    {
        $Icon_arr= DB::table('post_bar')->where(array('top'=>null))->get();
        $select_str = "<select>";
        foreach( $Icon_arr as $k=>$v )
        {
            $select_str .= "<option value='" . $v->PId . "'>" . $v->bar_name . "</option>";
        }
        $select_str .= "</select>";
        echo $select_str;
    }




    public function postDataList(Request $request){


          if(!@$_GET['dataType']){
              return view('admin.post_data_list');
          }

//            $postData=new Post_data();
//            $list= $postData->getList(array());

        $search = $request->input('_search');
        $rows = $request->input('rows');
        $page = $request->input('page');
        $sidx = $request->input('sidx');
        $sord = $request->input('sord');

        if($sidx==''){
            $sidx='id';
        }
        $offset = (int)($page - 1) * $rows;
        if($search == 'true')
        {
            //查找...
            $searchField = $request->input('searchField');
            $searchString = $request->input('searchString');
            $searchOper = $request->input('searchOper');
            if($searchOper == 'eq') {
                $records = count(DB::table('post_data')->where($searchField,'=',$searchString)->get());
                $total = ceil($records/$rows);

            }
            if( $searchOper == 'cn')
            {
                $mpc = DB::table('post_data')
                    ->where($searchField,'like','%' . $searchString . '%')
                    ->orderBy($sidx,$sord)
                    ->skip($offset)
                    ->take($rows)
                    ->get();
                $records = count(DB::table('post_data')
                    ->where($searchField,'like','%' . $searchString . '%')
                    ->get());
                $total = ceil($records/$rows);
            }
            $json = array(
                'page' => $page,
                'total' => $total,
                'records' => $records,
                'rows' => $mpc
            );
            return json_encode($json);
        }else{
            $asc =Post_data::orderBy($sidx,$sord)
                ->skip($offset)
                ->take($rows)
                ->get();
            $records = count(DB::table('post_data'));

            $total = ceil($records/$rows);
            $json = array(
                'page' => $page,
                'total' => $total,
                'records' => $records,
                'rows' => $asc
            );
            return json_encode($json);
        }

    }


}
