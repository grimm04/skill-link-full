@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Applied Jobs | Skill Link </title>
@endsection  
@section('header')  
	@include('dashboard_layouts.headermenu')   
	<header class="header-responsive">
	<div class="container-fluid">
		<div class="back-responsive">
			<a onclick="goBack()"> 
				<img src="{{ asset('dashboard_assets/images/icon/left.png') }}" alt="">
			</a>
		</div>
		<div class="navbar-sl">
			<h4 class="yellow" style="margin:15px 15px;">Applied Jobs</h4>
		</div>
	</div>
</header> 
@endsection 
@section('right') 
@endsection  
@section('content')  
	<div class="row">
		<div class="col-md-9">
			<div class="box border-all-radius" style="margin-bottom: 15px;">
				<div class="row">
					@foreach ($jobapply as $apply)  
						<div class="col-xs-6 col-md-6 margin-15">
							<div class=" box-job">
								<div class="row">
									<div class="col-md-4">
										<div class="job-list-img"> 
											<img src="{{ asset('jobs/'.$apply->job->image) }}" alt="">  
										</div>
									</div>
									<div class="col-md-7"> 
										<h5>{{ $apply->job->name}}</h5>
										<p style="font-size: 12px;">{{ $apply->job->company->name }}, {{ $apply->job->company->typecompany->name }} | @foreach ($apply->job->company->companyindustry as $key => $spe)
											@if($key >= 1),@endif {{ $spe->industry->name }}
										@endforeach</P> 
										<a href="{{ route('job_detail',$apply->job->id) }}" class="btn btn-warning">Details</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach 
				</div><br>
			</div>
		</div>
	</div>
@endsection 
@section('script')  
@endsection
