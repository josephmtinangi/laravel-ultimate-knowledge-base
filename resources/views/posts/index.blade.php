@extends('layouts.app')

@section('content')

	<div class="container">
		@foreach($posts->chunk(4) as $postsSet)
			<div class="row">
				@foreach($postsSet as $post)
					<div class="col-xs-12 col-sm-3 card">
						<h3><a href="{{ url('posts/' . $post->slug) }}">{{ $post->title }}</a></h3>
						<p>{{ str_limit($post->content, 100) }} ...</p>
						<p>Author <em>{{ $post->user->name }}</em></p>
						<p><em>{{ $post->created_at->diffForHumans() }}</em></p>
					</div>
				@endforeach
			</div>
		@endforeach
	</div>

@endsection
