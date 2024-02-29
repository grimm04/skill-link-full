<header class="header-responsive">
	<div class="container-fluid">
		<a href="{{ route('dashboard') }}">
		<div class="logo">
			<img src="{{ asset('dashboard_assets/images/favicon.png') }}" alt="">
		</div> 
		</a>
		@include('dashboard_layouts.search')
		<ul class="nav">
			<li class="user-menu-responsive">
				<a href="#">
					<img src="{{ asset('dashboard_assets/images/2.jpg') }}" alt="">
				</a>
			</li>
			<li>
				<div>
					<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<img src="{{ asset('dashboard_assets/images/icon/menu.png') }}" alt="">
					</a>
					<ul class="dropdown-menu right" id="ticket-list">
						<li>
							<a href="{{ route('profile_about') }}" >About</a>
							<a href="{{ route('profile_about') }}" >Timeline</a>
							<a href="{{ route('profile_about') }}" >Tickets</a>
							<a href="{{ route('profile_about') }}">Setting</a>
							<a href="{{ route('logout') }}">Logout</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</li>
		</ul><br><br>
		<div class="navbar-sl-responsive">
			@include('dashboard_layouts.menumobile')
		</div>
		<div class="clearfix"></div>
	</div>
</header>
