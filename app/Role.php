<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    //Has Many Users
    public function users(){
        return $this->hasMany('App\User');
    }
}
