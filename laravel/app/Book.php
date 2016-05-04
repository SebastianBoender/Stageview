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
        'review',
        'location',
        'tags'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}



