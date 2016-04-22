<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Model
{
    protected $fillable=[
        'name',
        'email',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'active'
    ];

    //use SoftDeletes;

    //protected $dates = ['deleted_at'];
}



