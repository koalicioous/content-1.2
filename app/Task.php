<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Task extends Model
{
    //Default Values on new Records
    protected $attributes = [
        'is_done' => false,
    ];

    //belongs to many User
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
