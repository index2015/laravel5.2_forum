<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NavigationController extends Controller
{



    /**  管理员
     * @param Request $request
     */
    public function showData(Request $request){
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
                $records = count(DB::table('navigation')->where($searchField,'=',$searchString)->get());
                $total = ceil($records/$rows);

            }
            if( $searchOper == 'cn')
            {
                $mpc = DB::table('navigation')
                    ->where($searchField,'like','%' . $searchString . '%')
                    ->orderBy($sidx,$sord)
                    ->skip($offset)
                    ->take($rows)
                    ->get();
                $records = count(DB::table('navigation')
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
            $asc = DB::table('navigation')
                ->orderBy($sidx,$sord)
                ->skip($offset)
                ->take($rows)
                ->get();
            $records = count(DB::table('navigation'));

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

    /** @param  操作类型  新增：add  修改：edit  删除：del
     * @param Request $request
     */
    public function saveData(Request $request){
        $oper = $request->input('oper');
        $addReturnModel= DB::table('navigation');
        $msg=[];
        $data=[];
        $data['name']=$request->input('name');
        $data['url']=$request->input('url');
        $data['state']=$request->input('state');
        $data['add_time']=time();;
        if($oper == 'add') //新增
        {
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
            $editReturn= $addReturnModel->where(array('id'=>$request->input('id')))->update($data);
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
            DB::table('navigation') ->where('id','=',$request->input('id'))->delete();
        }
    }

}
