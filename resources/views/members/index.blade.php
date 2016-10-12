<div class="container">
	@foreach($members->chunk(4) as $membersSet)
		<div class="row">
			@foreach($membersSet as $member)
				<div class="col-xs-12 col-sm-3 card">
					<h3><a href="{{ url('members/' . $member->id) }}">{{ $member->name }}</a></h3>
					<p>{{ $member->email }}</p>
					<p>{{ $member->address->zip }}</p>
					<p>{{ $member->address->country }}</p>
				</div>
			@endforeach
		</div>
	@endforeach
</div>