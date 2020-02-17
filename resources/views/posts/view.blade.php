@extends('layouts.app')

@section('content')
	
	<div class="container">

		@include('partials.messages')

		<div class="row">
		
			<div class="col-12">
				<div class="card-custom single">
					<div class="card-header-custom">
						<h1>
							<a href="#">{{ $post->title }}</a>
						</h1>
						<div class="header-buttons">
							<a href="{{ route('post.edit', $post->id) }}">Edit</a>
							<a href="{{ route('post.delete', $post->id) }}">Delete</a>
						</div>
					</div>
					<div class="card-body-custom">
						<p>{{ $post->content }}</p>
					</div>
					<div class="card-footer-custom single">
						<p>By: <span>{{ $post->user->name }}</span></p>
						<p>Category: <span>{{ $post->category->name }}</span></p>
						<p>Comments: <span>5</span></p>
						<p>Published: <span>{{ $post->created_at->diffforHumans() }}</span></p>
					</div>

					<div class="comment-container">
						<h1>Comments: <span>{{ count($post->comments) }}</span></h1>
						<div class="comment-add">
							<form action="{{ route('comment.create') }}">
								<input type="hidden" name="post_id" value="{{ $post->id }}">
								<div class="form-group">
									<textarea name="comment" cols="30" rows="2" class="form-control" 
									placeholder="What are your thoughts on this post. Comment here..."></textarea>
								</div>
								<input type="submit" class="btn btn-dark comment" value="Post">
							</form>
						</div>
						<div class="comment-view">
							
							@foreach ($post->comments as $comment)
								<p class="py-2 my-2">{{ $comment->comment }}</p>
							@endforeach

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

@endsection