@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="section-title-container">
			<h1 class="section-title">Add New Post</h1>
		</div>

		@include('partials.messages')

		<form method="post">
			{{ csrf_field() }}
			<div class="form-group">
				{{-- <label for="user_id">Your User ID</label> --}}
				<input type="hidden" name="user_id" value="{{ Auth::id() }}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="excerpt">Excerpt</label>
				<textarea type="text" name="excerpt" class="form-control" rows="2"></textarea>
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea type="text" name="content" class="form-control" rows="6"></textarea>
			</div>
			<div class="form-group">
				<label for="category_id">Choose Category</label>
				<select name="category_id" class="form-control">

						<option value="">--Select--</option>
						
					@foreach ($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach

				</select>
			</div>
			<input type="submit" class="btn btn-dark" value="Add New">
		</form>
	</div>

@endsection