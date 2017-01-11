<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $uid;
    protected $name;
    protected $admin_uid;
    protected $admin_name;



    public function __construct()
    {

     if(Auth::check()){
            $user = Auth::user();
            session(['uid' =>session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d')]);
            session(['name' =>$user['attributes']['name']]);
            $this->uid=session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');


            $this->name=$user['attributes']['name'];

        }




    }

}
