<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
	public function __construct()
	{
	  $this->middleware('auth')->except(['index', 'view']);
	}
	
	public function create()
	{
		$validator = validator(request()->all(), [
			'comment'		=> 'required',
		]);

		if ($validator->fails()) {
			return back()->withErrors($validator);
		}

		$comment = new Comment;

		$comment->comment = request()->comment;
		$comment->post_id = request()->post_id;
		$comment->save();

		return back()->with('success_msg', 'Comment Added');
	}
}
