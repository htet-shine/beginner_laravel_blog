@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="section-title-container">
			<h1 class="section-title">Categories</h1>
		</div>
		
		@include('partials.messages')

		<ul class="list-group list-group-flush">
			@foreach ($categories as $category)
				<li class="list-group-item">
					{{ $category->name }} 
					<a class="float-right" href="{{ route('category.edit', $category->id) }}">Edit</a>
				</li>
			@endforeach
		</ul>
	</div>

@endsection