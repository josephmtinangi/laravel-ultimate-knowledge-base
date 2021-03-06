@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="page-header">
		  <h1>Members</h1>
		</div>
		@foreach($members->chunk(4) as $membersSet)
			<div class="row">
				@foreach($membersSet as $member)
					<div class="col-xs-12 col-sm-3 card">
						<h3><a href="{{ url('members/' . $member->id) }}">{{ $member->name }}</a></h3>
						<p>{{ $member->email }}</p>
						<p>
							<h4>Role(s):</h4>
							@if($member->roles->count() > 0)
								<ul class="list-unstyled">
								@foreach($member->roles as $role)
									<li><a href="{{ url('roles/' . $role->name) }}">{{ $role->name }}</a></li>
								@endforeach
								</ul>
							@endif
						</p>
						<p>{{ $member->address->zip }}</p>
						<p>{{ $member->address->country }}</p>
					</div>
				@endforeach
			</div>
		@endforeach
	</div>

@endsection
