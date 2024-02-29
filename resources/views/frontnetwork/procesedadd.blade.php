@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Add {{ $profile->fname }} {{ $profile->lname }} | Skill Link </title>
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
				<form action="">
					<div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default"><img src="{{ asset('dashboard_assets/images/icon/search.png') }}" alt=""></button>
						</span>
						<input type="text" class="form-control" placeholder="Advance Search">
					</div>
				</form>
			</div>
			<ul class="nav">
				<li>
					<div class="setting-more" style="margin-top: -18px;">
						<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
							<i class="fa fa-ellipsis-h yellow" style="font-size: 30px;"></i>
						</a>
						<ul class="dropdown-menu right">
							<a href="" class="btn blue-dark">Share Profile</a><br> 
							<a href="" class="btn blue-dark">Report/Block</a><br>
						</ul>
					</div>
					<div class="clearfix"></div>
				</li>
			</ul><br><br>
		</div>
</header> 
@endsection 
@section('content')   
		<div class="row">
			<div class="col-md-9">
				<div class="wrapper" style="margin-bottom: 20px;">
					<div class="bg-cover">
						@if ($profile->cover == null)
							<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
						@else 
							<img src="{{ asset('cover/'.$profile->cover) }}" alt="">
						@endif   
					</div>
					<div style="position: relative;">
						<div class="branch-img branch-profile">
							@if ($profile->photo == null)
								<img src="{{ asset('avatar/default.png') }}" alt="">
							@else 
								<img src="{{ asset('avatar/'.$profile->photo) }}" alt="">
							@endif   
							<div class="branch-check branch-img-status">
								<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
							</div><br>
							<div class="branch-title">
									<h3 style="color: #fff;"><b>{{ $profile->fname }} {{ $profile->lname }}</b></h3>
								{{-- <h3 style="color: #fff;">Head Recruiter</h3> --}}
								@if (isset($profile->province))
									
								<h4 style="color: #fff;">{{ $profile->province->name }}, {{ $profile->province->country }}</h4>
								@endif
							</div>
						</div>
						<div class="btn-edit-profile" style="margin: 0 auto;text-align: center;">
							<a href="" class="btn btn-warning" style="">
								See who else works here
							</a>
						</div>
						<div style="text-align: center;">
							<hr>
							<p style="color: #fff;">Do you want add this profile as your network?</p>
							<hr>
							{!! csrf_field() !!} 
							<button class="btn bg-yellow" data-id="{!! $profile->id !!}" onclick="follow(this)" id="network">Add Network</button>  
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('script')  
@endsection
