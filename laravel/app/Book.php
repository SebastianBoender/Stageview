<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Book extends Model
{
    protected $fillable=[
        'compName',
        'city',
        'street',
        'title',
        'author',
        'publisher',
        'image',
        'created_at',
        'updated_at',
        'review',
        'location',
        'tags'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}



