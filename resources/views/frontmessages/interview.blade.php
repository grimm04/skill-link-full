@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Visited My Profile | Skill Link </title>
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
							<i class="fa fa-gear yellow" style="font-size: 30px;"></i>
						</a>
						<ul class="dropdown-menu right">
							<a href="" class="btn blue-dark">Turn Notification On</a><br>
							<a href="" class="btn blue-dark">Create Group</a><br>
							<a href="" class="btn blue-dark">Block</a><br> 
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
			<div class="box border-all-radius">
			<div class="box-header with-border">
				<div class="media-left">
				    <a href="#">
				      <img class="media-object" style="width: 40px; height: 60px;" src="{{ asset('dashboard_assets/images/favicon.png') }}" alt="KBR">
				    </a>
				 </div>
				<div class="media-body">
					<span class="box-title">Skill.Link System Interview</span>
				</div>
			</div>
			<div class="box-body">
				<div class="">
					<div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" style="width: 40px; height: 60px;" src="{{ asset('dashboard_assets/images/favicon.png') }}" alt="KBR">
					    </a>
					  </div>
					  <div class="media-body">
					    <div class="chat-ms-message">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						</div>
					  </div>
					  <div style="text-align: center;">
						  <span>8/9/15 2:47 PM</span>
					   </div>
					</div>
				</div>
			</div>
		</div><br>
		<div style="text-align: center;">
			<button class="btn bg-yellow">Accept</button>
			<button class="btn btn-default">Request to reschedule</button>
		</div>
	</div>
@endsection

@section('script')  
@endsection
