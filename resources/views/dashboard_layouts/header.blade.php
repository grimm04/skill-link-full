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
			<li class="user-menu-responsive">
					<a href="{{ route('profile_about') }}">
						@if (Auth::user()->photo == null)
							<div class="thumbnail margin-15 img-user img-user-small" style="width: 40px !important; height: 40px !important; border: none;">
								<h5 style="color: #fff;">{{ mb_substr(Auth::user()->fname ,0,1)}}{{ mb_substr(Auth::user()->mdname ,0,1)}}{{ mb_substr(Auth::user()->lname ,0,1)}}</h5>
							</div>
						@else 
							<img src="{{ asset('avatar/'.Auth::user()->photo) }}" style="height:100%;" alt="">
						@endif    
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
							<a href="{{ route('profile_about') }}" >Setting</a>
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
