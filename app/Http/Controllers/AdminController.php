<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Image_item;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
   	}


	public function index()
	{
        return view('admin.dashboard');
    }

    public function createProducts()
    {
    	$categoryList = Category::get();
    	return view('admin.productcreate', compact('categoryList'));	
    }

    public function storeProducts(Request $request)
    {

    	$data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'main_features' => $request->get('main_features'),
            'category' => $request->get('category'),
            'download_img' => $download_img_name,
            'watermark_img' => $watermark_img_name,
        ];

        $getItems = Image_item::Create($data);

        //Fow Download Image
	        $download_img = $request->file('download_img');
	        $download_img_extension = $download_img->getClientOriginalExtension();      
	        $download_img_name = str_random(20).'.'.$download_img_extension;
	        $download_img->move(public_path().'/upload/zip',$download_img_name);

	        $watermark_img = $request->file('watermark_img');
	        $watermark_img_extension = $watermark_img->getClientOriginalExtension();      
	        $watermark_img_name = 'DurianGraphics_'.$getItems->id.'.'.$watermark_img_extension;
	        $watermark_img->move(public_path().'/images',$watermark_img_name);

	        $medium_size = $request->file('medium_size');
	        $medium_size_extension = $medium_size->getClientOriginalExtension();      
	        $medium_size_name = 'DurianGraphics_'.$getItems->id.'_m.'.$medium_size_extension;
	        $medium_size->move(public_path().'/images',$medium_size_name);

	        $small_size = $request->file('small_size');
	        $small_size_extension = $small_size->getClientOriginalExtension();      
	        $small_size_name = 'DurianGraphics_'.$getItems->id.'_s.'.$small_size_extension;
	        $small_size->move(public_path().'/images',$small_size_name);
	    // Download Image End

	    $fileData = [
	    	'download_img' => $download_img_name,
            'watermark_img' => $watermark_img_name,	
	    ];

        $getItems->update($fileData);

        return redirect('/downloads');

        // $filename = str_random(20).$watermark_img->getClientOriginalName();

         // DurianGraphics000001
    }
}
