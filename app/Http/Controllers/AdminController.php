<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $adminInfo = DB::table('admins')->where(array('id'=>session()->get('login_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d')))->first();
        $this->admin_name=$adminInfo->name;
        session(['admin_name'=>$adminInfo->name]);
        session(['admin_uid'=>$adminInfo->id]);


        $this->middleware('auth:admin');
    }

    /**
     * 登录+注册成功以后路由地址
     */
    public function index()
    {


        $admin =Auth::guard('admin')->user();
        return view('admin.index',['admin'=>$admin]);
        $msg=[];
        $msg['state']='1';
        $msg['msg']='注册成功';
        echo json_encode($msg);
    }

}