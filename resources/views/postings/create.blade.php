@extends('layouts.master')

@section('title', 'Create')

@section('container')

	<h1>Create posting</h1>

	<hr>

	<form method="post" action="{{ route('postings.store') }}" autocomplete="off">

		@csrf

		@include('postings._form')

		<hr>

		<button type="submit" class="btn btn-primary">
			<i class="fa fa-check"></i> Speichern
		</button>

		<a href="{{ route('postings.index') }}" class="btn btn-outline-primary">
			<i class="fa fa-chevron-left"></i> {{ trans('postings.back') }}
		</a>

	</form>

@endsection
