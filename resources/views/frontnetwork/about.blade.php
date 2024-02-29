@extends('front_jobs.app_one_wrapper')
@section('title') 	
	{!! $og->renderTags() !!}
	<title>{{ $networkprofile->fname }} {{ $networkprofile->lname }} | Skill Link </title>
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
							{!! csrf_field() !!} 
							@if (in_array($networkprofile->id, $followid))
								 <a  class="btn blue-dark" data-id="{!! $networkprofile->id !!}" onclick="unfollow(this)">Remove Network</a><br>
							@else 
								<a  class="btn blue-dark" data-id="{!! $networkprofile->id !!}" id="network" onclick="follow(this)">Add Network</a><br>
							@endif  
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
								@if ($networkprofile->cover == null)   
									<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
								@else 
									<img src="{{ asset('cover/'.$networkprofile->cover) }}" alt="">
								@endif    
							</div>
							<div style="position: relative;">
								<div class="branch-img branch-profile">
									@if ($networkprofile->photo == null)
										<div class="img-user"  style="width: 150px !important; height: 150px !important">
											<h1 style="color: #fff; font-size: 52px !important;" class="media-object" >{{ mb_substr($networkprofile->fname ,0,1)}}{{ mb_substr($networkprofile->mdname ,0,1)}}{{ mb_substr($networkprofile->lname ,0,1)}}</h1>
										</div>  
									@else 
										<img src="{{ asset('avatar/'.$networkprofile->photo) }}">
									@endif    
									<div class="branch-check branch-img-status">
										<img src="assets/images/check.png" alt="">
									</div><br>
									<div class="branch-title">
										<h3 style="color: #fff;"><b>{{ $networkprofile->fname }} {{ $networkprofile->lname }}</b></h3>
										{{-- <h3 style="color: #fff;">Head Recruiter</h3> --}}
										@if (count($networkprofile->province) != null) 
											<h4 style="color: #fff;">{{ $networkprofile->province->name }}, {{ $networkprofile->province->country }}</h4>
										@endif 
									</div>
								</div>
								<div class="btn-edit-profile" style="margin: 0 auto;text-align: center;">
									{{-- <a href="" class="btn btn-warning" style="">
										See who else works here
									</a> --}}
								</div>
								<ul class="branch-menu-tabs block">
									<li>
										<a href=""  class="btn btn-default">About</a>
				 					</li>
									<li>
										<a href="{{ route('networkprofile',array('profile'=>$networkprofile->username)) }}" class="btn bg-yellow">Post</a>
									</li>
									<li>
										<a href="{{ route('message_personal_chat',$networkprofile->username) }}" class="btn bg-yellow">Message</a>
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
													<td><b>@if ($networkprofile->about != null)
															{{ $networkprofile->about }}
															@else 
															-
														@endif</b></td>
												</tr>
												<tr>
													<td>Birthday</td>
													<td><b>@if ($networkprofile->birth != null) 
															{{ $networkprofile->birth->format('M') }} {{ $networkprofile->birth->format('d') }}, {{ $networkprofile->birth->format('Y') }}
															@else 
															-
														@endif</b></td>
												</tr>
												<tr>
													<td>Lives in</td>
													@if (count($networkprofile->province) != null) 
														<td><b>{{ $networkprofile->province->name }}, {{ $networkprofile->province->country }}</b></td>
													@endif
												</tr>
												<tr>
													<td>Occupation</td> 
													@if (count($networkprofile->chtrade) != null) 
														{{ $networkprofile->chtrade->name }}
													@else
													-
													@endif
												</tr>
											</b>
												</tr>
												<tr>
													<td>Joined</td> 
													<td><b>{{ $networkprofile->created_at->format('M') }} {{ $networkprofile->created_at->format('d') }}, {{ $networkprofile->created_at->format('Y') }}</b></td>
												</tr>
												<tr>
													<td>Gender</td>
													<td><b>@if (count($networkprofile->gender) != null)
															{{ $networkprofile->gender->name }}
															@else  
															-
														@endif</b></td>
												</tr>
												<tr>
													<td>Status</td>
													<td><b>@if (count($networkprofile->martial) != null)
															{{ $networkprofile->martial->name }}
															@else 
															-
														@endif</b></td>
												</tr> 
												<tr>
													<td>Website</td>
													<td><b><a href="{{ $networkprofile->web }}" class="grey">
														@if ($networkprofile->web != null)
															{{ $networkprofile->web }}
															@else 
															-
														@endif
														</a></b>
													</td>
												</tr> 
												<tr>
													<td>Social Network</td>
													<td>
														@if ($networkprofile->fb != null)
															<a href="https://facebook.com/{{ $networkprofile->fb }}" target="_blank"><span class="btn btn-warning"><i class="fa fa-facebook"></i></span></a>
															@else  
														@endif 
														@if ($networkprofile->twitter != null)
															<a href="https://twitter.com/{{ $networkprofile->twitter }} "  target="_blank"><span class="btn btn-warning"><i class="fa fa-twitter"></i></span></a>
															@else  
														@endif 
														@if ($networkprofile->ig != null)
															<a href="https://www.instagram.com/{{ $networkprofile->ig }}"  target="_blank"><span class="btn btn-warning"><i class="fa fa-instagram"></i></span></a>
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
								</div>
								<div class="box-body">
									<div class="row"> 
										@if (count($networkprofile->experience) >= 1)
											 @foreach ($networkprofile->experience as $ex)
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
								</div>
								<div class="box-body"> 

									@if (count($networkprofile->skill) >= 1)
										@foreach ($networkprofile->skill as $sk)
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
							<div class="box margin-15">
								<div class="box-header with-border">
									<span class="box-title"><b>Education</b></span>
								</div>
								<div class="box-body">
									<div class="row"> 
										@if (count($networkprofile->education)  >= 1)
											 @foreach ($networkprofile->education as $edu)
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
							</div>
							<div class="box border-all-radius margin-15">
								<div class="box-header with-border">
									<span class="box-title">
										Employment Timeline 
									</span>
								</div>
								<div class="box-body">
									<div class="row">
										<div class="timeline">  
										@foreach ($networkprofile->timeline as $time => $timeline)
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
										@if (count($networkprofile->timeline) >= 1)
										<ul class="timeline-btn">
											<li class="btn btn-warning"><img src="{{ asset('dashboard_assets/images/icon/head.png') }}" alt=""><br> FIELD WORK</li>
											<li class="btn btn-black"><img src="{{ asset('dashboard_assets/images/icon/list.png') }}" alt=""><br> MANAGEMENT</li>
											<li class="btn btn-danger"><img src="{{ asset('dashboard_assets/images/icon/tool.png') }}" alt=""><br> SPECIALISED</li>
										</ul> 
										@else 
											<div style="text-align: center;" class="margin-15">
													No Timeline..
											</div>
										@endif   
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection

@section('script')  
@endsection
