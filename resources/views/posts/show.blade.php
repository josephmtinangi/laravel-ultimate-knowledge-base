@extends('layouts.app')

@section('content')

<div class="container">
	<article>
		<img src="{{ $post->image }}" alt="{{ $post->title }}">
		<h2>{{ $post->title }}</h2>
		<h3>Author: <em>{{ $post->user->name }}</em></h3>
		<p>
			{{ $post->content }}
		</p>
	</article>	
</div>

@endsection
