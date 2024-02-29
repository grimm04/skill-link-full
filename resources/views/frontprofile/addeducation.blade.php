@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Education | Skill Link </title>
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
				<h4 class="yellow" style="margin:15px 15px;">Education </h4>
			</div> 
			<ul>
				<nav>  
					<button class="btn bg-yellow" form="form-add-edu" type="submit" id="save-add" >Save</button> 
				</nav>
			</ul>
		</div>
</header> 
@endsection 
@section('content')   
	<div class="main-wrapper" id="wrapper">
		<div class="row">
			<div class="col-md-9">
			    @include('frontprofile.statusshare');
				<div class="wrapper" style="margin-bottom: 20px;">
					<div class="row">
						<form method="post" id="form-add-edu" action="{{ route('profile_post_addeducation') }}" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="col-md-12">
							<div class="multi-field-wrapper">
								<div class="multi-fields">
									<div class="multi-field">
										<div class="box border-all-radius box-looping" style="margin-bottom: 15px;">
											<div class="box-header with-border">
												<span class="box-title"><b>Education</b></span>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Institution</span><span style="color: red;">*</span>
														<input type="text" name="institution[][institution]" class="form-control" >
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Major</span><span style="color: red;">*</span>
														<input type="text" name="major[][major]"  class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Location</span><span style="color: red;">*</span>
														<input type="text" name="location[][location]" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>From</span><span style="color: red;">*</span>
														<input type="number" name="from[][from]" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Until</span><span style="color: red;">*</span>
														<input type="number" name="until[][until]"  class="form-control">
													</div>
												</div>
											</div>
										</div>
										<button class="remove-field btn bg-red" style="color: #fff;margin-bottom: 10px;">Delete Experience</button>
									</div>
								</div>
								<div style="text-align: center; margin: 10px 0px;">
									<button class="btn bg-yellow" type="submit" style="color: #fff;">Save</button>
									<button class="btn bg-yellow add-field" type="button" style="color: #fff;">Add More Education</button>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('style')   
	{!!Html::style('css/jquery-ui.css')!!}  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"> 
@endsection 
@section('script')  
	{!!Html::script('js/jquery-ui.js')!!} 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script> 
	<script type="text/javascript">
		@if (count($errors) != 0)
		    setTimeout(function () { 
		        toastr.error('Fill Required Input!',{timeOut: 5000});
		    }, 500);  
		@endif  
	</script>
@endsection
