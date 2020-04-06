<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //Default Values on new Records
    protected $attributes = [
        'is_done' => false,
    ];
}
