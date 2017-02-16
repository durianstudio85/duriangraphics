<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use App\Image_item;
use App\Download;
use App\Option;
use DB;

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
        $option = new Option;
        $products = new Image_item;
        $getLatestUpdate = Image_item::skip(0)->take(16)->orderBy('id','desc')->get();
        $category = New Category;

        $download = Download::where('type', '=', 'first')->get();
        $items = array();
        foreach($download as $list) {
            $items[] = $list->img_id;
        }
        $featuredImage = Image_item::whereIn('id', $items)->skip(0)->take(6)->orderBy('id','desc')->get();
        // $featuredImage = Download::distinct()->get();

        return view('home', compact('products', 'getLatestUpdate','category', 'featuredImage', 'option'));
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

    public function categories($cat = '')
    {
        $getCategoryList = Category::get();
        $products = new Image_item;
        $category = new Category;
        $getCategoryAll = Category::orderBy('name')->get();

        if (!empty($cat)) {
            if ($cat == 'popular') {
                $getProdAll = DB::table('downloads')->select('img_id', DB::raw('count(*) as total'))->groupBy('img_id')->orderBy('total','desc')->paginate(15);
            }elseif($cat == 'newitems'){
                $getProdAll = Image_item::whereIn('id', $products->getAllNew() )->orderBy('id','desc')->paginate(15);    
            }else{
                $getCatID = Category::where('name', '=', $cat)->first();    
                $getProdAll = Image_item::where('category', '=', $getCatID->id)->orderBy('id','desc')->paginate(15);    
            }
        }else{
            // $getProdAll = Image_item::orderBy('id','desc')->get();
            $getProdAll = Image_item::orderBy('id','desc')->paginate(15);
        }
        return view('categories', compact('getCategoryList', 'products', 'category', 'getCategoryAll', 'getProdAll'));    
    }

    public function search($val='')
    {
        $getCategoryList = Category::get();
        $products = new Image_item;
        $category = new Category;
        $getCategoryAll = Category::orderBy('name')->get();

        $getProdAll = Image_item::where('title', 'LIKE', '%' . $val . '%')->orderBy('id','desc')->paginate(15);

        return view('search', compact('getCategoryList', 'products', 'category', 'getCategoryAll', 'getProdAll'));   
    }

    public function searchRedirect(Request $request)
    {
        return redirect('/search/'.$request->get('search'));
    }
}
