<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function __construct()
	{
	  $this->middleware('auth')->except(['index', 'view']);
	}
	
	public function index()
	{
		$categories = Category::orderBy('created_at', 'desc')->get();

		return view('categories.index')->with([
			'categories'		=> $categories,
		]);
	}

	public function add()
	{
		return view('categories.add');
	}

	public function create()
	{
		$validator = validator(request()->all(), [
			'name'			=> 'required',
		]);

		if ($validator->fails()) {
			return back()->withErrors($validator);
		}

		$category = new Category;
		$category->name = request()->name;
		$category->save();

		return redirect('/categories')->with('success_msg', 'Category Added');
	}

	public function edit($id)
	{
		$category = Category::find($id);

		return view('categories.edit')->with([
			'category'		=> $category,
		]);	
	}

	public function update($id)
	{
		$validator = validator(request()->all(), [
			'name'			=> 'required',
		]);

		if ($validator->fails()) {
			return back()->withErrors($validator);
		}

		$category = Category::find($id);
		$category->name = request()->name;
		$category->save();

		return back()->with('success_msg', 'Category Updated');
	}
}
