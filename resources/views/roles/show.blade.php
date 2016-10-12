@extends('layouts.app')

@section('content')

<section class="container">
	<div class="row">
		<h2>{{ ucfirst(trans($role->name)) }}</h2>
		@if($role->users->count() > 0)
			<ol>
				@foreach($role->users as $user)
					<li><a href="{{ url('members/' . $user->id) }}">{{ $user->name }}</a></li>
				@endforeach
			</ol>
		@else
			<h3>0 users</h3>
		@endif
	</div>
</section>

@endsection