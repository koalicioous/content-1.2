<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rubrik;


class Post extends Model
{
    //Default Values
    protected $attributes = [
        'is_published' => false,
    ];

    public function rubrik(){
        return $this->belongsTo('App\Rubrik');
    }

}
