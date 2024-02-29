@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>{{ $about->fname }} {{ $about->lname }} | Skill Link </title>
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
			<ul>
				<nav>
					<a href="" class="yellow" style="font-size: 30px;">
						<i class="fa fa-gear" style="margin-top: 5px;"></i>
					</a><br><br>
				</nav>
			</ul>
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="wrapper" style="margin-bottom: 20px;">
				<div class="bg-cover">
					@if ($about->cover == null)
						<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
					@else 
						<img src="{{ asset('cover/'.$about->cover) }}" alt="">
					@endif   
					<div class="bg-cover-hover">
						<input type="file">
					</div>
				</div>
				<div style="position: relative;">
					<div class="branch-img branch-profile">
						@if ($about->photo == null)
							<img src="{{ asset('avatar/default.png') }}" alt="">
						@else 
							<img src="{{ asset('avatar/'.$about->photo) }}" alt="">
						@endif  
						<div class="branch-img-hover">
							<input type="file"">
						</div>
						<div class="branch-check branch-img-status">
							<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
						</div><br>
						<div class="branch-title">
							<h3 style="color: #fff;"><b>{{ $about->fname }} {{ $about->lname }}</b></h3>
							{{-- <h3 style="color: #fff;">Head Recruiter</h3> --}}
							<h4 style="color: #fff;">{{ $about->province->name }}</h4>
						</div>
					</div>
					<ul class="branch-menu-tabs block">
						<li>
							<a href="" class="btn btn-default">About</a>
						</li>
						<li>
							<a href="{{ route('profile_post', Auth::user()->username) }}" class="btn bg-yellow">Post</a>
						</li>
					</ul>
				</div>
				<div class="box-body dashboard-info" style="margin-bottom: 15px;">
					<ul>
						<li class="box">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-md-9">
									<p class="blue-dark bold" style="font-size: 20px;">{{ $about->status->name }}</p>
								</div>
								<div class="col-md-3">
									<i class="fa fa-gear yellow" style="font-size: 30px;margin-top: 5px;"></i>
								</div>
							</div>
						</li>
						<li class="box">
							<div class="row">
								<a href="{{ route('job_applied') }}">
								<div class="col-xs-9 col-sm-9 col-md-9">
									<p class="blue-dark bold" style="font-size: 20px;">Applied Job</p>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3">
									<h2>{{ count($about->job) }}</h2>
								</div>
								</a>
							</div>
						</li>
						<li class="box">
							<div class="row">
								<a href="{{ route('network') }}">
								<div class="col-xs-9 col-sm-9 col-md-9">
									<p class="blue-dark bold" style="font-size: 20px;">Your Network</p>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3">
									<h2>{{ $follow }}</h2>
								</div>
								</a>
							</div>
						</li>
						<li class="box">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-md-9">
									<p class="blue-dark bold" style="font-size: 20px;">Search Appearances</p>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3">
									<h2>2</h2>
								</div>
							</div>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="box margin-15">
					<div class="box-header with-border">
						<span class="box-title"><b>Personal Info</b></span>
						<div>
							<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
								<i class="fa fa-pencil"></i>
							</a>
							<ul class="dropdown-menu right" id="ticket-list">
								<li>
									<a href="{{ route('profile_edit') }}">Edit</a> 
								</li>
							</ul>
						</div>
					</div>
					<div class="box-body" id="table-info">
						<table class="table">
							<tbody>
								<tr>
									<td>About me</td>
									<td><b>@if ($about->about != null)
											{{ $about->about }}
											@else 
											-
										@endif</b></td>
								</tr>
								<tr>
									<td>Birthday</td>
									<td><b>@if ($about->birth != null) 
											{{ $about->birth->format('M') }} {{ $about->birth->format('d') }}, {{ $about->birth->format('Y') }}
											@else 
											-
										@endif</b></td>
								</tr>
								<tr>
									<td>Lives in</td>
									<td><b>{{ $about->province->name }}, {{ $about->province->country }}</b></td>
								</tr>
								<tr>
									<td>Occupation</td>
									<td><b>{{ $about->chtrade->name }} </b></td>
								</tr>
								<tr>
									<td>Joined</td>
									<td><b>{{ $about->created_at->format('M') }} {{ $about->created_at->format('d') }}, {{ $about->created_at->format('Y') }}</b></td>
								</tr>
								<tr>
									<td>Gender</td>
									<td><b>@if ($about->gender->name != null)
											{{ $about->gender->name }}
											@else 
											-
										@endif</b></td>
								</tr>
								<tr>
									<td>Status</td>
									<td><b>@if ($about->martial->name != null)
											{{ $about->martial->name }}
											@else 
											-
										@endif</b></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><b>{{ $about->email }}</b></td>
								</tr>
								<tr>
									<td>Website</td>
									<td><b><a href="" class="grey">
										@if ($about->web != null)
											{{ $about->web }}
											@else 
											-
										@endif
										</a></b>
									</td>
								</tr>
								<tr>
									<td>Phone Number</td>
									<td><b>@if ($about->phone != null)
											{{ $about->phone }}
											@else 
											-
										@endif</b></td>
								</tr>
								<tr>
									<td>Social Network</td>
									<td>
										@if ($about->fb != null)
											<a href="https://facebook.com/{{ $about->fb }}" target="_blank"><span class="btn btn-warning"><i class="fa fa-facebook"></i></span></a>
											@else  
										@endif 
										@if ($about->twitter != null)
											<a href="https://twitter.com/{{ $about->twitter }} "  target="_blank"><span class="btn btn-warning"><i class="fa fa-twitter"></i></span></a>
											@else  
										@endif 
										@if ($about->ig != null)
											<a href="https://www.instagram.com/{{ $about->ig }}"  target="_blank"><span class="btn btn-warning"><i class="fa fa-instagram"></i></span></a>
											@else  
										@endif  
									</td>
								</tr>
							</tbody>
						</table>
						<br /><br /><br/>
					</div>
				</div>
				<div class="box margin-15">
					<div class="box-header with-border">
						<span class="box-title"><b>Experiences</b></span>
						<div>
							<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
								<i class="fa fa-pencil"></i>
							</a>
							<ul class="dropdown-menu right" id="ticket-list">
								<li>
									<a href="{{ route('profile_experience') }}">Edit</a> 
								</li>
							</ul>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							@if (count($about->experience) >= 1)
								 @foreach ($about->experience as $ex)
									<div class="col-md-4">
										<div class="media">
											<div class="media-left">
												<img src="{{ asset('dashboard_assets/images/kbr.png') }}" alt="bell" class="media-object" style="width: 80px; height: 80px">
											</div>
											<div class="media-body">
												<a href="#" class="grey">
													<h5 class="media-heading">KBR</h5>
													Fort Hills job #123 <br />
													2 Minute Ago
												</a>
											</div>
										</div>
									</div> 
								@endforeach 
							@else 
								<div style="text-align: center;" class="margin-15">
										No Experience..
								</div>
							@endif
							
						</div>
					</div>
					@if (count($about->experience) >= 1)
						<div style="text-align: center;" class="margin-15">
							<a href="" style="font-weight: 700;color: #333;">See more</a>
						</div> 
					@endif
				</div>
				<div class="box margin-15">
					<div class="box-header with-border">
						<span class="box-title"><b>Skill & Endorsements</b></span>
						<div>
							<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
								<i class="fa fa-pencil"></i>
							</a>
							<ul class="dropdown-menu right" id="ticket-list">
								<li>
									<a href="{{ route('profile_skill') }}">Edit Skill</a>
									<a href="{{ route('profile_endorsement') }}">Edit Endorsements</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="box-body">
						<div class="box-body">
							<div class="endorse clearfix">
								<span class="label label-endorse">
									Occupational Health
									<span class="counter">
										<span><i class="fa fa-plus"></i></span>
									</span>
								</span>
								<div class="media">
									<div class="media-body">
										Endorsed By <span class="bold">Femmy Andriani and 2 more</span>
									</div>
								</div>
							</div>
							<div class="endorse clearfix">
								<span class="label label-endorse">
									Supervisory Skills
									<span class="counter">
										<span><i class="fa fa-plus"></i></span>
									</span>
								</span>
								<div class="media">
									<div class="media-body">
										Endorsed By <span class="bold">Femmy Andriani and 2 more</span>
									</div>
								</div>
							</div>
							<div class="endorse clearfix">
								<span class="label label-endorse">
									Construction
									<span class="counter">
										<span><i class="fa fa-plus"></i></span>
									</span>
								</span>
								<div class="media">
									<div class="media-body">
										Endorsed By <span class="bold">Femmy Andriani and 2 more</span>
									</div>
								</div>
							</div>
							<hr>
							<a href="" class="btn btn-link btn-block grey ">View more <i class="fa fa-angle-down"></i></a>
						</div>
					</div>
				</div>
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title">
							Certification
							<div>
								<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
									<i class="fa fa-pencil"></i>
								</a>
								<ul class="dropdown-menu right" id="ticket-list">
									<li>
										<a href="{{ route('profile_certification') }}">Edit</a>
										 
									</li>
								</ul>
							</div>
						</span>
						<div class="clearfix"></div>
					</div>
					<div class="box-body">
						<div class="row"> 
							@if (count($about->certificate) >= 1)
								 @foreach ($about->certificate as $ex)
									<div class="col-md-4 info-thumbnail margin-15-responsive">
										<div class="ticket-img bg-grey border-all-radius">
											<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" class="border-top-right-radius border-top-left-radius" alt="">
											<div>
												<h5>Ground Distrubte Level II</h5>
												<div>
													<span class="media-left">Exiry Date</span>
													<p class="media-right" style="color: #888;"><b>2013 - 12 - 30</b></p>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div> 
								@endforeach 
							@else 
								<div style="text-align: center;" class="margin-15">
										No Certificate..
								</div>
							@endif 
						</div>
					</div>
				</div>
				<div class="box margin-15">
					<div class="box-header with-border">
						<span class="box-title"><b>Education</b></span>
						<div>
							<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
								<i class="fa fa-pencil"></i>
							</a>
							<ul class="dropdown-menu right" id="ticket-list">
								<li>
									<a href="{{ route('profile_education') }}">Edit</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							@if (count($about->education) >= 1)
								 @foreach ($about->education as $ex)
									<div class="col-md-4">
										<div class="media">
											<div class="media-left">
												<img src="{{ asset('dashboard_assets/images/kbr.png') }}" alt="bell" class="media-object" style="width: 80px; height: 80px">
											</div>
											<div class="media-body">
												<a href="#" class="grey">
													<h5 class="media-heading">Hessle High School</h5>
													Class of 2003 - 2007 <br />
													Exex Country
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
					@if (count($about->education) >= 1)
						<div style="text-align: center;" class="margin-15">
							<a href="" style="font-weight: 700;color: #333;">See more</a>
						</div> 
					@endif 
				</div>
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title">
							Employment Timeline 
							<div>
								<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
									<i class="fa fa-pencil"></i>
								</a>
								<ul class="dropdown-menu right" id="ticket-list">
									<li>
										<a href="{{ route('profile_timeline') }}">Edit</a> 
									</li>
								</ul>
							</div>
						</span>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="timeline">
							  <div class="timeline-container timeline-left">
							    <div class="timeline-content btn-warning">
							      <div class="row">
							      	<div class="col-md-4">
							      		<div class="timeline-img">
							      			<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
							      		</div>
							      	</div>
							      	<div class="col-md-8">
							      		<h5>Welder Dictator</h5>
							     		<p><b>Ledcor Group</b></p>
							     		<span>Jan 19, 2017 - Feb 19, 2017</span>
							      	</div>
							      </div>
							    </div>
							  </div>
							  <div class="timeline-container timeline-right">
							    <div class="timeline-content btn-danger">
							      <div class="row">
							      	<div class="col-md-4">
							      		<div class="timeline-img">
							      			<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
							      		</div>
							      	</div>
							      	<div class="col-md-8">
							      		<h5>Welder Dictator</h5>
							     		<p><b>Ledcor Group</b></p>
							     		<span>Jan 19, 2017 - Feb 19, 2017</span>
							      	</div>
							      </div>
							    </div>
							  </div>
							  <div class="timeline-container timeline-left">
							    <div class="timeline-content btn-black">
							      <div class="row">
							      	<div class="col-md-4">
							      		<div class="timeline-img">
							      			<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
							      		</div>
							      	</div>
							      	<div class="col-md-8">
							      		<h5>Welder Dictator</h5>
							     		<p><b>Ledcor Group</b></p>
							     		<span>Jan 19, 2017 - Feb 19, 2017</span>
							      	</div>
							      </div>
							    </div>
							  </div>
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
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title pull-left">Ticket Tracker
							<span class="box-subtitle">Certification and work information</span>
						</span>
						<div>
							<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
								<i class="fa fa-pencil"></i>
							</a>
							<ul class="dropdown-menu right" id="ticket-list">
								<li>
									<a href="{{ route('profile_ticket') }}">Edit</a>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="box-body">
						{{-- <span class="btn btn-default border-all-radius margin-15" style="width: 100%;">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-circle"></i> Ground Disturbance Level II
								</div>
								<div class="col-md-3  margin-15-responsive">
									<span>Expiry Date 2013 - 12 - 30</span>
								</div>
								<div class="col-md-5  margin-15-responsive">
									<i class="fa fa-clock-o"></i>
								</div>
								<div class="clearfix"></div>
							</div>
						</span>
						<span class="btn btn-default border-all-radius margin-15" style="width: 100%;">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-circle"></i> Ground Disturbance Level II
								</div>
								<div class="col-md-3  margin-15-responsive">
									<span>Expiry Date 2013 - 12 - 30</span>
								</div>
								<div class="col-md-5  margin-15-responsive">
									<i class="fa fa-upload"></i>
								</div>
								<div class="clearfix"></div>
							</div>
						</span>
						<span class="btn btn-default border-all-radius margin-15" style="width: 100%;">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-circle"></i> Ground Disturbance Level II
								</div>
								<div class="col-md-3  margin-15-responsive">
									<span>Expiry Date 2013 - 12 - 30</span>
								</div>
								<div class="col-md-5  margin-15-responsive">
									<i class="fa fa-check"></i>
								</div>
								<div class="clearfix"></div>
							</div>
						</span> --}}

						@if (count($about->ticket) >= 1)
								 @foreach ($about->ticket as $ex)
									<span class="btn btn-default border-all-radius margin-15" style="width: 100%;">
										<div class="row">
											<div class="col-md-4">
												<i class="fa fa-circle"></i> Ground Disturbance Level II
											</div>
											<div class="col-md-3  margin-15-responsive">
												<span>Expiry Date 2013 - 12 - 30</span>
											</div>
											<div class="col-md-5  margin-15-responsive">
												<i class="fa fa-clock-o"></i>
											</div>
											<div class="clearfix"></div>
										</div>
									</span>
								@endforeach 
							@else 
								<div style="text-align: center;" class="margin-15">
										No Ticket..
								</div>
							@endif   
					</div>
				</div>
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title pull-left">Additional Information <span style="font-size: 12px;">(private only to your)</span></span>
						<div>
							<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
								<i class="fa fa-pencil"></i>
							</a>
							<ul class="dropdown-menu right" id="ticket-list">
								<li>
									<a href="#">Edit</a>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="box-body">
					{{-- 	<span class="btn btn-default border-all-radius margin-15" style="width: 100%;">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-circle"></i> Fit For Duties Form
								</div>
								<div class="col-md-3  margin-15-responsive">
									<span>Completed</span>
								</div>
								<div class="col-md-5  margin-15-responsive">
									<i class="fa fa-check"></i>
								</div>
								<div class="clearfix"></div>
							</div>
						</span>
						<span class="btn btn-default border-all-radius margin-15" style="width: 100%;">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-circle"></i> Employment Form
								</div>
								<div class="col-md-3  margin-15-responsive">
									<span>Need to be filled</span>
								</div>
								<div class="col-md-5  margin-15-responsive">
									<i class="fa fa-exclamation"></i>
								</div>
								<div class="clearfix"></div>
							</div>
						</span> --}} 
							@if (count($about->addtional) >= 1)
								 @foreach ($about->addtional as $ex)
									<span class="btn btn-default border-all-radius margin-15" style="width: 100%;">
										<div class="row">
											<div class="col-md-4">
												<i class="fa fa-circle"></i> Fit For Duties Form
											</div>
											<div class="col-md-3  margin-15-responsive">
												<span>Completed</span>
											</div>
											<div class="col-md-5  margin-15-responsive">
												<i class="fa fa-check"></i>
											</div>
											<div class="clearfix"></div>
										</div>
									</span>
								@endforeach 
							@else 
								<div style="text-align: center;" class="margin-15">
										No Addtional..
								</div>
							@endif   
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

