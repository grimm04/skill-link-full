@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Find Group | Skill Link </title>
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
		<div class="col-md-9">   <br><br>
				<div class="" style="margin-bottom: 15px;">
					@foreach ($groups as $group)
						<a href="{{ route('group', $group->ref_number) }}">
						<div class="col-md-4">
							<div class="box margin-15-responsive" style="margin-bottom: 60px;">
								<div class="branch-img min-height">
									@if ($group->photo == null)
										<div class="thumbnail margin-15 img-user img-user-small" style="width: 200px !important; height: 200px !important; border: none;">
											<h1 style="color: #fff; font-size: 53px;" >{{ mb_substr($group->group_name ,0,1)}}</h1>
										</div> 
									@else 
										<img src="{{ asset('avatar/'.$pen->usersfollower->photo) }}" >
									@endif   
									<div class="branch-check branch-img-status">
										<img src="assets/images/check.png" alt="">
									</div><br><br>
									<div class="branch-title">
										<h3><b>{{ $group->group_name }}</b></h3>
										{{-- <h3>Head Recruiter</h3> --}}
										<h4>{{ $group->location }}</h4><br> 
									</div>
								</div>
							</div>
						</div> 
						</a>
					@endforeach 
				</div>
			</div>
		</div>
@endsection 
@section('script')  
@endsection
