<div class="box">
	<div class="branch-img min-height">
		<img src="{{ asset('jobs/'.$jobs->image) }}" alt="">
		<br><br>
		<div class="branch-title">
			<h4><b>{{ $jobs->name }}<b></h3>
			<h5>{{ $jobs->company->name }}| {{ $jobs->company->locations->name }}, {{ $jobs->company->locations->country }} </h5>
			<h6>Posted {{ $jobs->created_at->diffForHumans() }}</h6><br> 
			{!! csrf_field() !!} 
			<a href="{{ route('job_send_aplication',$jobs->id) }}" class="btn btn-warning">Apply</a> 
			<a href="{{ route('job_profile',array('id'=> $jobs->company->id ,'slug'=> $jobs->company->slug )) }}" class="btn btn-warning">Go to profile</a>
			<br><br>
		</div>
	</div>
</div>