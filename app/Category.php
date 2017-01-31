<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 	protected $fillable = [
        'name', 'cat',
    ];


    public function getCatName($id = '') {
    	$item = Category::findOrFail($id);
    	return $item->name;
	}
}
