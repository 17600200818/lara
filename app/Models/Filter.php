<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $table = 'filters';
    protected $fillable = ['name', 'description'];
//    protected $hidden = ['password'];
}
