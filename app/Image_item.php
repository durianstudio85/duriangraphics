<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

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
        if ( $fileName == '') {
            $explodedFilename = explode('.', $fileName);
            if ($size == 'm') {
                $newFilename = $explodedFilename[0].'_m.'.$explodedFilename[1];         
            }elseif ($size == 's') {
                $newFilename = $explodedFilename[0].'_s.'.$explodedFilename[1];         
            }
            return $newFilename;
        }
	}

    public function getOneImageDetail($id ='')
    {
        $oneImage = Image_item::findOrFail($id);
        return $oneImage;
    }

    public function getAllNew()
    {
        $getProdAll = Image_item::get();    
        $items = array();
        foreach($getProdAll as $list) {
            $dt = $list->created_at;
            $endDate = $dt->addMonths(1); 
            $startDate = Carbon::now();

            $outputDate = $startDate->diffInDays($endDate);
            if ($outputDate > 1 ) {
                $items[] = $list->id;
            }
        }
        return $items;
    }

    


}
