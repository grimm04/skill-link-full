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
						<form method="post" id="form-add-ex" action="{{ route('save_certification') }}" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="col-md-12"> 
							<div class="multi-field-wrapper">
								<div class="multi-fields">
									<div class="multi-field">
										<div class="box border-all-radius" style="margin-bottom: 15px;">
											<div class="box-header with-border">
												<span class="box-title"><b>Certificate 1</b></span>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Upload Certificate</span><span style="color: red;">*</span>
														<input type="file" class="form-control" name="photo[][photo]">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Title</span><span style="color: red;">*</span>
														<input type="text" class="form-control" name="title[][title]">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Institution</span><span style="color: red;">*</span>
														<input type="text" class="form-control" name="institution[][institution]">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Location</span><span style="color: red;">*</span>
														<input type="text" class="form-control" name="location[][location]">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Expiry Date</span>
														<input type="date" class="form-control" name="expiry_date[][expiry_date]" value="{{ \Carbon\Carbon::now()->format('Y-m-d')}}">
													</div>
												</div>
											</div>
										</div>
										<button class="btn bg-red remove-field" style="color: #fff;margin-bottom: 10px;">Delete Experience</button>
									</div>
								</div>
								<div style="text-align: center; margin: 10px 0px;">
									<button class="btn bg-yellow" type="submit" style="color: #fff;">Save</button>
									<button class="btn bg-yellow add-field" type="button" style="color: #fff;">Add More Certificate</button>
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
<script type="text/javascript">
	@if (count($errors) != 0)
	    setTimeout(function () { 
	        toastr.error('Fill Required Input!',{timeOut: 5000});
	    }, 500);  
	@endif  
</script>
@endsection
