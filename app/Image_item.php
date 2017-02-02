<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_item extends Model
{
    protected $fillable = [
        'watermark_img', 'download_img', 'title', 'description', 'main_features', 'category',
    ];
}
