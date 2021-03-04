@extends('layouts.master')

@section('title', $posting->title)

@section('container')

	<h1>{{ $posting->title }}</h1>

	@if($posting->image)
		<img src="{{ asset('/storage/'.$posting->image) }}">
		<!--
		<a href="{{ asset('/storage/'.$posting->image) }}" target="_blank">Download PDF</a>
		-->
	@endif

	<a href="{{ $qrcode->getDataUri() }}" download="qrcode.png">
		<img src="{{ $qrcode->getDataUri() }}" width="256" height="256">
	</a>

	@if($posting->is_featured)
		<span class="badge badge-info">FEATURED!</span>
	@endif

	@if($posting->content)
		<p>{{ $posting->content }}</p>
	@endif

	<p>Published at {{ $posting->published_at->diffForHumans() }} at {{ $posting->published_at->format('d. M Y H:i') }}</p>

	@if($posting->user)
		<p>Written by {{ $posting->user->name }}.</p>
	@endif

	<hr>

	<div class="d-flex flex-row">

		<a href="{{ route('postings.index') }}" class="btn btn-outline-primary mr-2">
			<i class="fa fa-chevron-left"></i> {{ trans('postings.back') }}
		</a>

		@can('update-posting', $posting)

			<a href="{{ route('postings.edit', $posting->id) }}" class="btn btn-outline-primary mr-2">
				<i class="fa fa-pencil"></i> Bearbeiten
			</a>

			<form method="post" action="{{ route('postings.destroy', $posting->id) }}" autocomplete="off" onsubmit="return confirm('Are you sure?')">

				@csrf
				@method('delete')

				<button type="submit" class="btn btn-danger">
					<i class="fa fa-trash"></i> Löschen
				</button>

			</form>

		@endcan

	</div>

@endsection
