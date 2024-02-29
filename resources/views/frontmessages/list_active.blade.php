<p><b><i>Active</i></b></p>
@foreach ($active as $ac)
	@php
		$datetime = date("Y-m-d H:i:s"); 
			$ngon = abs(strtotime($datetime) - strtotime($ac->usersfollow->real_time));
	@endphp
	@if ($ngon < 5)
	<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="media">
				<a data-id="{{ $ac->usersfollow->username }}" onclick="return message(this);" class="grey">
				<div class="media-left">
					@if ($ac->usersfollow->photo == null)
						<div class="thumbnail margin-15 img-user img-user-small">
							<h2 style="color: #fff;">{{ mb_substr($ac->usersfollow->fname ,0,1)}}{{ mb_substr($ac->usersfollow->mdname ,0,1)}}{{ mb_substr($ac->usersfollow->lname ,0,1)}}</h2>
						</div> 
					@else 
						<img src="{{ asset('avatar/'.$ac->usersfollow->photo) }}" class="media-object media-object bdr-green" style="width: 80px; height: 80px;border-radius: 50%;">
					@endif    
				</div>
				<div class="media-body">
						<h5 class="media-heading-1">{{ $ac->usersfollow->fname }} {{ $ac->usersfollow->lname }}</h5>
						{{-- <span>General Engineer | Shell </span><br />  --}}
				</div>
				</a>
			</div>
		</div> 
	</div>  
	@endif  
@endforeach
	<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;"> 
<div class="clearfix"></div>
 