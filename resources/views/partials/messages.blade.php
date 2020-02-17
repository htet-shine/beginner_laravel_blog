
@if ($errors->any())
<div class="alert custom alert-warning">
	@foreach ($errors->all() as $error)
		{{ $error }} <br>
	@endforeach
</div>
@endif

@if (session('success_msg'))
	<div class="alert custom alert-success">
		{{ session('success_msg') }}
	</div>
@elseif (session('delete_msg'))
	<div class="alert custom alert-danger">
		{{ session('delete_msg') }}
	</div>
@elseif (session('auth_msg'))
	<div class="alert custom alert-info">
		{{ session('auth_msg') }}
	</div>
@endif
