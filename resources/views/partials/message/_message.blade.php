@if (Session::has('success'))

	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	 	 {{ Session::get('success')}}
	</div>

@endif
@if (Session::has('error'))

	<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	 	 {{ Session::get('error')}}
	</div>

@endif

@if (isset($errors) )
@if (count($errors) > 0)

	<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	 	<strong>Errors:</strong> 
	 	@foreach ($errors->all() as $error)
	 		<li>{{ $error }}</li>
	 	@endforeach
	</div>

@endif
@endif