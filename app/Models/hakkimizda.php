<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class hakkimizda extends Model
{
    use SoftDeletes;
    protected $table="users";
    protected $fillable=['name','email','password'];
}
