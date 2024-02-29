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
