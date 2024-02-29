@extends('front_jobs.app_one_wrapper_menu')
@section('title') 	
	<title>Net Work | Skill Link </title>
@endsection  
{{-- @section('right') 	
	@include('dashboard_layouts.right')
@endsection   --}}
@section('content')
	<div class="row">
		<div class="col-md-9">
			<div class="alert bg-orange" id="myAlert">
			    <a href="{{ route('pending') }}" style="color: #fff;">You have <b>{{ $countpending }} Pending</b> Network invitation</a>
			</div>
			<div class="dashboard-info" style="margin-bottom: 15px;">
				<ul>
					<li class="box">
						<div class="row">
							<a href="{{ route('mynetwork') }}">
							<div class="col-xs-9 col-sm-9 col-md-9">
								<p class="blue-dark bold" style="font-size: 20px;">My Network</p>
							</div> 
							<div class="col-md-3">
								<h2>{{ $network }}</h2>
							</div>
							</a>
						</div>
					</li>
					<li class="box">
						<div class="row">
							<a href="{{ route('visitedmy') }}">
							<div class="col-xs-9 col-sm-9 col-md-9">
								<p class="blue-dark bold" style="font-size: 20px;">Visited my profile</p>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3">
								<h2>{{ $visit }}</h2>
							</div>
							</a>
						</div>
					</li>
					<div class="clearfix"></div>
				</ul><br><br> 
				<div class="" style="margin-bottom: 15px;">
					@foreach ($following as $foll)
					<a href="{{ route('networkprofileadd',$foll->username) }}">
					<div class="col-md-4">
						<div class="box margin-15-responsive" style="margin-bottom: 60px;">
							<div class="branch-img min-height">
								@if ($foll->photo == null)
									<img src="{{ asset('avatar/default.png') }}" alt="">
								@else 
									<img src="{{ asset('avatar/'.$foll->photo) }}" alt="">
								@endif   
								<div class="branch-check branch-img-status">
									<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
								</div><br><br>
								<div class="branch-title">
									<h3><b>{{ $foll->fname }} {{ $foll->lname }}</b></h3>
									{{-- <h3>Head Recruiter</h3> --}}
									@if (count($foll->province) != null) 
										<h4>{{ $foll->province->name }}, {{ $foll->province->country }}</h4><br>
									@else
										<h4></h4><br>
									@endif
									<a href="{{ route('procesedadd',$foll->username) }}" class="btn btn-warning">Add</a>
								</div>
							</div>
						</div>
					</div> 
					</a> 
					@endforeach 
				</div>
			</div>
		</div>    
@endsection 
@section('script')  
@endsection
