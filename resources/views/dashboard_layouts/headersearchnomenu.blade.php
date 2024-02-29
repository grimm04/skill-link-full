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
			<div class="back-responsive">
				<a onclick="goBack()"> 
					<img src="{{ asset('dashboard_assets/images/icon/left.png') }}" alt="">
				</a>
			</div>
			<div class="navbar-sl">
				<h4 class="yellow" style="margin:15px 15px;">Search Setting</h4>
			</div>
		</div>
	</header>