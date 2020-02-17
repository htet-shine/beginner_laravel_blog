<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth')->except(['index', 'view']);
  }

  public function index()
  {
  	$posts = Post::orderby('created_at', 'desc')->paginate(6);

  	return view('posts.index')->with([
  		'posts'       => $posts,
  	]);
  }

  public function view($id)
  {
  	$post = Post::find($id);

  	return view('posts.view')->with([
  		'post'			=> $post,
  	]);
  }

  public function add()
  {
    $categories = Category::all();

    return view('posts.add')->with([
      'categories'    => $categories,
    ]);
  }

  public function create()
  {
    $validator = validator(request()->all(), [
      'title'       => 'required',
      'excerpt'     => 'required',
      'content'     => 'required',
      'category_id' => 'required',
      'user_id'     => 'required',
    ]);

    if ($validator->fails()) {
        
      return redirect('/posts/add')->withErrors($validator);

    }

    $post = new Post;

    $post->title = request()->title;
    $post->excerpt = request()->excerpt;
    $post->content = request()->content;
    $post->category_id = request()->category_id;
    $post->user_id = request()->user_id;
    $post->save();

    return redirect('/posts')->with('success_msg', 'Post Added');
  }

  public function edit($id)
  {
    $post = Post::find($id);

    $categories = Category::all();

    if ($post->user_id == auth()->user()->id) {
      
      return view('posts.edit')->with([
        'post'        => $post,
        'categories'  => $categories,
      ]);

    }
    return back()->with('auth_msg', "You're not authorized to edit this post");
  }

  public function update($id)
  {
    $validator = validator(request()->all(), [
      'title'       => 'required',
      'excerpt'     => 'required',
      'content'     => 'required',
      'category_id' => 'required',
      'user_id'     => 'required',
    ]);

    if ($validator->fails()) {
        
      return back()->withErrors($validator);

    }

    $post = Post::find($id);

    $post->title = request()->title;
    $post->excerpt = request()->excerpt;
    $post->content = request()->content;
    $post->category_id = request()->category_id;
    $post->user_id = request()->user_id;
    $post->save();

    return back()->with('success_msg', 'Post Updated');

  }

  public function delete($id)
  {
  	$post = Post::find($id);

  	if ($post->user_id == auth()->user()->id) {

      $post->delete();
      return redirect('/posts')->with('delete_msg', 'Post Deleted');
    }
    return back()->with('auth_msg', "You're not authorized to delete this post");
  }
}
