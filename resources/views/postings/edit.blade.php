@extends('layouts.master')

@section('title', 'Edit')

@section('container')

	<h1>Edit posting</h1>

	<hr>

	<!-- fileupload: enctype="multipart/form-data"  -->
	<form method="post" action="{{ route('postings.update', $posting->id) }}" autocomplete="off" enctype="multipart/form-data">

		@csrf
		@method('put')

		@include('postings._form')

		<hr>

		<button type="submit" class="btn btn-primary">
			<i class="fa fa-check"></i> Speichern
		</button>

		<a href="{{ route('postings.show', $posting->id) }}" class="btn btn-outline-primary">
			<i class="fa fa-chevron-left"></i> {{ trans('postings.back') }}
		</a>

	</form>

@endsection
