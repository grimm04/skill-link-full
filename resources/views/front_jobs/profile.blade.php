@extends('front_jobs.app_two_wrapper_menu')
@section('title') 	
	<title>Company Profile | Skill Link </title>
@endsection 
@section('company') 
	@include('all_include.company')  
@endsection 
@section('company_profile') 
	@include('all_include.company_profile')
@endsection 
@section('header')  
	@include('dashboard_layouts.headermenu')   
	<header class="header-responsive">
	<div class="container-fluid"> 
		@include('dashboard_layouts.back')
		@include('dashboard_layouts.searchmobile')
	</div>
</header> 
@endsection 
@section('right') 
@endsection 
{{-- @section('content')   
 	<div class="row">
		<div class="col-md-9">
			<div class="box border-top-left-radius border-top-right-radius margin-15">
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8">
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
					<div class="col-xs-4 col-sm-4 col-md-4">
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
				</div><br>
				<h4>Looking for Appreactice</h4><br>
				<div style="position: relative;" class="articel-img">
					<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
					<a href="" class="btn bg-blue-dark" style="color: #fff;">See Detail</a>
				</div>
				<br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ipsum accusamus mollitia sit, tenetur rerum accusantium quam non aliquid nemo officia assumenda incidunt voluptatem! Error quod libero amet quia natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ab officiis qui, magni suscipit fuga a. Totam labore architecto voluptatibus eos soluta facere officia reiciendis neque odio consectetur, nesciunt quod.</p>
				<div class="like-coment-share">
					<ul>
						<li>
						  <img src="{{ asset('dashboard_assets/images/icon/like-grey.png') }}" alt="">
						  <input type="checkbox">
						  <div class="like-active">
						  	<img src="{{ asset('dashboard_assets/images/icon/like-active.png') }}" alt="">
						  </div>
						  <h5>Like</h5>
						</li>
						<li>
							<img src="{{ asset('dashboard_assets/images/icon/comment.png') }}" alt="">
							<h5>Coment</h5>
						</li>
						<li>
							<a data-toggle="modal" href='#modal-id'>
								<img src="{{ asset('dashboard_assets/images/icon/share-grey.png') }}" alt="">
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
@endsection 
 --}}@section('script')  
@endsection
