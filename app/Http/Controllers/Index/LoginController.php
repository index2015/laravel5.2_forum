<?php

namespace App\Http\Controllers\Index;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    /**
     * 处理登录认证
     *
     * @return Response
     */
    public function authenticate()
    {


        if (Auth::guard(['email' =>$_POST['email'], 'password' =>$_POST['email']])) {
            // 认证通过...

            echo "OK";
            exit;
            return redirect()->intended('dashboard');
        }else{
            echo "NO";
        }
    }

    public function index(){

    }


    public function logout(){
        Auth::logout();
    }
}
