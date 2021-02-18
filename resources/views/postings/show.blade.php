@extends('layouts.master')

@section('title', $posting->title)

@section('container')

	<h1>{{ $posting->title }}</h1>

	@if($posting->is_featured)
		<span class="badge badge-info">FEATURED!</span>
	@endif

	@if($posting->content)
		<p>{{ $posting->content }}</p>
	@endif

	<p>Published at {{ $posting->published_at->diffForHumans() }} at {{ $posting->published_at->format('d. M Y H:i') }}</p>

	<hr>

	<a href="{{ route('postings.index') }}" class="btn btn-outline-primary">
		<i class="fa fa-chevron-left"></i> {{ trans('postings.back') }}
	</a>

@endsection
