<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Postcategory;
use App\Post;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = New Postcategory;
        $PostCategoryList = Postcategory::get();
        return view('admin.blog.category.index', compact('post','PostCategoryList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = str_slug($request->get('name'), '-');
        $data = [
            'name' => $request->get('name'),
            'slug' => $slug,
        ];
        $findExist = Postcategory::where('slug', '=', $slug)->count();
        if ( $findExist == 0) {
            Postcategory::Create($data);
            session()->flash('flash_message', 'Category Created Successfully!');
            session()->flash('flash_message_important', 'alert-success');
            return redirect('/admin/posts/categories');
        }else{
            session()->flash('flash_message', 'Category Already Exist!');
            session()->flash('flash_message_important', 'alert-danger');
            return redirect('/admin/posts/categories/create');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
