<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = [
        'img_id', 'user_id',
    ];



    public function countImageDownloads($id='')
    {
    	$download = Download::where('img_id', '=', $id)->count();
    	return $download;
    }
}