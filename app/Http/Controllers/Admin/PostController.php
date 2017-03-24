<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\User;
use App\Admin;
use App\Postimage;
use App\Postcategory;
use Auth;

class PostController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
   	}


    public function index()
    {
        $post = Post::get();
        $category = new Postcategory;
    	return view('admin.blog.index', compact('post', 'category'));
    }

    public function create()
    {
        $category = Postcategory::get();
    	return view('admin.blog.create', compact('category'));
    }

    public function store(Request $request)
    {
        
        $slug = str_slug($request->get('title'), '-');
        $findIfExist = Post::where('slug', '=', $slug)->count();
        if ($findIfExist > 0) {

            session()->flash('flash_message', 'Title Already Exist!');
            session()->flash('flash_message_important', 'alert-danger');
            return redirect('/admin/posts/create');

        }else{

            $thumbnail = $request->file('thumbnail');
            $thumbnail_extension = $thumbnail->getClientOriginalExtension();      
            $thumbnail_name = str_random(10).'.'.$thumbnail_extension;
            $thumbnail->move(public_path().'/img/',$thumbnail_name);

            $data = [
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'short_content' => $request->get('short_content'),
                'slug' => $slug,
                'author_id' => 1,
                'category' => $request->get('category'),
                'thumbnail' => $thumbnail_name,
            ];    
            $post = Post::create($data);

            session()->flash('flash_message', 'Created Successfully!');
            session()->flash('flash_message_important', 'alert-success');

            return redirect('/admin/posts/'.$post->id.'/edit');
        }        
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $category = Postcategory::get();
        return view('admin.blog.edit', compact('post','category'));
    }

     public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $slug = str_slug($request->get('title'), '-');

        if ($post->slug == $slug ) {
            if (!empty($request->file('thumbnail'))) {
                $thumbnail = $request->file('thumbnail');
                $thumbnail_extension = $thumbnail->getClientOriginalExtension();      
                $thumbnail_name = str_random(10).'.'.$thumbnail_extension;
                $thumbnail->move(public_path().'/img/',$thumbnail_name);
            }else{
                $thumbnail_name = $post->thumbnail;
            }
            
            $data = [
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'short_content' => $request->get('short_content'),
                'slug' => $slug,
                'author_id' => 1,
                'category' => $request->get('category'),
                'thumbnail' => $thumbnail_name,
            ];   

            $post->update($data);

            session()->flash('flash_message', 'Post Updated Successfully!');
            session()->flash('flash_message_important', 'alert-success');
        }else{
            $findIfExist = Post::where('slug', '=', $slug)->count();
            if ($findIfExist > 0) {
                session()->flash('flash_message', 'Title Already Exist!');
                session()->flash('flash_message_important', 'alert-danger');
            }else{
                if (!empty($request->file('thumbnail'))) {
                    $thumbnail = $request->file('thumbnail');
                    $thumbnail_extension = $thumbnail->getClientOriginalExtension();      
                    $thumbnail_name = str_random(10).'.'.$thumbnail_extension;
                    $thumbnail->move(public_path().'/img/',$thumbnail_name);
                }else{
                    $thumbnail_name = $post->thumbnail;
                }
                
                $data = [
                    'title' => $request->get('title'),
                    'content' => $request->get('content'),
                    'short_content' => $request->get('short_content'),
                    'slug' => $slug,
                    'author_id' => 1,
                    'category' => 1,
                ];   

                $post->update($data);

                session()->flash('flash_message', 'Post Updated Successfully!');
                session()->flash('flash_message_important', 'alert-success');
            }

        }
        return redirect('/admin/posts/'.$post->id.'/edit');
    }



    public function uploadImg(Request $request)
    {
        $thumbnail = $request->file('image');
        $thumbnail_file_name = $thumbnail->getClientOriginalName();      
        $thumbnail_extension = $thumbnail->getClientOriginalExtension();      
        $thumbnail_name = str_random(10).'.'.$thumbnail_extension;
        $thumbnail->move(public_path().'/img/posts/',$thumbnail_name);

        $data = [
            'name' => $thumbnail_file_name,
            'filename' => $thumbnail_name,
        ];

        $image = Postimage::create($data);

        session()->flash('flash_message', 'Image Uploaded Successfully!');
        session()->flash('flash_message_important', 'alert-success');

        return redirect()->back();
    }
}
