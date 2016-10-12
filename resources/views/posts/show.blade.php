@extends('layouts.app')

@section('content')

<div class="container">
	<article>
		<img src="{{ $post->image }}" alt="{{ $post->title }}">
		<h2>{{ $post->title }}</h2>
		<h3>Author: <a href="{{ url('members/' . $post->user->id) }}"><em>{{ $post->user->name }}</em></a></h3>
		<p>
			{{ $post->content }}
		</p>
	</article>	
</div>

@endsection
