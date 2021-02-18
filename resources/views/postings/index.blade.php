@extends('layouts.master')

@section('title', 'Postings')

@section('container')

	<h1>{{ trans_choice('postings.title', $postings->total()) }}</h1>

	<p><small>{{ $postings->count() }} displayed</small></p>

	<hr>

	<ul>

	@foreach($postings as $posting)

		<li>
			<a href="{{ route('postings.show', $posting->id) }}">
				<span>{{ $posting->title }}</span>
				@if($posting->is_featured)
					<span class="badge badge-info ml-2">FEATURED!</span>
				@endif
			</a>
		</li>

	@endforeach

	</ul>

	<hr>

	{{ $postings->links() }}

@endsection
