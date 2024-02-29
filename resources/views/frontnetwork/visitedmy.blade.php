@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Visited My Profile | Skill Link </title>
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
				<h4 class="yellow" style="margin:15px 15px;">Visited my profile</h4>
			</div>
			 
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="box border-top-left-radius border-top-right-radius margin-15">
				<div class="row network-responsive">
					@foreach ($visit as $vs)
						<div class="col-md-6 col-xs-6">
							<div class="dashboard-following">								<div class="row"> 
									<a href="{{ route('networkprofile',$vs->usersvisited->username) }}" style="color:black">
									<div class="col-sm-3 col-md-3">
										@if ($vs->usersvisited->photo == null) 
											<img src="{{ asset('avatar/default.png') }}" alt=""> 
										@else  
										   <img src="{{ asset('avatar/'.$vs->usersvisited->photo) }}" alt="">
										@endif   
									</div> 
									<div class="col-sm-7 col-md-7">
										<h3>{{ $vs->usersvisited->fname }} {{ $vs->usersvisited->lname }}</h3>
										{{-- <span>General Engineer | Shell Corporation</span> --}}
										<span>{{ count($vs->usersvisited->follower) }} Followers</span>
									</div>
									</a>  
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
@endsection
