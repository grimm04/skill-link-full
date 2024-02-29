<header class="header clearfix">
	<div class="navbar-sl bg-blue-dark">
		<a href="{{ route('dashboard') }}">
		<div class="logo">
			<img src="{{ asset('dashboard_assets/images/favicon.png') }}" alt="">
		</div> 
		</a>
		@include('dashboard_layouts.search')
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			 @include('dashboard_layouts.menu')
		</div>
	</div>
</header> 
<header class="header-responsive">
	<div class="container-fluid">
		<a href="{{ route('dashboard') }}">
		<div class="logo-responsive">
				<img src="{{ asset('dashboard_assets/images/favicon.png') }}" alt="">
		</div>
		</a>
		@include('dashboard_layouts.searchmobile')
		<ul class="nav">
			<li>
				<div>
					<a href="{{ route('search_setting') }}" class="">
						<i class="fa fa-gear yellow" style="font-size: 30px;">	
						</i>
					</a>
				</div>
				<div class="clearfix"></div>
			</li>
		</ul><br><br>
	</div>
	<div class=" bg-yellow ">
		<div class="navbar-search-center">
			<div class="navbar-sl-responsive-2 media-left-2"   style="margin-top: 10px;">
				<ul class="navbar-search">
					<li class="btn-search active"><a data-toggle="tab" class="btn-search-2" class="btn-search-2" href="#all">All</a></li>
					<li class="btn-search"><a data-toggle="tab" class="btn-search-2" href="#profile">Profile</a></li>
					<li class="btn-search"><a data-toggle="tab" class="btn-search-2" href="#jobs">Jobs</a></li>
					<li class="btn-search"><a data-toggle="tab" class="btn-search-2" href="#companies">Companies</a></li>
					<li class="btn-search"><a data-toggle="tab" class="btn-search-2" href="#group">Group</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</header>
