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
			@include('dashboard_layouts.searchmobile')
			<ul>
				<nav>
					<a href="{{ route('search') }}" class="yellow" style="font-size: 30px;">
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
					<form method="post" action="{{ route('profie_cover') }}" id="profile-cover" enctype="multipart/form-data">
						<div class="bg-cover-hover">
							{!! csrf_field() !!} 
							<input type="file" name="cover" id="cover">
						</div> 
					</form>
				</div>
				<div style="position: relative;">
					<div class="branch-img branch-profile"> 
						@if ($about->photo == null)
							<div class="img-user"  style="width: 180px !important; height: 180px !important">
								<h1 style="color: #fff; font-size: 60px !important;" class="media-object" >{{ mb_substr($about->fname ,0,1)}}{{ mb_substr($about->mdname ,0,1)}}{{ mb_substr($about->lname ,0,1)}}</h1>
							</div>  
						@else 
							<img src="{{ asset('avatar/'.$about->photo) }}" >
						@endif   

						{{-- @if ($about->photo == null)
							<img src="{{ asset('avatar/default.png') }}" alt="">
						@else 
							<img src="{{ asset('avatar/'.$about->photo) }}" alt="">
						@endif --}}
						<form method="post" action="{{ route('profie_avatar') }}" id="profile-avatar" enctype="multipart/form-data">
							<div class="branch-img-hover">
								{!! csrf_field() !!} 
								<input type="file" name="avatar" id="avatar">
							</div>
						</form>
						<div class="branch-check branch-img-status">
							<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
						</div><br>
						<div class="branch-title">
							<h3 style="color: #fff;"><b>{{ $about->fname }} {{ $about->lname }}</b></h3>
							{{-- <h3 style="color: #fff;">Head Recruiter</h3> --}}
							@if (count($about->province) != 0) 
								<h4 style="color: #fff;">{{ $about->province->name }}, {{ $about->province->country }}</h4>
							@endif
						</div>
					</div>
					<ul class="branch-menu-tabs block">
						<li>
							<a href="" class="btn btn-default">About</a>
						</li>
						<li>
							<a href="{{ route('profile_post') }}" class="btn bg-yellow">Post</a>
						</li>
					</ul>
				</div>
				<div class="box-body dashboard-info" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6" style="margin-bottom: 10px;">
							<div class="box">
								<a href="{{ route('profile_edit') }}"> 
								<div class="row">
									<div class="col-xs-9 col-sm-9 col-md-9">
										@if (count($about->status) != 0)
											<p class="blue-dark bold" style="font-size: 20px;">{{ $about->status->name }}</p>
										@endif
									</div>
									<div class="col-md-3">
										<i class="fa fa-gear yellow" style="font-size: 30px;margin-top: 5px;"></i>
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-md-6" style="margin-bottom: 10px;">
							<div class="box">
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
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6" style="margin-bottom: 10px;">
							<div class="box">
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
							</div>
						</div>
						<div class="col-md-6" style="margin-bottom: 10px;">
							<div class="box">
								<div class="row">
									<a href="{{ route('search') }}">
									<div class="col-xs-9 col-sm-9 col-md-9">
										<p class="blue-dark bold" style="font-size: 20px;">Search Appearances</p>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3">
										<h2>2</h2>
									</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
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
									<td><b>@if (count($about->birth) != 0) 
											{{ $about->birth->format('M') }} {{ $about->birth->format('d') }}, {{ $about->birth->format('Y') }}
											@else 
											-
										@endif</b></td>
								</tr>
								<tr>
									<td>Lives in</td> 
									<td><b>@if (count($about->province) != 0) 
											{{ $about->province->name }}, {{ $about->province->country }}
											@else 
											- 
											@endif
										</b>
									</td> 
								</tr>
								<tr>
									<td>Occupation</td> 
									<td>
										<b>@if (count($about->chtrade) != 0) 
											{{ $about->chtrade->name }} 
											@else 
											- 
											@endif
										</b>
									</td> 
								</tr>
								<tr>
									<td>Joined</td>
									<td><b>{{ $about->created_at->format('M') }} {{ $about->created_at->format('d') }}, {{ $about->created_at->format('Y') }}</b></td>
								</tr>
								<tr>
									<td>Gender</td>
									
									<td><b> @if (count($about->gender) != 0) 
											{{ $about->gender->name }}
											@else 
											- 
											@endif
										</b>
									</td>
									
								</tr>
								<tr>
									<td>Status</td> 
									<td>   
										<b>@if (count($about->martial) != 0) 
											{{ $about->martial->name }}
											@else 
											- 
											@endif
										</b>
									</td>
									
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
									<a href="{{ route('profile_experience') }}">Add</a> 
									<a href="{{ route('profile_editexperience') }}">Edit</a> 
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
													<h5 class="media-heading">{{ $ex->company }}</h5>
													{{ \Carbon\Carbon::parse($ex->start_date)->format('F d, Y') }} - {{ \Carbon\Carbon::parse($ex->end_date)->format('F d, Y') }} <br />
													{{ $ex->location }}
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
									<a href="{{ route('profile_skill') }}">Add Skill</a>
									<a href="{{ route('profile_editskill') }}">Edit Skill</a>  
								</li>
							</ul>
						</div>
					</div>
					<div class="box-body">
						@if (count($about->skill) >= 1)
							@foreach ($about->skill as $sk)
							<div class="box-body">
								<div class="endorse clearfix">
									<span class="label label-endorse">
										{{ $sk->name }}
										<span class="counter">
											<span><i class="fa fa-plus"></i></span>
										</span>
									</span>
									<div class="media">
										<div class="media-body">
											{{-- Endorsed By <span class="bold"></span> --}}
										</div>
									</div>
								</div> 
								{{-- <hr> --}}
								{{-- <a href="" class="btn btn-link btn-block grey ">View more <i class="fa fa-angle-down"></i></a> --}}
							</div>
							@endforeach 
						@else 
							<div style="text-align: center;" class="margin-15">
									No SKill & Endorsment..
							</div>
						@endif   
					</div>
				</div>
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title">
							Certification <span style="font-size: 12px;">(private only to your)</span>
							<div>
								<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
									<i class="fa fa-pencil"></i>
								</a>
								<ul class="dropdown-menu right" id="ticket-list">
									<li>
										<a href="{{ route('profile_certification') }}">Add</a>
										<a href="{{ route('editcertification') }}">Edit</a> 
									</li>
								</ul>
							</div>
						</span>
						<div class="clearfix"></div>
					</div>
					<div class="box-body">
						<div class="row"> 
							@if (count($about->certificate) >= 1)
								 @foreach ($about->certificate as $cer)
									<div class="col-md-4 info-thumbnail margin-15-responsive">
										<div class="ticket-img bg-grey border-all-radius">
											<img src="{{ asset('certification/'.$cer->photo) }}" class="border-top-right-radius border-top-left-radius" alt="">
											<div>
												<h5>{{ $cer->title }}</h5>
												<div>
													<span class="media-left">Exiry Date</span>
													<p class="media-right" style="color: #888;"><b>{{ \Carbon\Carbon::parse($cer->expiry_date)->format('F d, Y') }}</b></p>
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
									<a href="{{ route('profile_education') }}">Add</a>
									<a href="{{ route('edit_education') }}">Edit</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							@if (count($about->education) >= 1)
								 @foreach ($about->education as $edu)
									<div class="col-md-4">
										<div class="media">
											<div class="media-left">
												<img src="{{ asset('dashboard_assets/images/kbr.png') }}" alt="bell" class="media-object" style="width: 80px; height: 80px">
											</div>
											<div class="media-body">
												<a href="#" class="grey">
													<h5 class="media-heading">{{ $edu->institution}}</h5>
													Class of {{ $edu->from}} - {{ $edu->until}} <br />
													{{ $edu->location}}
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
					{{-- @if (count($about->education) >= 1)
						<div style="text-align: center;" class="margin-15">
							<a href="" style="font-weight: 700;color: #333;">See more</a>
						</div> 
					@endif  --}}
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
										<a href="{{ route('profile_timeline') }}">Add</a> 
										<a href="{{ route('profile_edittimeline') }}">Edit</a> 
									</li>
								</ul>
							</div>
						</span>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="timeline">
								@foreach ($about->timeline as $time => $timeline)
									@if ($time % 2 == 0) 
									<div class="timeline-container timeline-left">
									    <div class="timeline-content btn-{{$timeline->typetimeline->color}}">
									@else
									<div class="timeline-container timeline-right">
									    <div class="timeline-content btn-{{$timeline->typetimeline->color}}">
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
							@if (count($about->timeline) >= 1)
							<ul class="timeline-btn">
								<li class="btn btn-warning"><img src="{{ asset('dashboard_assets/images/icon/head.png') }}" alt=""><br> FIELD WORK</li>
								<li class="btn btn-danger"><img src="{{ asset('dashboard_assets/images/icon/list.png') }}" alt=""><br> MANAGEMENT</li>
								<li class="btn btn-black"><img src="{{ asset('dashboard_assets/images/icon/tool.png') }}" alt=""><br> SPECIALISED</li>
							</ul> 
							@else 
								<div style="text-align: center;" class="margin-15">
										No Timeline..
								</div>
							@endif   
						</div>
					</div>
				</div>
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title pull-left">Ticket Tracker <span style="font-size: 12px;">(private only to your)</span>
							<span class="box-subtitle">Certification and work information</span>
						</span>
						<div>
							<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
								<i class="fa fa-pencil"></i>
							</a>
							<ul class="dropdown-menu right" id="ticket-list">
								<li>
									<a href="{{ route('profile_ticket') }}">Add</a> 
									<a href="{{ route('profile_editticket') }}">Edit</a> 
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="box-body"> 
						<div class="row">
						@if (count($about->ticket) >= 1)
								 @foreach ($about->ticket as $tic)

								 	<div class="col-md-4 info-thumbnail margin-15-responsive">
										<div class="ticket-img bg-grey border-all-radius">
											<img src="{{ asset('ticket/'.$tic->photo) }}" class="border-top-right-radius border-top-left-radius" alt="">
											<div>
												<h5>{{ $tic->title }}</h5>
												<div>
													<span class="media-left">Exiry Date</span>
													<p class="media-right" style="color: #888;"><b>{{ \Carbon\Carbon::parse($tic->expiry_date)->format('F d, Y') }}</b></p>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>  
								@endforeach 
							@else 
								<div style="text-align: center;" class="margin-15">
										No Ticket..
								</div>
							@endif   
							</div>
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
									<a href="{{ route('profile_additional') }}">Add</a>
									<a href="{{ route('profile_editadditional') }}">Edit</a>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="box-body">  
						    @if (count($about->fitduties) >= 1) 
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
							@endif
							@if(count($about->medical)>=1) 
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
								</span>
							@endif  
							
					</div>
				</div>
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title pull-left">Intereset</span>
						<div>
							<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
								<i class="fa fa-pencil"></i>
							</a>
							<ul class="dropdown-menu right" id="ticket-list">
								<li>
									<a href="{{ route('profile_editadditional') }}">Edit</a>
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="box-body"> 
							@if (count($about->interest) >= 1) 
							<p>{{ $about->interest->description }}</p>
							@else 
								<div style="text-align: center;" class="margin-15">
										No Interests..
								</div>
							@endif   
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
<script type="text/javascript">
	$('#cover').change(function() {
		$('#profile-cover').submit();
	});
	$('#avatar').change(function() {
		$('#profile-avatar').submit();
	}); 
</script>
@endsection