@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Jobs Recomended | Skill Link </title>
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
			<h4 class="yellow" style="margin:15px 15px;">Jobs</h4>
		</div>
	</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="alert bg-orange" id="myAlert">
			    <a href="{{ route('job_setting') }}" style="color: #fff;">Improve your jobs interest setting</a>
			</div>
			<div class="box border-all-radius" style="margin-bottom: 15px;">
				<div class="box-header with-border">
					<span class="box-title"><b>Job Recomended For You</b></span>
					<div>
						<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
							<i class="fa fa-gear"></i>
						</a>
						<ul class="dropdown-menu right">
							<li>
								<a data-id="title" onclick="sort(this)">Sort by Title (A to Z)</a>
								<a data-id="company" onclick="sort(this)">Sort by company (A to Z)</a>
								<a data-id="place" onclick="sort(this)">Sort by place (A to Z)</a> 
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					@foreach ($jobs as $job) 

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
									<a href="{{ route('job_detail',array('detail'=>$job->id)) }}" class="btn btn-warning">details</a>
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
<script type="text/javascript">
	 function sort(i) {
			id = $(i).data('id');  
			// alert(id ); return false;
			$.ajax({
                type: 'POST',
	                url: "{{ route('job_apply') }}",
	                data: { 
                    'id': id
                },
                success: function(data) { 
                	if(data.data === true){ 
                		$('#modal-application-true').modal('show');
                	}else {  
                		$('#modal-application-false').modal('show');
                	} 
                },
       		 }); 
	    } 
</script>
@endsection
