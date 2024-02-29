<div class="main-wrapper">
	<div class="row">
		<div class="col-md-9 mid-content-dashboard">
			<div class="col-md-6 mid-content-dashboard-status">
				<div class="box comment-field border-all-radius">
					<form method="post" action="{{ route('post_article') }}"  enctype="multipart/form-data"> 
					{!! csrf_field() !!} 
						<textarea name="post" rows="5" id="post" class="form-control" placeholder="Share an article, photo, or update"></textarea>
						<div class="clearfix">
							<div class="pull-left">
								<div class="image-upload">
									<input class="btn btn-default" name="post_image" type="file" id="post_image">
									<button class="btn bg-yellow">
										<i class="fa fa-fw fa-image"></i> Images
									</button>
								</div> 
							</div>
							<div class="pull-left">
								<div class="image-upload">
									<input class="btn btn-default" name="post_video" type="file" id="post_video">
									<button class="btn bg-yellow">
										<i class="fa fa-fw fa-film"></i> Video
									</button>
								</div>
							</div>
							<div class="pull-right">
								<button class="btn bg-blue-dark" type="submit" id="post_button" style="padding: 6px 20px;margin-top: 8px;color: #fff;">Post</button>
							</div>
					</form>
					</div>
				</div>
			</div>
			<div class="col-md-6 mid-content-dashboard-collect">
				<div class="box border-all-radius margin-15-responsive mr10">
					<div class="box-header clearfix">
						<span class="bold grey pull-left">Connect with your collegues</span>
						<a href="{{ route('following') }}" class="btn btn-link pull-right yellow">View All</a>
					</div>
					<div class="box-body people-gallery mb20 collect-user-box"> 
						<div class="row">
							@foreach ($follow as $foll)
								@if ($foll->photo == null)
									<div class="col-xs-6 col-sm-6 col-md-3  collect-user">
										<div class="thumbnail margin-15 img-user img-user-small">
											<h2 style="color: #fff;">{{ mb_substr($foll->fname ,0,1)}}{{ mb_substr($foll->mdname ,0,1)}}{{ mb_substr($foll->lname ,0,1)}}</h2>
										</div>
										<a class="btn btn-primary btn-user btn-sm bg-yellow" id="follow" data-id="{!! $foll->id !!}" onclick="follow(this)"><i class="fa fa-user-plus"></i></a>
									</div>
								@else  
									<div class="col-xs-6 col-sm-6 col-md-3  collect-user">
										<div class="thumbnail margin-15 img-user img-user-small">
											<img src="{{ asset('avatar/'.$foll->photo) }}" alt="">
										</div>
										<a class="btn btn-primary btn-user btn-sm bg-yellow" id="follow" data-id="{!! $foll->id !!}" onclick="follow(this)"><i class="fa fa-user-plus"></i></a>	
									</div>
								@endif    
							@endforeach 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 