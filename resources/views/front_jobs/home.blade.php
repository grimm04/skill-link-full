@extends('front_jobs.app_one_wrapper_menu')
@section('title') 	
	<title>Jobs Home| Skill Link </title>
@endsection  
{{-- @section('right') 	
	@include('dashboard_layouts.right')
@endsection   --}}
@section('content')   
	<div class="row"> 
		<div class="col-md-9">
			<div class="alert bg-orange" id="myAlert">
			    <a href="{{ route('job_setting') }}" style="color: #fff;">Improve your jobs interest setting</a>
			</div>
			<div class="box-body dashboard-info" style="margin-bottom: 15px;">
				<div class="row">
					<div class="col-md-6" style="margin-bottom: 10px;">
						<div class="box">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-md-9">
									<p class="blue-dark bold" style="font-size: 15px;padding-top: 7px;">Passively Looking</p>
								</div>
								<div class="col-md-3">
									<i class="fa fa-gear yellow" style="font-size: 30px;margin-top: 5px;"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6" style="margin-bottom: 10px;">
						<div class="box">
							<div class="row">
								<a href="{{ route('job_applied') }}">
									<div class="col-xs-9 col-sm-9 col-md-9">
										<p class="blue-dark bold" style="font-size: 15px;padding-top: 7px;">Applied Job</p>
									</div>
									<div class="col-md-3">
										<h2>{{ count($apply) }}</h2>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
					<div class="clearfix"></div>
			</div>
			@if (count($jobs) != 0) 
			<div class="box border-all-radius" style="margin-bottom: 15px;">
				<div class="box-header with-border">
					<span class="box-title"><b>Featured Job</b></span> 
				</div>
				<div class="row job-list">
					<div class="col-md-12" id="job-view">
						<div class="row">
							<div class="col-md-4">
								<div class="job-list-img">
									<img src="{{ asset('jobs/'.$jobs->image) }}" alt="">
								</div>
							</div>
							<div class="col-md-4">
								<h4>{{ $jobs->name }}</h4>
								<p>{{ $jobs->company->name }}, {{ $jobs->company->typecompany->name }} | @foreach ($jobs->company->companyindustry as $key => $spe)
										@if($key >= 1),@endif {{ $spe->industry->name }}
									@endforeach</span> </p>
							</div>
							<div class="col-md-4" id="working-condition">
								<h5>Working Condition</h5>
								<ul>
									@foreach ($jobs->typejob as $skill)   
									<li><i class="fa fa-check label-success"></i> {{ $skill->type->name }}</li> 
									@endforeach
								</ul>
								<div class="clearfix"></div>
								<h5>Skill needed</h5>
								@foreach ($jobs->skill as $skill) 
									<div for="" class="label label-success">{{ $skill->skill->name }}</div>  
								@endforeach
								<br><br>
								<a href="{{ route('job_detail',$jobs->id) }}" class="btn btn-warning" style="transform: scale(1.5); margin-left: 30px;">Apply for this Job</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			<div class="box border-all-radius" style="margin-bottom: 15px;">
				<div class="box-header with-border">
					<span class="box-title"><b>Job Recomended For You</b></span>
					<div>
						<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
							<i class="fa fa-gear"></i>
						</a>
						<ul class="dropdown-menu right">
							<li>
								<a href="#">Sort by possition</a>
								<a href="#">Sort by company</a>
								<a href="#">Sort by location</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					@foreach ($job as $job)  
						<div class="col-xs-6 col-md-6 margin-15">
							<div class=" box-job">
								<div class="row">
									<div class="col-md-4">
										<div class="job-list-img"> 
											<img src="{{ asset('jobs/'.$job->image) }}" alt="">  
										</div>
									</div>
									<div class="col-md-7"> 
										<h5>{{ $job->name }}</h5>
										<p style="font-size: 12px;">{{ $job->company->name }}, {{ $job->company->typecompany->name }} | @foreach ($job->company->companyindustry as $key => $spe)
											@if($key >= 1),@endif {{ $spe->industry->name }}
										@endforeach</P> 
										<a href="{{ route('job_detail',$job->id) }}" class="btn btn-warning">Details</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach 
				</div><br>
				<div style="text-align: center;">
					<a href="{{ route('job_list') }}" class="blue-dark">See All Job</a>
				</div>
			</div> 
		</div>
	</div>
@endsection 
@section('script')  
@endsection
