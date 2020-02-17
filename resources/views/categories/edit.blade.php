@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="section-title-container">
			<h1 class="section-title">Add New Category</h1>
		</div>

		@include('partials.messages')

		<form method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" value="{{ $category->id }}" disabled>
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" value="{{ $category->name }}">
			</div>
			<input type="submit" class="btn btn-dark" value="Add New">
		</form>
	</div>

@endsection