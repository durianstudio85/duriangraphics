<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postimage extends Model
{
    protected $fillable = [
        'name', 'filename',
    ];

}
