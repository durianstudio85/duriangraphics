<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\post;

class Postcategory extends Model
{
   	protected $fillable = [
        'name', 'slug',
    ];

    public function countItems($id='')
    {
    	$count = Post::where('category','=', $id)->count();
    	return $count;
    }

}
