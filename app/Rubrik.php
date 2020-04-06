<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Rubrik extends Model
{
    //Has Many Post
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
