<ul>
	<li class="{{ set_active('dashboard') }}"><a href="{{ route('dashboard') }}"> 
		<center>
		@if (set_active('dashboard'))
			<img src="{{ asset('dashboard_assets/images/icon/feed-grey.png') }}" alt="">
		@else
			<img src="{{ asset('dashboard_assets/images/icon/feed.png') }}" alt="">
		@endif
		<br>Feed</center></a></li>
	<li  class="{{ set_active(['network','mynetwork']) }}"></center><a href="{{ route('network') }}">
		@if (set_active(['network','mynetwork']))
			<img src="{{ asset('dashboard_assets/images/icon/share-grey.png') }}" alt="">
		@else
			<img src="{{ asset('dashboard_assets/images/icon/share.png') }}" alt="">
		@endif
		<br>Network</center>
		</a></li>
	<li  class="{{ set_active(['job_home']) }}"><a  href="{{ route('job_home') }}">
		<center>
		@if (set_active(['job_home']))
			<img src="{{ asset('dashboard_assets/images/icon/id-card.png') }}" alt="">
		@else
			<img src="{{ asset('dashboard_assets/images/icon/id-card-yellow.png') }}" alt="">
		@endif
		<br>Jobs</center>
		</a></li>
	<li class="{{ set_active(['message_home','message_group','message_active','message_interview','message_personal_chat','message_personal_group']) }}" ><a href="{{ route('message_home') }}" >
		<center>
		@if (set_active(['message_home','message_group','message_active','message_interview','message_personal_chat','message_personal_group']))
			<img src="{{ asset('dashboard_assets/images/icon/envelope.png') }}" alt="">
		@else
			<img src="{{ asset('dashboard_assets/images/icon/envelope-yellow.png') }}" alt="">
		@endif
		<br>Messages</center>
		</a></li>
	<li class="{{ set_active(['notification']) }}"><a href="{{ route('notification') }}"   >
		<center>
		@if (set_active(['notification']))
			<img src="{{ asset('dashboard_assets/images/icon/bell-grey.png') }}" alt="">
		@else
			<img src="{{ asset('dashboard_assets/images/icon/bell-yellow.png') }}" alt="">
		@endif
		<br>Notification</center>
		</a></li>
</ul>

