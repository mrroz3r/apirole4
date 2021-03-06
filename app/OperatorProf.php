<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatorProf extends Model
{
    protected $guarded = ['id'];

    public static function rules($updates = false, $id = null)
    {
    	$rules = [
    		'nama' => 'required',
    		'tanggal_lahir' => 'required',
    		'alamat' => 'required',
    		'fotopribadi' => 'required',
    		'noktp' => 'required',
    		'email' => 'required',
    		'password' => 'required',
    		'api_token' => 'required',
    		'remember_token' => 'required',
    		'role' => 'required',
    		'status' => 'required'
    	];
    }
}
