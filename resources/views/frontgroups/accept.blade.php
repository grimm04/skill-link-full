@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Need Join To Group | Skill Link </title>
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
			<h4 class="yellow" style="margin:15px 15px;">Joined Groups</h4>
		</div>
	</div>
</header> 
@endsection 
@section('content') 
<div class="row">
		<div class="col-md-9">
			<div class="box border-top-left-radius border-top-right-radius margin-15">
				<div class="row">
					@foreach ($groups as $group)
						 <div class="col-md-6">
							<div class="dashboard-following"> 
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3">
										@if ($group->users->photo == null)
											<div class="thumbnail margin-15 img-user img-user-small" style="width: 85px !important; height: 85px !important; border: none;">
												<h3 style="color: #fff;" >{{ mb_substr($group->users->fname ,0,1)}}{{ mb_substr($group->users->mdname ,0,1)}}{{ mb_substr($group->users->lname ,0,1)}}</h3>
											</div> 
										@else 
											<img src="{{ asset('avatar/'.$group->users->photo) }}" >
										@endif   
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9">
										<h3>{{ $group->users->fname }} {{ $group->users->lname }}</h3>
										{{-- <span>General Engineer | Shell Corporation</span> --}}
										<span>{{ count($group->users->follower) }} Followers</span>
										<div class="row">
											{!! csrf_field() !!}
											<input type="hidden" name="segment" value="{{ Request::segment(3) }}">
											<div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 col-xl-1">
												<a data-id="{!! $group->users->id !!}" onclick="return acceptg(this);" class="btn bg-yellow" style="color: white !important;">Accept</a>  
											</div>
											<div class="col-xs-5 col-sm-4 col-md-6"> 
												<a data-id="{!! $group->users->id !!}" onclick="return declineg(this);"class="btn bg-red" style="color: white !important;">Decline</a>
											</div>
										</div>
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
@endsection
