<div class="col-md-3">  
	@if ($route == 'message_home')
		<div style="margin-top: 180px;" class="search-responsive">
		</div>
	@elseif ($route == 'search')
		<div style="margin-top: 180px;" class="search-responsive">
		</div>
	@else

	@endif 
	<div class="box margin-15-responsive">
		<span class="box-title"><b>Trending Right Now</b></span>
		<div class="box-body margin-15"> 
				@foreach ($trending as $trend)
					<a href="{{ route('post_detail',array('detail'=>$trend->id)) }}">
					<div class="trending-content">
						@if (count($trend->images_post) == 0)
							<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
						@else 
							<img src="{{ asset('post_image/'.$trend->images_post->image) }}" alt="">
						@endif
						<div class="trending-title bg-blue-dark">
						<label style="color:#fff;cursor: pointer;">{{ str_limit($trend->post,15)  }}</label>
						</div>
					</div> 
					</a>
				@endforeach
			
		</div>
		<div class="bg-blue-dark" style="height: 300px;padding: 5px 15px;">
			<h1 style="color: #fff;">ads</h1>
		</div>
	</div> 
</div>

 