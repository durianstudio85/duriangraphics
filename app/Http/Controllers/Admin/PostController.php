<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\User;
use App\Admin;
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
    	return view('admin.blog.index', compact('post'));
    }

    public function create()
    {
    	return view('admin.blog.create');
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
                'category' => 1,
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
        return view('admin.blog.edit', compact('post'));
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
                'category' => 1,
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
}
