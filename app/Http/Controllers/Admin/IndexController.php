<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/16 0016
 * Time: 上午 9:21
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests;
use Illuminate\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class  IndexController extends Controller{


     public function index(){

         return view('admin.index');
     }

    public function system(){
        return view('admin.system');
    }

    public function userList(){
        return view('admin.userList');
    }
    public function adminList(){
        return view('admin.adminList');
    }


    /**  管理员
     * @param Request $request
     */
    public function adminData(Request $request){
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
                $data = DB::table('admins')
                    ->where($searchField, '=', $searchString)->orderBy($sidx,$sord)
                    ->skip($offset)
                    ->take($rows)->get();
                return json_encode($data);
            }
            if( $searchOper == 'cn')
            {
                $mpc = DB::table('admins')
                    ->where($searchField,'like','%' . $searchString . '%')
                    ->orderBy($sidx,$sord)
                    ->skip($offset)
                    ->take($rows)
                    ->get();
                $records = count(DB::table('admins')
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
            $data=DB::table('admins')
                ->orderBy($sidx,$sord)
                ->skip($offset)
                ->take($rows)->get();
            return json_encode($data);
        }
    }

    public function userData(Request $request){
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
                $data = DB::table('users')
                    ->where($searchField, '=', $searchString)->orderBy($sidx,$sord)
                    ->skip($offset)
                    ->take($rows)->get();
                return json_encode($data);
            }
            if( $searchOper == 'cn')
            {
                $mpc = DB::table('users')
                    ->where($searchField,'like','%' . $searchString . '%')
                    ->orderBy($sidx,$sord)
                    ->skip($offset)
                    ->take($rows)
                    ->get();
                $records = count(DB::table('users')
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
            $data=DB::table('users')
                ->orderBy($sidx,$sord)
                ->skip($offset)
                ->take($rows)->get();
            return json_encode($data);
        }

    }

    /**
     * 更新  删除    修改
     *
     *
     *
     */
    public function indexUpdate(Request $request)
    {
        $oper = $request->input('oper');
        if($oper == 'add') //新增
        {
            $data=[];
            $data['name']=$request->input('name');
            $data['email']=$request->input('email');
            $data['password']=$request->input('password');
            $data['created_at']=$request->input('created_at');
            $data['updated_at']=$request->input('updated_at');
            $data['group']=$request->input('group');
            $addReturn= DB::table('users')->Insert($data);

        }
        if($oper == 'edit') //修改
        {

        }
        if($oper == 'del')//删除
        {
            DB::table('users') ->where('id','=',$request->input('id'))->delete();
        }
    }

    public function systemSeo(){
        echo "seo";
    }

    public function navigationList(){

        return view('admin.navigationList');
    }

}