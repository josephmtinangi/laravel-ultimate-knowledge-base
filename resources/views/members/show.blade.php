@extends('layouts.app')

@section('content')

<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-xs-4">
				<img src="http://lorempixel.com/200/200" class="img-responsive img-circle" alt="Image">
			</div>
			<div class="col-sm-8">
				<h2>{{ $member->name }}</h2>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Address</h3>
				</div>
				<div class="panel-body">
					<address>
						Country: {{ $member->address->country }}<br>
						ZIP Code: {{ $member->address->zip }}
					</address>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Roles</h3>
				</div>
				<div class="panel-body">
					@if($member->roles->count() > 0)
						<ul>
							@foreach($member->roles as $role)
								<li><a href="{{ url('roles/' . $role->name) }}">{{ $role->name }}</a></li>
							@endforeach
						</ul>
					@else
						<p>
							This member does not want to be a leader
						</p>
					@endif
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Bio</h3>
				</div>
				<div class="panel-body">
					<p>
						Kanji faded monofilament numinous construct disposable order-flow marketing beef noodles computer. Warehouse sprawl DIY systemic voodoo god crypto-shrine into drugs youtube disposable long-chain hydrocarbons fetishism dolphin sign-space vinyl. Tattoo sign neural sprawl corrupted garage kanji artisanal towards San Francisco vehicle bicycle pre-claymore mine jeans-space math. Into stimulate singularity modem bicycle lights knife. Faded city dissident voodoo god film uplink garage tower corporation apophenia stimulate. Tube nodal point post-A.I. numinous apophenia jeans sentient youtube math. Pre-Chiba nodality savant knife sensory wristwatch. Boat pen cyber-franchise voodoo god media network knife plastic sign construct face forwards faded 3D-printed. 
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
