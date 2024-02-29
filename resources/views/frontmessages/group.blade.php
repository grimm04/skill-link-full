@extends('front_jobs.app_one_wrapper_menu')
@section('title') 	
	<title>Messages  | Skill Link </title>
@endsection   
@section('content')
	<div class="row">
		<div class="col-md-9">
			<div style="text-align: center;">
				<a href="{{ route('message_home') }}" class="btn btn-warning">Message</a>
				<a href="{{ route('message_active') }}" class="btn btn-warning">Active</a>
				<a href="" class="btn btn-default">Groups</a>
			</div>
			<div class="margin-15">
				<div class="box-body" id="list-message">
					@foreach ($groups as $gr) 
					<div class="media">
						<div class="media-left">
							@if ($gr->group_image == null)
							<div class="thumbnail margin-15 img-user img-user-small">
								<h2 style="color: #fff;">{{ mb_substr($gr->groups->group_name ,0,1)}}</h2>
							</div> 
								 
							@else 
								<img src="{{ asset('group_image/'.$gr->groups->group_name) }}" alt="bell" class="media-object" style="width: 80px; height: 80px">
							@endif    
						</div>
						<div class="media-body">
							<a href="{{ route('message_personal_group',$gr->groups->ref_number) }}" style="color: #fff;">
								<h5 class="media-heading" style="color: #fff;">{{ $gr->groups->group_name }}</h5>
								{{-- 1 Minute Ago --}}
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
@endsection
