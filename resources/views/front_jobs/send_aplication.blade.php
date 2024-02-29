@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Jobs Send Aplication | Skill Link </title>
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
			<h4 class="yellow" style="margin:15px 15px;">Job Poster</h4>
		</div>
	</div>
</header> 
@endsection 

@section('right') 
@endsection  
@section('content')  
	<div class="row">
		<div class="col-md-5 col-md-offset-2">
			<div class="box bg-yellow">
				<br>
			</div>
			<div class="box">
				<div class="branch-img min-height"> 
					@if (Auth::user()->photo == null)
						<div class="img-user"  style="width: 180px !important; height: 180px !important">
							<h1 style="color: #fff; font-size: 60px !important;" class="media-object" >{{ mb_substr(Auth::user()->fname ,0,1)}}{{ mb_substr(Auth::user()->mdname ,0,1)}}{{ mb_substr(Auth::user()->lname ,0,1)}}</h1>
						</div>  
					@else 
						<img src="{{ asset('avatar/'.Auth::user()->photo) }}" >
					@endif   

					<br><br>
					<div class="branch-title">
						<h4><b>{{ $employe->fname }}<b></h3>
						<h5>Engineer</h5>
						<h6>{{ $employe->province->name }}, {{ $employe->province->country }}</h6><br>
						<br>
					</div>
				</div>
				<hr>
				<div style="text-align: center;">
					<p>We will include a copy of your profile with your application</p>
				</div>
				<hr>
				<div style="text-align: center;">
					{!! csrf_field() !!}
					<a data-id="{{ $job->id }}" onclick="application(this)"  class="btn btn-warning">Send Application</a>
				</div>
				<div class="modal fade sosmed" id="modal-application-true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body" style="padding: 15px 10px;text-align: center;">
								<p>Your Application Send</p>
								<a href="" class="btn btn-warning" data-dismiss="modal">Dismiss</a>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade sosmed" id="modal-application-false">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body" style="padding: 15px 10px;text-align: center;">
								<p>Already Send Application</p>
								<a href="" class="btn btn-warning" data-dismiss="modal">Dismiss</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 
@section('script')  
<script type="text/javascript">
	  function application(i) {
			id = $(i).data('id');  
			$.ajax({
                type: 'POST',
                url: "{{ route('job_apply') }}",
                data: {
                    '_token': $('input[name=_token]').val(),
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
 