<?php

namespace App\http\models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getInfo($id){

        $amp['id']=$id;
        $dataInfo=$list=Users::where($amp)->first();
        return $dataInfo['name'];
    }
}
