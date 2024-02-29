@extends('front_jobs.app_one_wrapper_menu')
@section('title') 	
	<title>Find Group | Skill Link </title>
@endsection   
@section('content') 
<div class="row">
		<div class="col-md-9"> 
				<div class="dashboard-info" style="margin-bottom: 15px;">
				<ul>
					<li class="box">
						<a href="{{ route('group_joined') }}">
						<div class="row">
							<div class="col-xs-9 col-sm-9 col-md-9">
								<p class="blue-dark bold" style="font-size: 20px;">Joined Group</p>
							</div>
							<div class="col-md-3">
								<h2>{{ count($joined) }}</h2>
							</div>
						</div>
						</a>
					</li>
{{-- 					<li class="box">
						<div class="row">
							<div class="col-xs-9 col-sm-9 col-md-9">
								<p class="blue-dark bold" style="font-size: 20px;">Invited Groups</p>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3">
								<h2>61</h2>
							</div>
						</div>
					</li> --}}
					<div class="clearfix"></div>
				</ul><br><br>
				<div class="" style="margin-bottom: 15px;">
					@foreach ($groups as $group)
						<div class="col-md-4">
							<div class="box margin-15-responsive" style="margin-bottom: 60px;">
								<div class="branch-img min-height">
									@if ($group->photo == null)
										<div class="thumbnail margin-15 img-user img-user-small" style="width: 200px !important; height: 200px !important; border: none;">
											<h1 style="color: #fff; font-size: 52px;" >{{ mb_substr($group->group_name ,0,1)}}</h1>
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
										<a href="{{ route('group', $group->ref_number) }}" class="btn btn-warning">Join Group</a>
									</div>
								</div>
							</div>
						</div> 
					@endforeach 
				</div>
			</div>
		</div>
@endsection 
@section('script')  
@endsection
