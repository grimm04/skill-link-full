@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>My Network | Skill Link </title>
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
				<h4 class="yellow" style="margin:15px 15px;">My Network</h4>
			</div>
			<ul class="nav">
				<li>
					<div class="setting-more" style="margin-top: -18px;">
						<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
							<i class="fa fa-ellipsis-h yellow" style="font-size: 30px;"></i>
						</a>
						<ul class="dropdown-menu right">
							<a data-id="name"class="btn blue-dark" onclick="sort(this)">Sort by name (A to Z)</a><br>
							<a data-id="company" class="btn blue-dark" onclick="sort(this)">Sort by company (A to Z)</a><br>
							<a data-id="location" class="btn blue-dark" onclick="sort(this)">Sort by location (A to Z)</a><br> 
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
			<div class="box border-top-left-radius border-top-right-radius margin-15">
				<div class="row network-responsive">
					@foreach ($mynetwork as $net)
						<div class="col-md-6 col-xs-6">
							<div class="dashboard-following">
								<a href="{{ route('networkprofile',array('profile'=>$net->usersfollow->username)) }}" style="color:black">
								<div class="row">
									<div class=" col-sm-3 col-md-3">
										@if ($net->usersfollow->photo == null) 
											<img src="{{ asset('avatar/default.png') }}" alt=""> 
										@else  
										    <img src="{{ asset('avatar/'.$net->usersfollow->photo) }}" alt=""> 
										@endif    
									</div>
									<div class="col-sm-7 col-md-7">
									   <h3>{{ $net->usersfollow->fname }} {{ $net->usersfollow->lname }}</h3>
										{{-- <span>General Engineer | Shell Corporation</span> --}} 
										<span>{{count($net->usersfollow->follower)}} Followers</span>
									</div>
								</div>
								</a>
							</div>
						</div> 
					@endforeach   
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')  
<script type="text/javascript">
	 function sort(i) {
			id = $(i).data('id');   
			$.ajax({
                type: 'GET',
	                url: "{{ route('mynetwork') }}",
	                data: { 
                    'sort': id
                },
                success: function(data) {  
                	location.reload();  
                },
       		 }); 
	    } 
</script>
@endsection