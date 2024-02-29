@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>{{ $confirm->fname }} {{ $confirm->lname }} | Skill Link </title>
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
							<a href="" class="btn blue-dark">Remove Network</a><br>
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
						<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
						{{-- <div class="bg-cover-hover">
							<input type="file">
						</div> --}}
					</div>
					<div style="position: relative;">
						<div class="branch-img branch-profile"> 
							@if ($confirm->photo == null)
								<div class="thumbnail margin-15 img-user img-user-small" style="width: 200px !important; height: 200px !important; border: none;">
										<h5 style="color: #fff;" >{{ mb_substr($confirm->fname ,0,1)}}{{ mb_substr($confirm->mdname ,0,1)}}{{ mb_substr($confirm->lname ,0,1)}}</h5>
									</div> 
							@else 
								<img src="{{ asset('avatar/'.$confirm->photo ) }}" alt=""> 
							@endif   
							<div class="branch-check branch-img-status">
								<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
							</div><br>
							<div class="branch-title">
								<h3 style="color: #fff;"><b>{{ $confirm->fname }} {{ $confirm->lname }}</b></h3>
								{{-- <h3 style="color: #fff;">Head Recruiter</h3> --}}
								@if (count($confirm->province) != 0) 
									<h4 style="color: #fff;">{{ $confirm->province->name }}, {{ $confirm->province->country }}</h4>
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
								{!! csrf_field() !!} 
								<a data-id="{!! $confirm->id !!}" onclick="confirm(this)" class="btn bg-yellow">Confirm</a>
							</li>
							<li>
								<a href="" class="btn bg-yellow">Message</a>
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
										<td><b>{!! $confirm->about !!}</b></td>
									</tr>
									<tr>
										<td>Occupation</td>
										<td><b>
											@if (count($confirm->chtrade) != null) 
												{{ $confirm->chtrade->name }}
											@else
											-
											@endif
											</b>
										</td>
									</tr>
									<tr>
										<td>Gender</td>
										<td><b>
											@if (count($confirm->gender) != null)
													{{ $confirm->gender->name }}
												@else  
												-
												@endif
											</b>
										</td>
									</tr>
									<tr>
										<td>Website</td>
										<td><b><a href="{{ $confirm->web }}" class="grey">
												@if ($confirm->web != null)
													{{ $confirm->web }}
													@else 
													-
												@endif
												</a>
											</b>
										</td>
									</tr>
									<tr>
										<td>Social Network</td>
										<td>
											@if ($confirm->fb != null)
												<a href="https://facebook.com/{{ $confirm->fb }}" target="_blank"><span class="btn btn-warning"><i class="fa fa-facebook"></i></span></a>
												@else  
											@endif 
											@if ($confirm->twitter != null)
												<a href="https://twitter.com/{{ $confirm->twitter }} "  target="_blank"><span class="btn btn-warning"><i class="fa fa-twitter"></i></span></a>
												@else  
											@endif 
											@if ($confirm->ig != null)
												<a href="https://www.instagram.com/{{ $confirm->ig }}"  target="_blank"><span class="btn btn-warning"><i class="fa fa-instagram"></i></span></a>
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
							<span class="box-title"><b>Education</b></span>
						</div>
						<div class="box-body">
							<div class="row">
								@if (count($confirm->education) >= 1)
									 @foreach ($confirm->education as $ex)
										<div class="col-md-4">
											<div class="media">
												<div class="media-left"> 
													@if ($ex->photo == null)
														<div class="thumbnail margin-15 img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
																<h2 style="color: #fff;" >{{ mb_substr($ex->institution ,0,1)}}</h2>
															</div>  
													@else 
													<img src="{{ asset('images/educations/'.$ex->photo) }}" alt="bell" class="media-object" style="width: 80px; height: 80px"> 
													@endif    
												</div>
												<div class="media-body"> 
													<a href="#" class="grey">
														<h5 class="media-heading">{{ $ex->institution }}</h5>
														Class of {{ $ex->from }} - {{ Carbon\Carbon::parse($ex->untilt)->format('Y') }} <br />
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
						@if (count($confirm->education) >= 1)
							<div style="text-align: center;" class="margin-15">
								<a href="" style="font-weight: 700;color: #333;">See more</a>
							</div> 
						@endif 
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
								@foreach ($confirm->timeline as $time => $timeline)
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
								@if (count($confirm->timeline) >= 1)
								<ul class="timeline-btn">
									<li class="btn btn-warning"><img src="{{ asset('dashboard_assets/images/icon/head.png') }}" alt=""><br> FIELD WORK</li>
									<li class="btn btn-black"><img src="{{ asset('dashboard_assets/images/icon/list.png') }}" alt=""><br> MANAGEMENT</li>
									<li class="btn btn-danger"><img src="{{ asset('dashboard_assets/images/icon/tool.png') }}" alt=""><br> FIELD WORK</li>
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
		<script type="text/javascript">	
			function confirm(i) {
				id = $(i).data('id');    
	                $.ajax({
	                    type: 'POST',
	                    url: "{{ route('confirm_post') }}",
	                    data: {
	                        '_token': $('input[name=_token]').val(),
	                        'id': id
	                    },
	                    success: function(data) { 
	                        if ((data.errors)) {
			                        setTimeout(function () { 
			                            toastr.error('Validation error!', {timeOut: 1000});
			                        }, 500);  
			                } else {
			                	toastr.success('Confirm Success', {timeOut: 5000}); 
		                        window.location.href = data.route;
			                }
	                    },
	                });
			} 	
		</script>
@endsection
