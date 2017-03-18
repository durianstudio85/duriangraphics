<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'thumbnail', 
        'title', 
        'content', 
        'author_id', 
        'category', 
        'short_content', 
        'slug', 
    ];
}
