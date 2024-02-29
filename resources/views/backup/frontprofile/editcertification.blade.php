@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Profile | Skill Link </title>
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
				<h4 class="yellow" style="margin:15px 15px;">Certification </h4>
			</div> 
			<ul>
				<nav>
					<button class="btn bg-yellow">Save</button>
				</nav>
			</ul>
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="alert bg-orange" id="myAlert" style="padding: 10px 10px 5px 10px;">
			    <div class="row">
			    	<div class="col-xs-8 col-sm-9 col-md-11">
			    		<p style="margin-top: 5px;">This section is private only to you and employer</p>
			    	</div>
			    </div>
			</div>
			<div class="wrapper" style="margin-bottom: 20px;">
				<div class="row">
					<div class="col-md-12">
						<div class="box border-all-radius" style="margin-bottom: 15px;">
							<div class="box-header with-border">
								<span class="box-title"><b>Certificate 1</b></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div style="margin-bottom: 10px;">
										<span>Upload photo</span>
										<input type="file" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div style="margin-bottom: 10px;">
										<span>Title</span>
										<input type="text" value="KBR" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div style="margin-bottom: 10px;">
										<span>Institution</span>
										<input type="text" value="KBR" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div style="margin-bottom: 10px;">
										<span>Location</span>
										<input type="text" value="KBR" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div style="margin-bottom: 10px;">
										<span>Expiry Date</span>
										<input type="date" value="KBR" class="form-control">
									</div>
								</div>
							</div>
							<div style="text-align: center;margin: 10px 0px;">
								<button class="btn bg-red" style="color: #fff;">Delete Experience</button>
							</div>
						</div>
					</div>
				</div>
				<div style="text-align: center; margin: 10px 0px;">
					<button class="btn bg-yellow" style="color: #fff;">Add More Certificate</button>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')  
@endsection
