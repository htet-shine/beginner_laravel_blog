@extends('layouts.app')

@section('content')


	
	<div class="container">

		@include('partials.messages')

		<div class="row">
		
		@foreach ($posts as $post)

			<div class="col-12 col-xl-6">
				<div class="card-custom">
					<div class="card-header-custom">
						<h1>
							<a href="{{ route('post.view', $post->id) }}">{{ $post->title }}</a>
						</h1>
						{{-- <div class="header-buttons">
							<a href="#">Edit</a>
							<a href="#">Delete</a>
						</div> --}}
					</div>
					<div class="card-body-custom">
						<p>{{ $post->excerpt }}</p>
					</div>
					<div class="card-footer-custom">
						<p>By: <span>{{ $post->user->name }}</span></p>
						<p>Category: <span>{{ $post->category->name }}</span></p>
						<p>Comments: <span>{{ count($post->comments) }}</span></p>
						<p>Published: <span>{{ $post->created_at->diffforHumans() }}</span></p>
					</div>
				</div>
			</div>

		@endforeach

		</div>

		<div class="pagi-wrapper">
			{{ $posts->links() }}
		</div>

	</div>

@endsection