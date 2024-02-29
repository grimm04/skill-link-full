@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Pending Invitation | Skill Link </title>
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
				<h4 class="yellow" style="margin:15px 15px;">Pending Invitation</h4>
			</div> 
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="box border-top-left-radius border-top-right-radius margin-15">
				<div class="row">
					@foreach ($pending as $pen)
						 <div class="col-md-6">
							<div class="dashboard-following"> 
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3">
										@if ($pen->usersfollower->photo == null)
											<div class="thumbnail margin-15 img-user img-user-small" style="width: 85px !important; height: 85px !important; border: none;">
												<h3 style="color: #fff;" >{{ mb_substr($pen->usersfollower->fname ,0,1)}}{{ mb_substr($pen->usersfollower->mdname ,0,1)}}{{ mb_substr($pen->usersfollower->lname ,0,1)}}</h3>
											</div> 
										@else 
											<img src="{{ asset('avatar/'.$pen->usersfollower->photo) }}" >
										@endif   
									</div>
									<div class="col-xs-5 col-sm-7 col-md-7">
										<h3>{{ $pen->usersfollower->fname }} {{ $pen->usersfollower->lname }}</h3>
										{{-- <span>General Engineer | Shell Corporation</span> --}}
										<span>{{ count($pen->usersfollower->follower) }} Followers</span>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3">
										<a href="{{ route('confirm',$pen->usersfollower->username) }}" class="btn bg-yellow">Accept</a>
									</div>
								</div>
							</div>
						</div> 
					@endforeach 
				</div>
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
	                url: "{{ route('mynetwork') }}",
	                data: { 
                    'sort': id
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