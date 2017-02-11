<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
   	}

   	public function index()
   	{
   		$categoryList = Category::get();
   		$category = new Category;
   		return view('admin.category.index', compact('categoryList', 'category'));
   	}

   	public function create()
   	{
   		return view('admin.category.create');
	}

	public function store(Request $request)
	{
		$data = [
			'name' => $request->get('name'),
		];
		
        Category::Create($data);
        return redirect('/admin/categories/');

	}
}
