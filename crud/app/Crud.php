<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'user';
    protected $fillable = ['name', 'mobile', 'email'];
}
