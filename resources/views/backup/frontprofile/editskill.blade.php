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
				<h4 class="yellow" style="margin:15px 15px;">Skill</h4>
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
			    		<p style="margin-top: 5px;">Share Profile Change</p>
			    	</div>
			    	<div class="col-xs-4 col-sm-3 col-md-1">
			    		<label class="switch">
						  <input type="checkbox" class="switch-input">
						  <span class="slider round"></span>
						</label>
			    	</div>
			    </div>
			</div>
			<div class="wrapper" style="margin-bottom: 20px;">
				<div class="row">
					<div class="col-md-12">
						<div class="box border-all-radius" style="margin-bottom: 15px;">
							<div class="box-header with-border">
								<span class="box-title"><b>Skill</b></span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-xs-5 col-sm-5 col-md-6">
											<div style="margin-bottom: 10px;">
												<span>First Skill</span>
												<input type="text" value="Coding" class="form-control">
											</div>
										</div>
										<div class="col-xs-5 col-sm-5 col-md-5">
											<div style="margin-bottom: 10px;">
												<span>Level</span>
												<select name="" id="" class="form-control">
													<option value="">Level 1</option>
													<option value="">Level 2</option>
													<option value="">Level 3</option>
												</select>
											</div>
										</div>
										<div class="col-sm-2 col-md-1">
											<i class="fa fa-trash blue-dark" style="font-size:20px;margin-top: 30px;"></i>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-xs-5 col-sm-5 col-md-6">
											<div style="margin-bottom: 10px;">
												<span>First Skill</span>
												<input type="text" value="Coding" class="form-control">
											</div>
										</div>
										<div class="col-xs-5 col-sm-5 col-md-5">
											<div style="margin-bottom: 10px;">
												<span>Level</span>
												<select name="" id="" class="form-control">
													<option value="">Level 1</option>
													<option value="">Level 2</option>
													<option value="">Level 3</option>
												</select>
											</div>
										</div>
										<div class="col-sm-2 col-md-1">
											<i class="fa fa-trash blue-dark" style="font-size:20px;margin-top: 30px;"></i>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-xs-5 col-sm-5 col-md-6">
											<div style="margin-bottom: 10px;">
												<span>First Skill</span>
												<input type="text" value="Coding" class="form-control">
											</div>
										</div>
										<div class="col-xs-5 col-sm-5 col-md-5">
											<div style="margin-bottom: 10px;">
												<span>Level</span>
												<select name="" id="" class="form-control">
													<option value="">Level 1</option>
													<option value="">Level 2</option>
													<option value="">Level 3</option>
												</select>
											</div>
										</div>
										<div class="col-sm-2 col-md-1">
											<i class="fa fa-trash blue-dark" style="font-size:20px;margin-top: 30px;"></i>
										</div>
									</div>
								</div>
							</div>
							<div style="text-align: center;margin: 20px 0px;">
								<button class="btn bg-blue-dark" style="color: #fff;">Add More Skill</button>
								<button class="btn bg-yellow" style="color: #fff;">Save</button>
							</div>
						</div>
					</div>
				</div>
				<div style="text-align: center; margin: 10px 0px;">
					<button class="btn bg-yellow" style="color: #fff;">Adjust Endorsement Setting</button>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')  
@endsection
