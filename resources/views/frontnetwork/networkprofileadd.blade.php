@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>{{ $profile->fname }} {{ $profile->lname }} | Skill Link </title>
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
						<ul class="branch-menu-tabs block">
							<li>
								<a href="{{ route('procesedadd',$profile->username) }}" class="btn bg-yellow">Add Network</a>
							</li>
							<li>
								<a href="{{ route('message_personal_chat',$profile->username) }}" class="btn bg-yellow">Message</a>
							</li>
						</ul>
					</div>
					<div class="box margin-15">
						<div class="box-header with-border">
							<span class="box-title"><b>Personal Info</b></span>
						</div>
						<div class="box-body" id="table-info">
							<table class="table">
								<tbody>
									<tr>
										<td>About me</td>
										<td><b>@if ($profile->about != null)
													{{ $profile->about }}
													@else 
													-
												@endif</b></td>
									</tr>
									@if (isset($profile->chtrade))
									<tr>
										<td>Occupation</td>
										<td><b>{{ $profile->chtrade->name }}</b></td>
									</tr>
									@endif
									@if (isset($profile->gender))
									<tr>
										<td>Gender</td>
										<td><b>@if ($profile->gender->name != null)
													{{ $profile->gender->name }}
													@else  
													-
												@endif</b></td>
									</tr>
									@endif
									<tr>
										<td>Website</td>
										<td><b><a href="" class="grey">@if ($profile->web != null)
															{{ $profile->web }}
															@else 
															-
														@endif</a></b></td>
									</tr>
									<tr>
										<td>Social Network</td>
										<td>
											@if ($profile->fb != null)
												<a href="https://facebook.com/{{ $profile->fb }}" target="_blank"><span class="btn btn-warning"><i class="fa fa-facebook"></i></span></a>
												@else  

											@endif 
											@if ($profile->twitter != null)
												<a href="https://twitter.com/{{ $profile->twitter }} "  target="_blank"><span class="btn btn-warning"><i class="fa fa-twitter"></i></span></a>
												@else  
											@endif 
											@if ($profile->ig != null)
												<a href="https://www.instagram.com/{{ $profile->ig }}"  target="_blank"><span class="btn btn-warning"><i class="fa fa-instagram"></i></span></a>
												@else  
											@endif  
										</td>
									</tr>
								</tbody>
							</table>
							<br /><br /><br/>
						</div>
					</div>
					@if (count($profile->education) >= 1)
					<div class="box margin-15">
						<div class="box-header with-border">
							<span class="box-title"><b>Education</b></span>
						</div>
						<div class="box-body">
							<div class="row">
								@if (count($profile->education) >= 1)
									 @foreach ($profile->education as $ex)
										<div class="col-md-4">
											<div class="media">
												<div class="media-left">
													@if ($ex->photo == null)
														<img src="{{ asset('dashboard_assets/images/kbr.png') }}" alt="bell" class="media-object" style="width: 80px; height: 80px">
													@else 
													<img src="{{ asset('images/educations/'.$ex->photo) }}" alt="bell" class="media-object" style="width: 80px; height: 80px"> 
													@endif    
												</div>
												<div class="media-body">
													<a href="#" class="grey">
														<h5 class="media-heading">{{ $ex->institution }}</h5>
														Class of {{ $ex->from }} - {{ $ex->until->format('Y') }} <br />
														{{ $ex->location }}
													</a>
												</div>
											</div>
										</div> 
									@endforeach 
								@else 
									<div style="text-align: center;" class="margin-15">
											No Education..
									</div>
								@endif   
							</div>
						</div>
						@if (count($profile->education) >= 1)
							<div style="text-align: center;" class="margin-15">
								<a href="" style="font-weight: 700;color: #333;">See more</a>
							</div> 
						@endif 
					</div>
					@endif
					@if (count($profile->timeline) >= 1) 
					<div class="box border-all-radius margin-15">
						<div class="box-header with-border">
							<span class="box-title">
								Employment Timeline 
							</span>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="timeline">
								 	@foreach ($profile->timeline as $time => $timeline)
										@if ($time % 2 == 0) 
										<div class="timeline-container timeline-left">
										    <div class="timeline-content btn-black">
										@else
										<div class="timeline-container timeline-right">
										    <div class="timeline-content btn-warning">
											@endif 
										      <div class="row">
										      	<div class="col-md-4">
										      		<div class="timeline-img">
									      				@if ($timeline->photo == null)
															<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
														@else 
															<img src="{{ asset('images/timelines/'.$timeline->photo) }}" alt="">
														@endif    
										      		</div>
										      	</div>
										      	<div class="col-md-8">
										      		<h5>{{ $timeline->job->name }}</h5>
										     		<p><b>{{ $timeline->job->company->name }}</b></p>
										     		<span>{{ $timeline->start_date->format('M') }} {{ $timeline->start_date->format('d') }}, {{ $timeline->start_date->format('Y') }} - {{ $timeline->end_date->format('M') }} {{ $timeline->end_date->format('d') }}, {{ $timeline->end_date->format('Y') }}</span>
										      	</div>
										      </div>
										    </div>
										  </div>
									@endforeach 
								</div>
								<br><br><br>
								<ul class="timeline-btn">
									<li class="btn btn-warning"><img src="{{ asset('dashboard_assets/images/icon/head.png') }}" alt=""><br> FIELD WORK</li>
									<li class="btn btn-black"><img src="{{ asset('dashboard_assets/images/icon/list.png') }}" alt=""><br> MANAGEMENT</li>
									<li class="btn btn-danger"><img src="{{ asset('dashboard_assets/images/icon/tool.png') }}" alt=""><br> FIELD WORK</li>
								</ul>
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
@endsection

@section('script')  
@endsection
