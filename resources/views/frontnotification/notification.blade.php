@extends('front_jobs.app_one_wrapper_menu')
@section('title') 	
	<title>Notification  | Skill Link </title>
@endsection  
{{-- @section('right') 	
	@include('dashboard_assets.right')
@endsection   --}}
@section('content')
	 <div class="row">
		<div class="col-md-9">
			{{-- <div class="alert bg-orange" id="myAlert">
			    <a href="{{ route('notification_setting') }}" style="color: #fff;">Improve your notification interest setting</a>
			</div> --}}
			<div class="notification-body" id="notifications"> 
				{!! csrf_field() !!} 
				<div id="notificationsMenuDetail">
					
				</div> 
			</div>
		</div>
	</div>
@endsection 
@section('script')  
@endsection
