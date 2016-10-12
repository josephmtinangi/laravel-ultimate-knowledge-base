@extends('layouts.app')

@section('content')

<section class="container">
	<h2>Roles</h2>
	@if($roles->count() > 0)
		@foreach($roles->chunk(6) as $rolesSet)
			<div class="row">
				@foreach($rolesSet as $role)
					<div class="col-xs-12 col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><a href="{{ url('roles/' . $role->name) }}">{{ ucfirst(trans($role->name)) }}</a></h3>
							</div>
							<div class="panel-body">
								@if($role->users->count() > 0)
									<ol>
										@foreach($role->users as $user)
											<li><a href="{{ url('members/' . $user->id) }}">{{ $user->name }}</a></li>
										@endforeach
									</ol>
								@else
									Zero
								@endif
							</div>
						</div>
					</div>
				@endforeach
			</div>
		@endforeach	
	@else
		<h2>Zero</h2>
	@endif
</section>

@endsection