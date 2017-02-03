<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_item extends Model
{
    protected $fillable = [
        'watermark_img', 'download_img', 'title', 'description', 'main_features', 'category',
    ];


    public function getFirstItemByCategory($id = ''){
		$item = Image_item::where('category', '=', $id)->orderBy('id', 'desc')->first();
		$items = $item->watermark_img;
		return $items;
	}

	public function changeSizeImage($fileName = '', $size = '')
	{
        $explodedFilename = explode('.', $fileName);
        if ($size == 'm') {
			$newFilename = $explodedFilename[0].'_m.'.$explodedFilename[1];        	
        }elseif ($size == 'l') {
        	$newFilename = $explodedFilename[0].'_l.'.$explodedFilename[1];        	
        }
        return $newFilename;
	}	

}
