<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //mass asigments to allow

    protected $fillable=['title','body'];
}
