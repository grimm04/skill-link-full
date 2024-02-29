@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Following - Skill Link </title>
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
			<h4 class="yellow" style="margin:15px 15px;">Manage your feed</h4>
		</div>
	</div>
</header> 
@endsection 
@section('right') 
@endsection  
@section('content') 
<div class="row">
	<div class="col-md-9">
		<div class="box border-top-left-radius border-top-right-radius margin-15">
			<p>Follow People to see their post and activities on your feed</p><br>
			<div class="row">
				{!! csrf_field() !!} 
				@foreach ($users as $user) 
					<div class="col-md-6">
						<div class="dashboard-following">
							<div class="row">
								<a href="{{ route('networkprofile',$user->username) }}" style="color:#818181">
								<div class="col-xs-3 col-sm-3 col-md-3">
									@if (count($user->photo) == 0)
										<div class="col-xs-3 col-sm-3 col-md-3">
											<div class="margin-15 img-user img-user-small">  
												<img src="{{ asset('avatar/default.png') }}" alt="">
											</div> 
										</div>
									@else 
										<div class="col-xs-3 col-sm-3 col-md-3">
											<div class="margin-15 img-user img-user-small">
												<img src="{{ asset('avatar/'.$user->photo) }}" alt="">
											</div> 
										</div>
									@endif   
								</div> 
								<div class="col-xs-6 col-sm-7 col-md-7">
									<h3>{!! $user->fname !!} {!! $user->lname !!}</h3>
									{{-- <span>General Engineer | Shell Corporation</span> --}}
									<span>{!! count($user->follower) !!} Followers</span>
								</div>
								</a>
								<div class="col-xs-3 col-sm-2 col-md-2">
									<button class="btn btn-primary btn-user btn-sm bg-yellow" id="follow"  data-id="{!! $user->id !!}" style="margin-top: 20px;" onclick="follow(this)"><i class="fa fa-user-plus"></i></button> 
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