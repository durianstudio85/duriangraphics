<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Image_item;
use App\Category;
use App\Download;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        
    }

    public function show($cat, $id)
    {
        $download = New Download;
    	$category = New Category;
        $showItem = Image_item::findOrFail($id);
        return view('product.show', compact('showItem', 'category', 'download'));
    }
}
