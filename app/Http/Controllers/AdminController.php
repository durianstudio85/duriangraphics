<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Image_item;
use App\Download;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
   	}


	public function index()
	{
        $user = new User;
        $image = new Image_item;
        $download = new Download;
        $recentDownloads = Download::where('type','=','first')->orderBy('id','desc')->skip(0)->take(5)->get();

        $recentProductsFirst = Image_item::orderBy('id', 'desc')->first();
        $recentProductsThumb = Image_item::orderBy('id', 'desc')->skip(1)->take(1)->first();

        return view('admin.dashboard',compact('recentDownloads', 'user', 'image','download', 'recentProductsFirst', 'recentProductsThumb'));
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
        ];
        $getItems = Image_item::Create($data);
        //Fow Download Image
	        $download_img = $request->file('download_img');
	        $download_img_extension = $download_img->getClientOriginalExtension();      
	        $download_img_name = 'DurianGraphics_'.$getItems->id.'.'.$download_img_extension;
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
        return redirect('/admin/products/create');
        // $filename = str_random(20).$watermark_img->getClientOriginalName();
         // DurianGraphics000001
    }

    public function products()
    {
        $products = new Image_item;
        $category = new Category;
        $prodList = Image_item::paginate(30);
        return view('admin.product', compact('products', 'category', 'prodList'));    
    }

    public function showProducts($id)
    {
        $image = Image_item::findOrFail($id);
        $category = new Category;
        $categoryList = Category::get();
        return view('admin.productshow', compact('image', 'categoryList', 'category'));   
    }

    public function updateProducts(Request $request, $id)
    {
        $image = Image_item::findOrFail($id);
        $small_size = $request->file('small_size');
        $watermark_img = $request->file('watermark_img');
        $medium_size = $request->file('medium_size');
        $download_img = $request->file('download_img');

        if (!empty($watermark_img)) {
            $watermark_img_extension = $watermark_img->getClientOriginalExtension();      
            $watermark_img_name = 'DurianGraphics_'.$image->id.'.'.$watermark_img_extension;
            $watermark_img->move(public_path().'/images',$watermark_img_name);
        }else{
            $watermark_img_name = $image->watermark_img;
        }

        if (!empty($medium_size)) {
            $medium_size_extension = $medium_size->getClientOriginalExtension();      
            $medium_size_name = 'DurianGraphics_'.$image->id.'_m.'.$medium_size_extension;
            $medium_size->move(public_path().'/images',$medium_size_name);
        }

        if (!empty($small_size)) {
            $small_size_extension = $small_size->getClientOriginalExtension();      
            $small_size_name = 'DurianGraphics_'.$image->id.'_s.'.$small_size_extension;
            $small_size->move(public_path().'/images',$small_size_name);
        }        

        if (!empty($download_img)) {
            $download_img_extension = $download_img->getClientOriginalExtension();      
            $download_img_name = 'DurianGraphics_'.$image->id.'.'.$download_img_extension;
            $download_img->move(public_path().'/upload/zip',$download_img_name);
        }else{
            $download_img_name = $image->download_img;
        }

        $data = [
            'download_img' => $download_img_name,
            'watermark_img' => $watermark_img_name, 
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'main_features' => $request->get('main_features'),
            'category' => $request->get('category'),
        ];

        $image->update($data);
        return redirect('/admin/products/'.$image->id.'/edit');

    }
}
