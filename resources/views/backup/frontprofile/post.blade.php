@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>My Network | Skill Link </title>
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
					<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
					<div class="bg-cover-hover">
						<input type="file">
					</div>
				</div>
				<div style="position: relative;">
					<div class="branch-img branch-profile">
						<img src="{{ asset('dashboard_assets/images/2.jpg') }}" alt="">
						<div class="branch-img-hover">
							<input type="file"">
						</div>
						<div class="branch-check branch-img-status">
							<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
						</div><br>
						<div class="branch-title">
							<h3 style="color: #fff;"><b>KBR</b></h3>
							<h3 style="color: #fff;">Head Recruiter</h3>
							<h4 style="color: #fff;">Antonio Hall</h4>
						</div>
					</div>
					<ul class="branch-menu-tabs block">
						<li>
							<a href="{{ route('profile_about', Auth::user()->username) }}" class="btn bg-yellow">About</a>
						</li>
						<li>
							<a href="" class="btn btn-default">Post</a>
						</li>
					</ul>
				</div>
				<div class="box-body dashboard-info" style="margin-bottom: 15px;">
					<ul>
						<li class="box">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-md-9">
									<p class="blue-dark bold" style="font-size: 20px;">Passively Looking</p>
								</div>
								<div class="col-md-3">
									<i class="fa fa-gear yellow" style="font-size: 30px;margin-top: 5px;"></i>
								</div>
							</div>
						</li>
						<li class="box">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-md-9">
									<p class="blue-dark bold" style="font-size: 20px;">Applied Job</p>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3">
									<h2>4</h2>
								</div>
							</div>
						</li>
						<li class="box">
							<div class="row">
								<div class="col-xs-9 col-sm-9 col-md-9">
									<p class="blue-dark bold" style="font-size: 20px;">Your Network</p>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3">
									<h2>4</h2>
								</div>
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
				<div class="box border-top-left-radius border-top-right-radius margin-15">
				<div class="row">
					<div class="col-xs-10 col-sm-8 col-md-8">
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
					<div class="col-xs-2 col-sm-4 col-md-4">
						<div class="setting-more">
							<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<ul class="dropdown-menu right">
								<a href="" class="btn blue-dark">Hide this post</a><br>
								<a href="" class="btn blue-dark">Unfollow Indra Harta Kenda</a><br>
								<a href="" class="btn blue-dark">Report this post</a><br>
								<a href="" class="btn blue-dark">Improve my feed</a><br>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="modal fade" id="hide-post">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity: 1;">&times;</button>
									<h4 class="modal-title">Confirm hide this post ?</h4>
								</div>
								<div class="modal-body">
									<p>Are your sure hide this post ?</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
									<button type="button" class="btn bg-yellow">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div><br>
				<h4>Looking for Appreactice</h4><br>
				<div style="position: relative;" class="articel-img">
					<video width="100%" height="320" controls>
					  <source src="{{ asset('dashboard_assets/images/tes.mp4') }}" type="video/mp4">
					</video>
					<a href="" class="btn bg-blue-dark" style="color: #fff;">See Detail</a>
				</div>
				<br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ipsum accusamus mollitia sit, tenetur rerum accusantium quam non aliquid nemo officia assumenda incidunt voluptatem! Error quod libero amet quia natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ab officiis qui, magni suscipit fuga a. Totam labore architecto voluptatibus eos soluta facere officia reiciendis neque odio consectetur, nesciunt quod.</p>
				<div style="border-top: .7px #1F3E5A solid;border-bottom: .7px #1F3E5A solid;padding: 5px;">
					<span class="blue-dark bold" style="padding: 0px 5px;">8 Likes</span>
					<span class="blue-dark bold" style="padding: 0px 5px;">1 Comments</span>
				</div>
				<div class="like-coment-share">
					<ul>
						<li>
						  <img src="assets/images/icon/like-grey.png" alt="">
						  <input type="checkbox">
						  <div class="like-active like-active-top">
						  	<img src="assets/images/icon/like-active.png" alt="">
						  </div>
						  <h5>Like</h5>
						</li>
						<li>
							<img src="assets/images/icon/comment.png" alt="">
							<h5>Coment</h5>
						</li>
						<li>
							<a data-toggle="modal" href='#modal-id'>
								<img src="assets/images/icon/share-grey.png" alt="">
								<h5>Share</h5>
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<div class="chat-form margin-15 clearfix">
					<div class="chat-img">
						<img src="{{ asset('dashboard_assets/images/2.jpg') }}" alt="women">
					</div>
					<div class="input-group">
				      <input type="text" class="form-control" placeholder="Search for...">
				      <span class="input-group-btn">
				        <button class="btn bg-blue-dark" style="color: #fff;" type="button">Comment</button>
				      </span>
				    </div>
				</div>
			</div>
			</div>
		</div>
	</div>
@endsection

@section('script')  
@endsection
