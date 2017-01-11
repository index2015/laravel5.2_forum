<?php

namespace App\http\models;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{

    protected $table = 'admins';


    public function getInfo($id){

        $amp['id']=$id;
        $dataInfo=$list=Users::where($amp)->first();
        return $dataInfo['name'];
    }
}
