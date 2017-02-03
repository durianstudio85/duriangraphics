<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Image_item;

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





}
