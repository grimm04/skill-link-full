<p><b><i>Messages</i></b></p> 
@if (count($conversation)!= 0)
	 

@foreach ($conversation as $cv) 
			@if ($cv->one->id == Auth::user()->id)  
				<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;">
				<div class="row" >
					<div class="col-xs-12 col-sm-12 col-md-12">
						<a data-id="{{ $cv->two->username }}" onclick="return message(this);" class="grey">
						<div class="media">
							<div class="media-left">
								@php
									$datetime = date("Y-m-d H:i:s"); 
										$ngon = abs(strtotime($datetime) - strtotime($cv->two->real_time));
								if ($ngon < 5){
									$green = "bdr-green";
									$style = "border-radius: 50%;";
								}else {
									$green = ""; 
									$style = ""; 
								} 
								@endphp

								@if ($cv->two->photo == null) 
									<div class="thumbnail margin-15 img-user img-user-small">
										<h2 style="color: #fff;">{{ mb_substr($cv->two->fname ,0,1)}}{{ mb_substr($cv->two->mdname ,0,1)}}{{ mb_substr($cv->two->lname ,0,1)}}</h2>
									</div> 
								@else 
									<img src="{{ asset('avatar/'.$cv->two->photo) }}" class="media-object {{ $green }}" style="width: 80px; height: 80px;{{ $style }}"> 
								@endif    
							</div>
							<div class="media-body"> 
									<h5 class="media-heading-1">{{ $cv->two->fname }} {{ $cv->two->lname }}</h5>
									{{-- <span>General Engineer | Shell </span><br /> --}}
									@if (count($cv->message) != 0)
										  	{{-- expr --}}
										<i>{{ $cv->message->msg }} </i>
									@endif   
							</div>
						</div>
						</a>
					</div> 
				</div>  
			@endif  
			@if ($cv->two->id == Auth::user()->id)  
				<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;">
				<div class="row" >
					<div class="col-xs-12 col-sm-12 col-md-12">
						<a data-id="{{ $cv->one->username }}" onclick="return message(this);" class="grey">
						<div class="media">
							<div class="media-left">
								@php
									$datetime = date("Y-m-d H:i:s"); 
										$ngon = abs(strtotime($datetime) - strtotime($cv->one->real_time));
								if ($ngon < 5){
									$green = "bdr-green";
									$style = "border-radius: 50%;";
								}else {
									$green = ""; 
									$style = ""; 
								} 
								@endphp
								@if ($cv->one->photo == null) 
									<div class="thumbnail margin-15 img-user img-user-small">
										<h2 style="color: #fff;">{{ mb_substr($cv->one->fname ,0,1)}}{{ mb_substr($cv->one->mdname ,0,1)}}{{ mb_substr($cv->one->lname ,0,1)}}</h2>
									</div> 
								@else 
									<img src="{{ asset('avatar/'.$cv->one->photo) }}" class="media-object {{ $green }}" style="width: 80px; height: 80px;{{ $style }}"> 
								@endif    
							</div>
							<div class="media-body">
								
									<h5 class="media-heading-1">{{ $cv->one->fname }} {{ $cv->one->lname }}</h5>
									{{-- <span>General Engineer | Shell </span><br /> --}}
									@if (count($cv->message) != 0)
										  	{{-- expr --}}
										<i>{{ $cv->message->msg }} </i>
									@endif   
							</div>
						</div>
						</a>
					</div> 
				</div>  
			@endif     
@endforeach 
@foreach ($conversation_recruit as $recruit) 
	<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;">
			<div class="row" >
				<div class="col-xs-12 col-sm-12 col-md-12">
					<a data-id="{{ $recruit->one->email }}" onclick="return messagerecruit(this);" class="grey">
					<div class="media">
						<div class="media-left"> 
							@if ($recruit->one->avatar == null)  
								 <img src="{{ asset('companies/avatars/'.$recruit->one->getModelCompany->avatar) }}" class="media-object" style="width: 80px; height: 80px; ">  
							@else 
								<img src="{{ asset('companies/avatars/'.$recruit->one->getModelCompany->avatar) }}" class="media-object " style="width: 80px; height: 80px; "> 
							@endif    
						</div>
						<div class="media-body"> 
								<h5 class="media-heading-1">{{ $recruit->one->firstname }} {{ $recruit->one->lastname }} - {{ $recruit->one->getModelCompany->name }}</h5>
								{{-- <span>General Engineer | Shell </span><br /> --}}
								@if (count($recruit->message) != 0)
									  	{{-- expr --}}
									<i>{{ $recruit->message->msg }} </i>
								@endif   
						</div>
					</div>
					</a>
				</div> 
			</div>  
@endforeach
@else
	<p>no messages</p>
@endif
<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
<div class="clearfix"></div>