<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Users extends Model
{
    protected $fillable=[
        'name',
        'email',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'active',
        'role'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}



