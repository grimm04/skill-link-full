
{{-- <div class="media-body" > 
	@foreach ($conversation as $message) 
			 <div class="chat-ms-message @if ($message->userid == Auth::user()->id) message-left @endif">
			 	<p style="font-size: 14px;font-weight: bold;margin: 0px;"><small>{{ $message->user->fname }} {{ $message->user->lname }} |{{ $message->created_at->format('g:i A')}} </small></p>
				{{ $message->msg }}
			</div> 
	@endforeach			   
</div> 
  --}}
 <div class="wrap">
		<div class="left">
			@if ($group->group_image != null)
				<img src="{{ asset('group_image/'.$user->group_image) }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;float:left;">
			@else
				<img src="{{ asset('dashboard_assets/images/peopl.jpg') }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;float:left;">
			@endif 
			<span class="box-title-1">{{$group->group_name}}</span>
		</div> 
		</div>
		<div class="clearfix"></div>
		<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:10px;"> 
		<div class="chat-body">
			@foreach ($conversation as $message )  
			  		@php
			  			if($message->userid != Auth::user()->id){
			  				$class = 'left';
			  				$float = 'float:left;';
				  			$box = 'box-title-2'; 
			  			}else  {
			  				$class = 'right'; 
			  				$float = 'float:right;';
				  			$box = 'box-title-3'; 
			  			}
			  		@endphp 
					<div class="wrap mt-20 mb-20">
						<div class="{{ $class}} fix-width">
							@if ($message->user->photo !=null)
								<img src="{{ asset('avatar/'.$message->user->photo) }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;{{ $float }}">
							@else
								<img src="{{ asset('dashboard_assets/images/peopl.jpg') }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;{{ $float }}">
							@endif 
							<span class="{{ $box}}">

								<p style="font-size: 14px;font-weight: bold;margin: 0px; color: #FBB03B;">{{ $message->created_at->format('M d,Y')}} at {{ $message->created_at->format('g:i A')}} </p>
							@if ($message->msg !=null)
								{{ $message->msg }}
							@endif
							@if ($message->images !=null)  
								<img src="{{ asset('message_images/'.$message->images) }}" alt="">
							@endif 
							 
							</span>
						</div>
					</div>     
			@endforeach  
		</div>
		<div class="chat-form margin-15 clearfix">
			<form method="post"  id="message-form-image" enctype="multipart/form-data" action="{{ route('message_group_save_photo') }}">
				{!! csrf_field() !!} 
			<div class="chat-img">
			    <input type="hidden" class="form-control" name="groupid" value="{{ $group->id }}">  
				<input type="file"  name="photochat" onchange="form.submit()">
				<i class="fa fa-picture-o"></i>
			</div>
			</form>
			<form method="post"  id="message-form">
			{!! csrf_field() !!} 
			<div class="input-group">
		      <input type="text" name="msg" class="form-control" placeholder="Type Something..">
				<input type="hidden" class="form-control" name="groupid" value="{{ $group->id }}">  
		      <span class="input-group-btn">
		        <button class="btn" type="button" id="save" onclick="chatgroup(this)" style="background-color:  #1F3E5A;">Post</button>
		      </span>
		    </div>
		    </form>
		</div>
