<ul class="nav navbar-nav navbar-right navbar-user-menu">
	<li class="user-menu">
		<div class="box-user-menu bg-yellow">
			<br>
			<br>
		</div>
		<div class="box box-user bg-blue-dark">
			<div class="branch-img">  
				<div class="img-user">
					@if ($useremploye->photo == null)
						<div class="thumbnail margin-15 img-user img-user-small" style="width: 40px !important; height: 40px !important; border: none;">
							<h5 style="color: #fff; font-size: 30px !important">{{ mb_substr($useremploye->fname ,0,1)}}{{ mb_substr($useremploye->mdname ,0,1)}}{{ mb_substr($useremploye->lname ,0,1)}}</h5>
						</div>
					@else 
						<img src="{{ asset('avatar/'.$useremploye->photo) }}" style="height:100%;" alt="">
					@endif    
				</div> 
				<div class="branch-star branch-img-status">
					<div>
						<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								@if (count($useremploye->status) != 0)
									@if ($useremploye->status->id == 1)
									 	 <img src="{{ asset('dashboard_assets/images/star-red.jpeg') }}" alt="">
									@elseif($useremploye->status->id == 2)
										 <img src="{{ asset('dashboard_assets/images/star.png') }}" alt="">
									@elseif($useremploye->status->id == 3) 
										 <img src="{{ asset('dashboard_assets/images/star-green.jpeg') }}" alt="">
									@endif  
									
								@endif
						</a> 
						<ul class="dropdown-menu right">
							<li> 
								@foreach ($statuses as $ss)
									<a href="#" onclick="statuses(this);" data-id="{{ $ss->id }}">
										<span style="color: #000;"><i class="fa fa-star {{ $ss->description }}"></i> {{ $ss->name }} </span>
									</a> 
								@endforeach  
						<ul class="dropdown-menu right fav">
							<li>
								@if (count($useremploye->status) != 0)
									@if ($useremploye->status->id == 1)
										<a href="#">
											<span style="color: #000;"><i class="fa fa-star red"></i> {{ $useremploye->status->name }} </span>
										</a>
									@elseif($useremploye->status->id == 2)
										 <a href="#">
											<span style="color: #000;"><i class="fa fa-star yellow"></i>  {{ $useremploye->status->name }}</span>
										</a>
									@elseif($useremploye->status->id == 3) 
										<a href="#">
											<span style="color: #000;"><i class="fa fa-star green"></i> {{ $useremploye->status->name }}</span>
										</a> 
									@endif 
								@endif 
							</li>
						</ul>
					</div>
				</div>
				<div class="branch-check branch-img-status">
					<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
				</div><br>
				<div class="branch-title" style="color: #fff;">
					<h3 style="color: #fff;"><b>{{ $useremploye->fname }} {{ $useremploye->lname }}</b></h3>
					{{-- <h3 style="color: #fff;">-</h3> --}}
					@if (count($useremploye->province) != 0) 
					<h4 style="color: #fff;">{{ $useremploye->province->name }}, {{ $useremploye->province->country }}</h4>
					@endif
				</div>
				<button data-toggle="expand" data-target=".user-menu" class="btn btn-link btn-expand grey"><img src="{{ asset('dashboard_assets/images/icon/expands.png') }}" alt=""><br><span style="color: #fff;font-size: 12px;">Expand</span></button>
			</div>
			<div class="expanded-tools"> 
				<a href="{{ route('job_home') }}" class="blue-dark"><i class="fa fa-vcard block"></i> Jobs</a>
				<a href="{{ route('message_home') }}" class="blue-dark"><i class="fa fa-envelope-o block"></i> Messages</a>
				<a href="{{ route('profile_about') }}" class="blue-dark"><i class="fa fa-user-o block"></i> Profile</a>
				<a href="{{ route('logout') }}" class="blue-dark"><i class="fa fa-sign-out block"></i> Logout</a>
			</div>
			<div class="profile-view bold">
				<a href="{{ route('visitedmy') }}">Who's view your profile </a>| <span class="green">{{ $view_profile }}</span>
			</div>
		</div>
	</li>
</ul>
<ul class="nav navbar-nav navbar-right">
	<li><a href="{{ route('dashboard') }}" class="{{ set_active('dashboard') }}"><i class="icon icon-news-paper active block"></i> News Feed</a></li>
	<li><a href="{{ route('network') }}"  class="{{ set_active(['network','mynetwork','networkprofile','network_about']) }}"><i class="icon icon-share active block"></i> Network</a></li>
	<li class="notification" >
		<a data-target="#" href="#" data-toggle="dropdown" id="notifications"  role="button" aria-haspopup="true" aria-expanded="false" class="{{ set_active('notification') }}">
			<i class="icon icon-bell active block"></i> Notifications 
		</a>
		<ul class="dropdown-menu right">
			<li>
				<div class="notification-lists">
						<div class="notification-header">
							<h5>Notifications</h5>
						</div>
						<div class="notification-body" id="notificationsMenu">
							
						</div>
						<div class="notification-footer">
							<a href="{{ route('notification') }}">See more</a>
						</div>
				</div>
			</li>
		</ul> 
	</li>
</ul>