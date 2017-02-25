<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Image_item;
use App\Category;
use App\Download;
use App\Subscription;
use Auth;
use Carbon\Carbon;

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
        $imageItem = new Image_item;
        $downloadModel = New Download;
        $user_id = Auth::user()->id;
        $getDownload = Download::where('user_id','=', $user_id)->where('type','=', 'first')->paginate(10);

        $allImage = Image_item::get();
        return view('download.index', compact('allImage','category', 'getDownload','imageItem', 'downloadModel'));
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
        $dateCreate = $showItem->created_at;
        return view('download.show', compact('showItem', 'category', 'dateCreate'));
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
        
        $user_type = Auth::user()->account_type;

        if ( $user_type == 'free' ) {
            return $this->downloadTypeUser($id, 10);
        }elseif ( $user_type == 'bussiness' ) {
            
        }


    }


    public function downloadTypeUser($img_id='', $limit)
    {
        $subscription = new Subscription;
        $user_id = Auth::user()->id;
        $downloadCount = Download::where('img_id','=',$img_id)->where('user_id','=',$user_id)->count();
        $limitDownload = $subscription->getLimitDownload($user_id);
        $item = Image_item::findOrFail($img_id);

        if ($downloadCount > 0) {
            $myFile= public_path(). "/upload/zip/".$item->download_img;
            $headers = array('Content-Type: application/zip');
            $newName = 'DurianGraphics'.$item->id.'.zip';
            $type = "repeat";
            Download::Create(['img_id' => $item->id,'user_id' => $user_id,'type' => $type]);

            return response()->download($myFile, $newName, $headers);  
             // redirect()->back();
        }else{
            if ($limitDownload > $limit ) {
                session()->flash('flash_message', 'You Already in Your Limit!. Please Upgrade');
                session()->flash('flash_message_important', 'alert-warning');
                return redirect()->back();
            }else{
                $myFile= public_path(). "/upload/zip/".$item->download_img;
                $headers = array('Content-Type: application/zip');
                $newName = 'DurianGraphics'.$item->id.'.zip';
                $type = "first";
                Download::Create(['img_id' => $item->id,'user_id' => $user_id,'type' => $type]);

                return response()->download($myFile, $newName, $headers); 
            }

        }

    }
}
