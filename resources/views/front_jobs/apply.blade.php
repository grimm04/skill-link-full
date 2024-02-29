@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>{{ $jobs->name }} - {{ $jobs->company->name }} | Skill Link </title>
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
			<h4 class="yellow" style="margin:15px 15px;">Job Poster</h4>
		</div><br><br>
	</div>
</header> 
@endsection 
@section('right') 
@endsection 
@section('style_add')   
	style="margin-bottom: 20px;"
@endsection 
@section('content')  
	<div class="row">
		<div class="col-md-5">
			<div class="box bg-yellow">
				<br>
			</div>
			@include('all_include.job_apply')  
		</div>
		<div class="col-md-4">    
			@include('all_include.job_description') 
			@include('all_include.working_condition') 
			@include('all_include.skill_need')  
		</div>
	</div><br>  
	@include('all_include.other_job')  
@endsection 
