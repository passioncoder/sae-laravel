@extends('layouts.master')

@section('title', 'Edit')

@section('container')

	<h1>Edit posting</h1>

	<hr>

	<form method="post" action="{{ route('postings.update', $posting->id) }}" autocomplete="off">

		@csrf
		@method('put')

		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" id="title" name="title" value="{{ $posting->title }}">
		</div>

		<div class="form-group">
			<label for="content">Content:</label>
			<textarea class="form-control" id="content" name="content">{{ $posting->content }}</textarea>
		</div>

		<div class="form-group">
			<label for="published_at">{{ trans('validation.attributes.published_at') }}:</label>
			<input type="date" class="form-control" id="published_at" name="published_at" value="{{ optional($posting->published_at)->format('Y-m-d') }}">
		</div>

		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" {{ $posting->is_featured ? 'checked' : '' }}>
			<label class="form-check-label" for="is_featured">Feature me</label>
		</div>

		<hr>

		<button type="submit" class="btn btn-primary">
			<i class="fa fa-check"></i> Speichern
		</button>

		<a href="{{ route('postings.show', $posting->id) }}" class="btn btn-outline-primary">
			<i class="fa fa-chevron-left"></i> {{ trans('postings.back') }}
		</a>

	</form>

@endsection
