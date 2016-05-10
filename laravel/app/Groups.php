<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Groups extends Model
{
    protected $fillable=[
        'name',
        'created_at',
        'updated_at'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}



