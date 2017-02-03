<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Image_item;
use App\Category;

class DownloadController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = New Category;

        $allImage = Image_item::get();
        return view('download.index', compact('allImage','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryList = Category::get();
        return view('download.create',compact('categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Fow Download Image
        $download_img = $request->file('download_img');
        $download_img_extension = $download_img->getClientOriginalExtension();      
        $download_img_name = str_random(20).'.'.$download_img_extension;
        $download_img->move(public_path().'/upload/zip',$download_img_name);

        $watermark_img = $request->file('watermark_img');
        $watermark_img_extension = $watermark_img->getClientOriginalExtension();      
        $watermark_img_name = str_random(20).'.'.$watermark_img_extension;
        $watermark_img->move(public_path().'/images',$watermark_img_name);

        $data = [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'main_features' => $request->get('main_features'),
            'category' => $request->get('category'),
            'download_img' => $download_img_name,
            'watermark_img' => $watermark_img_name,
        ];

        Image_item::Create($data);
        return redirect('/downloads');

        // $filename = str_random(20).$watermark_img->getClientOriginalName();

         // DurianGraphics000001


    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cat, $id)
    {

        $category = New Category;

        $showItem = Image_item::findOrFail($id);
        return view('download.show', compact('showItem', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDownload($id)
    {

        $zero = 1000000;
        $downloadId = $zero + $id;

        $item = Image_item::findOrFail($id);
        //PDF file is stored under project/public/download/info.pdf
        $myFile= public_path(). "/upload/zip/".$item->download_img;
        $headers = array(
                  'Content-Type: application/zip',
                );
        $newName = 'DurianGraphics'.$id.'.zip';

        return response()->download($myFile, $newName, $headers);    }
}
