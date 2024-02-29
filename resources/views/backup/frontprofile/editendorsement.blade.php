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
				<h4 class="yellow" style="margin:15px 15px;">Endorsment</h4>
			</div> 
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="wrapper" style="margin-bottom: 20px;">
				<div class="row">
					<div class="col-md-12">
						<p style="color: #fff;">Manage how you receive and give endorsment</p>
						<div class="box border-all-radius" style="margin-bottom: 15px;">
							<div class="row">
								<div class="col-md-4">
									<div class="margin-15-responsive">
										<label class="input-checkbox">
						                  <p>Text in here for endorsment</p>
						                  <input type="checkbox">
						                  <span class="checkmark border-all-radius"></span>
						                </label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="margin-15-responsive">
										<label class="input-checkbox">
						                  <p>Text in here for endorsment</p>
						                  <input type="checkbox">
						                  <span class="checkmark border-all-radius"></span>
						                </label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="margin-15-responsive">
										<label class="input-checkbox">
						                  <p>Text in here for endorsment</p>
						                  <input type="checkbox">
						                  <span class="checkmark border-all-radius"></span>
						                </label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')  
@endsection
