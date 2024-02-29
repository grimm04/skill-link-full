 	<div class="wrap">
	<div class="left">
	@if ($user->photo != null)
		<img src="{{ asset('avatar/'.$user->photo) }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;float:left;">
	@else
		<img src="{{ asset('dashboard_assets/images/peopl.jpg') }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;float:left;">
	@endif 
	<span class="box-title-1">{{$user->fname}} {{$user->lname}}</span>
	</div>
	<div class="right-1">
		<div class="col-xs-2 col-sm-4 col-md-4">
			@if ($message != null)
			<div class="setting-more">
				<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
					<i class="fa fa-ellipsis-h"></i>
				</a>
				<ul class="dropdown-menu right">
					<a data-id="{{ $conversationid }}" id="personal" onclick="return deletechat(this);" class="btn blue-dark">Delete Chat</a><br>  
				</ul>
			</div>
			<div class="clearfix"></div>
			@endif
		</div>
		<div class="modal fade" id="hide-post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity: 1;">&times;</button>
						<h4 class="modal-title">Confirm hide this post ?</h4>
					</div>
					<div class="modal-body">
						<p>Are your sure hide this post ?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
						<button type="button" class="btn bg-yellow">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:10px;"> 
<div class="chat-body">
	@if ($message != null)
		@foreach ($message as $mess) 
			@foreach ($mess->messages as $mes) 
	  		@if ($userwho == 'userone')
		  		@php
		  			if($mes->userfrom == Auth::user()->id){
		  				$class = 'right-1'; 
		  				$float = 'float:right;';
			  			$box = 'box-title-2 bg-blue'; 
			  			$style = 'float:right; margin-right:20px;'; 
		  			}else  { 
			  			$class = 'left';
		  				$float = 'float:left;';
			  			$box = 'box-title-2'; 
			  			$style = '';
		  			}
		  		@endphp 
				<div class="wrap mt-20 mb-20">
					<div class="{{ $class}} fix-width">
						@if ($mes->userone->photo !=null)
							<img src="{{ asset('avatar/'.$mes->userone->photo) }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;{{ $float }}">
						@else
							<img src="{{ asset('dashboard_assets/images/peopl.jpg') }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;{{ $float }}">
						@endif 
						<span class="{{ $box}}" style="{{ $style}}">
							<p style="font-size: 14px;font-weight: bold;margin: 0px; color: #FBB03B;">{{ $mes->created_at->format('M d,Y')}} at {{ $mes->created_at->format('g:i A')}}  </p>
							@if ($mes->msg !=null)
								{{ $mes->msg }}
							@endif
							@if ($mes->images !=null)  
								<img src="{{ asset('message_images/'.$mes->images) }}" alt="">
							@endif 						</span>
					</div> 
				</div>  
			@else  
				<div class="wrap mt-20 mb-20">
					@php
			  			if($mes->userto != Auth::user()->id){
			  				$class1 = 'right-1'; 
			  				$float1 = 'float:right;';
			  				$box1 = 'box-title-2 bg-blue';
			  				$style = 'float:right; margin-right:20px;';
			  			}else  {
			  			 	$class1 = 'left';
			  				$float1 = 'float:left;';
			  				$box1 = 'box-title-2';
			  				$style = '';
			  			}
			  		@endphp 
					<div class="{{ $class1}} fix-width">
						@if ($mes->userone->photo !=null)
							<img src="{{ asset('avatar/'.$mes->userone->photo) }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;{{ $float1 }}">
						@else
							<img src="{{ asset('dashboard_assets/images/peopl.jpg') }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;{{ $float1 }}">
						@endif 
						
						<span class="{{ $box1}}"  style="{{ $style}}">
							<p style="font-size: 14px;font-weight: bold;margin: 0px; color: #FBB03B;">{{ $mes->created_at->format('M d,Y')}} at {{ $mes->created_at->format('g:i A')}}  </p>
							@if ($mes->msg !=null)
								{{ $mes->msg }}
							@endif
							@if ($mes->images !=null)  
								<img src="{{ asset('message_images/'.$mes->images) }}" alt="">
							@endif 
						
						</span>
					</div>
				</div>  
			@endif 
  			@endforeach  
		@endforeach  
	@else
	<p>No messages</p>
	@endif
	
	{{--  <div class="wrap mt-20 mb-20">
		<div class="right fix-width"> 
		<img src="{{ asset('dashboard_assets/images/peopl.jpg') }}" alt="bell" class="media-object" style="width: 40px; height: 40px;border-radius: 15%;float:right;">
		<span class="box-title-3">
			<p style="font-size: 14px;font-weight: bold;margin: 0px; color: #FBB03B;">Feb 5,2017 at 23:30</p>
			<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
		</span>
		</div>
	</div>   --}} 
</div>
<div class="chat-form margin-15 clearfix">
	<div id='preview'></div>
	<form method="post"  id="message-form-image" enctype="multipart/form-data" action="{{ route('message_save_photo') }}">
		{!! csrf_field() !!} 
	<div class="chat-img">
		<input type="hidden" class="form-control" name="userto" value="{{ $user->id }}"> 
		<input type="hidden" class="form-control" name="conversationid" value="{{ $conversationid }}"> 
		<input type="file" name="photochat" id="photoimg" onchange="form.submit()">
		<i class="fa fa-picture-o"></i>
	</div>
	</form>
	<form method="post"  id="message-form">
	{!! csrf_field() !!} 
	<div class="input-group">
      <input type="text" name="msg" class="form-control" placeholder="Type Something..">
		<input type="hidden" class="form-control" name="userto" value="{{ $user->id }}"> 
		<input type="hidden" class="form-control" name="conversationid" value="{{ $conversationid }}"> 
      <span class="input-group-btn">
        <button class="btn" type="button" id="save" onclick="chat(this)" style="background-color:  #1F3E5A;">Post</button>
      </span>
    </div>
    </form>
</div>
