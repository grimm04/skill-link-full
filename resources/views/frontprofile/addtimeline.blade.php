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
				<h4 class="yellow" style="margin:15px 15px;">Employment Timeline </h4>
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
					<form method="post" id="form-add-edu" action="{{ route('profile_post_addtimeline') }}" enctype="multipart/form-data">
					{!! csrf_field() !!}
					<div class="col-md-12">
						<div class="multi-field-wrapper">
							<div class="multi-fields">
								<div class="multi-field">
									<div class="box border-all-radius box-looping" style="margin-bottom: 15px;">
										<div class="box-header with-border">
											<span class="box-title"><b>First Job</b></span>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-xs-5 col-sm-3 col-md-3">
														<div style="margin-bottom: 10px;">
															<span>Job</span>
															<select name="jobid[][jobid]" id="" class="form-control">
																@foreach ($job as $j) 
																	<option value="{{ $j->id}}">{{ $j->name}} - {{ $j->company->name}}</option> 
																@endforeach
															</select>
														</div>
													</div>
													<div class="col-xs-5 col-sm-3 col-md-3">
														<div style="margin-bottom: 10px;">
															<span>Type</span>
															<select name="type[][type]" id="" class="form-control">
																@foreach ($type as $ty) 
																	<option value="{{ $ty->id}}">{{ $ty->type}}</option> 
																@endforeach
															</select>
														</div>
													</div>
													<div class="col-xs-5 col-sm-3 col-md-3">
														<div style="margin-bottom: 10px;">
															<span>Start Date</span>
															<input type="date" name="start_date[][start_date]"  class="form-control " value="{{ \Carbon\Carbon::now()->format('Y-m-d')}}">
														</div>
													</div>
													<div class="col-xs-5 col-sm-3 col-md-3">
														<div style="margin-bottom: 10px;">
															<span>End Date</span>
															<input type="date" name="end_date[][end_date]"  class="form-control" value="{{ \Carbon\Carbon::now()->format('Y-m-d')}}">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> 
									<button class="btn bg-red remove-field" style="color: #fff;margin-bottom: 10px;">Delete</button>
								</div>
							</div>
							<div style="text-align: center; margin: 10px 0px;">
								<button class="btn bg-yellow" type="submit" style="color: #fff;">Save</button>
								<button class="btn bg-yellow add-field" style="color: #fff;">Add More in Timeline</button>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')  
@endsection