<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Image_item;
use App\Download;

class Category extends Model
{
 	protected $fillable = [
        'name', 'cat',
    ];

    public function getCatName($id = '') {
    	$item = Category::findOrFail($id);
    	return $item->name;
	}

	public function countCategoryContent($id = '')
	{
		$itemCount = Image_item::where('category','=',$id)->count();
		return $itemCount;
	}

	public function countAll()
	{
		$itemCount = Image_item::count();
		return $itemCount;
	}

	public function getNoOfDownloads()
    {
        $download = Download::where('type', '=', 'first')->count();
        return $download;
    }




}
