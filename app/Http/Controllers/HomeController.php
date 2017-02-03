<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use App\Image_item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = new Image_item;
        $getLatestUpdate = Image_item::skip(0)->take(8)->orderBy('id','desc')->get();
        $category = New Category;

        return view('home', compact('products', 'getLatestUpdate','category'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function contact()
    {
        return view('contact');
    }

    public function categories()
    {
        $getCategoryList = Category::get();
        $products = new Image_item;
        $category = new Category;
        return view('categories', compact('getCategoryList', 'products', 'category'));
    }
}
