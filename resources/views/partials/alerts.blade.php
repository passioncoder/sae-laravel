
@foreach(['error' => 'danger', 'warning' => 'warning', 'info' => 'info', 'status' => 'info', 'success' => 'success'] as $key => $cn)

	@if($msg = Session::get($key))
		<div class="alert alert-{{ $cn }}">
			{{ trans($msg) }}
		</div>
	@endif

@endforeach

@if(is_object($errors) && $errors->any())
	@if($errors->count() > 1)
		<div class="alert alert-block alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach	
			</ul>
		</div>
	@else
		<div class="alert alert-danger">
			{{ $errors->first() }}
		</div>
	@endif
@endif
