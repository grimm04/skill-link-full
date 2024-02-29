<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="user-scalable=no, width=device-width, maximum-scale=1.0">
		@yield('title')
		<link rel="stylesheet" href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}	">
		<link rel="stylesheet" href="{{ asset('dashboard_assets/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('dashboard_assets/css/style.css') }}">
		<script> var base_url = "{{asset('/')}}"; </script>
		@yield('style')
	</head>
	<body>
		<div class="wrapper">
			<header class="header clearfix">
				<div class="navbar-sl bg-blue-dark">
					<div class="logo">
						<img src="{{ asset('dashboard_assets/images/favicon.png') }}" alt="">
					</div>
					<form action="">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-default"><img src="{{ asset('dashboard_assets/images/icon/search.png') }}" alt=""></button>
							</span>
							<input type="text" class="form-control" placeholder="Advance Search">
						</div>
					</form>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="skill-link-2.html" class="active-menu"><i class="icon icon-news-paper active block"></i> News Feed</a></li>
							<li><a href="skill-link-10.html"><i class="icon icon-share active block"></i> Network</a></li>
							<li class="notification">
								<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<i class="icon icon-bell active block"></i> Notification
								</a>
								<ul class="dropdown-menu right">
									<li>
										<div class="notification-lists">
												<div class="notification-header">
													<h5>Notification</h5>
												</div>
												<div class="notification-body">
													<div class="media">
														<div class="media-left">
															<div class="media-object">
																<img src="" alt="">
															</div>
														</div>
														<div class="media-body">
															<a href="#" class="grey">
																<a class="media-heading">Fort Hills job #123 </a>
																<br />
																<span>2 Minutes Ago</span>
																
															</a>
														</div>
													</div>
													<div class="media">
														<div class="media-left">
															<div class="media-object">
																<img src="" alt="">
															</div>
														</div>
														<div class="media-body">
															<a href="#" class="grey">
																<a class="media-heading">Fort Hills job #123 </a>
																<br />
																<span>2 Minutes Ago</span>
																
															</a>
														</div>
													</div>
													<div class="media">
														<div class="media-left">
															<div class="media-object">
																<img src="" alt="">
															</div>
														</div>
														<div class="media-body">
															<a href="#" class="grey">
																<a class="media-heading">Fort Hills job #123 </a>
																<br />
																<span>2 Minutes Ago</span>
																
															</a>
														</div>
													</div>
													<div class="media">
														<div class="media-left">
															<div class="media-object">
																<img src="" alt="">
															</div>
														</div>
														<div class="media-body">
															<a href="#" class="grey">
																<a class="media-heading">Fort Hills job #123 </a>
																<br />
																<span>2 Minutes Ago</span>
																
															</a>
														</div>
													</div>
													<div class="media">
														<div class="media-left">
															<div class="media-object">
																<img src="" alt="">
															</div>
														</div>
														<div class="media-body">
															<a href="#" class="grey">
																<a class="media-heading">Fort Hills job #123 </a>
																<br />
																<span>2 Minutes Ago</span>
																
															</a>
														</div>
													</div> 
												</div>
												<div class="notification-footer">
													<a href="">See more</a>
												</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="user-menu">
								<div class="box bg-yellow">
									<br>
								</div>
										<div class="box box-user bg-blue-dark">
						<div class="branch-img">
								@if ($useremploye->photo != null)
								<img src="{{ asset('avatar/'.$useremploye->photo) }}" alt="">
									 
								{{-- <img src="{{ asset('dashboard_assets/images/kbr.png') }}" alt=""> --}}
								@endif
							<div class="branch-star branch-img-status">
								<div>
									<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<img src="{{ asset('dashboard_assets/images/star.png') }}" alt="">
									</a>
									<ul class="dropdown-menu right">
										<li>
											<a href="#">
												<span style="color: #fff;"><i class="fa fa-star red"></i> currently working<br>not looking for oportunities</span>
											</a>
											<a href="#">
												<span style="color: #fff;"><i class="fa fa-star yellow"></i> currently working<br>not looking for oportunities</span>
											</a>
											<a href="#">
												<span style="color: #fff;"><i class="fa fa-star green"></i> currently working<br>not looking for oportunities</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="branch-check branch-img-status">
								<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
							</div><br>
							<div class="branch-title" style="color: #fff;">
								<h3 style="color: #fff;"><b>{{ $useremploye->fname }} {{ $useremploye->lname }}</b></h3>
								<h3 style="color: #fff;">Head Recruiter</h3>
								<h4 style="color: #fff;">Antonio Hall</h4>
							</div>
							<button data-toggle="expand" data-target=".user-menu" class="btn btn-link btn-expand grey"><img src="{{ asset('dashboard_assets/images/icon/expands.png') }}" alt=""><br><span style="color: #fff;font-size: 12px;">Expand</span></button>
						</div>
						<div class="expanded-tools">
							<a href="{{ route('job_list') }}" class="blue-dark"><i class="fa fa-vcard block"></i> Jobs</a>
							<a href="skill-link-9.html" class="blue-dark"><i class="fa fa-envelope-o block"></i> Messages</a>
							<a href="skill-link-7.html" class="blue-dark"><i class="fa fa-user-o block"></i> Profile</a>
						</div>
						<div class="profile-view bold">
							Who's view your profile | <span class="green">{{ $view_profile }}</span>
						</div>
					</div>
							</li>
						</ul>
					</div>
				</div>
			</header>

			<header class="header-responsive">
				<div class="container-fluid">
					<div class="back-responsive">
						<a href=""><img src="{{ asset('dashboard_assets/images/icon/left.png') }}" alt=""></a>
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
				</div>
			</header> 

			<div class="main-wrapper" style="margin-bottom: 20px;">
				 @yield('content') 
			</div>
		</div>
		<script src="{{ asset('dashboard_assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('dashboard_assets/js/bootstrap.min.js') }}"></script>
		@yield('script')
		@include('dashboard_layouts.online')
		<script>
			$('[data-toggle="expand"]').click(function(ev) {
				ev.preventDefault();
				$($(this).attr('data-target')).toggleClass('expand');
			});

			$('[data-toggle="user-menu"]').click(function(ev) {
				ev.preventDefault();
				ev.stopPropagation();
				$(this).next($(this).attr('data-target')).toggleClass('in');
			});

			$('#user-menu').click(function(ev) {
				ev.stopPropagation();
			});

			$(document).click(function(ev) {
				$('#user-menu').removeClass('in');
			});

			$(document).ready(function(){
			    $(".close").click(function(){
			        $("#myAlert").alert("close");
			    });
			});	
		</script>
	</body>
</html>
