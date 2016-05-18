<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class combineusercompany extends Model
{
    protected $fillable=[
  'company_id',
  'user_id',
    ];
    protected $table = 'combineusercompany';
}
