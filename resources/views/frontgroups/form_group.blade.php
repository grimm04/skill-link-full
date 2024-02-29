<div class="row">
	<div class="col-md-5">
		<div class="box comment-field border-all-radius">
			<form method="post" action="{{ route('post_article_group') }}" enctype="multipart/form-data"> 
			{!! csrf_field() !!}
			<input type="hidden" name="ref_number" id="ref_number" value="{!!$group->ref_number !!}">
			<textarea name="post" rows="5" id="post" class="form-control" placeholder="Share an article, photo, or update"></textarea> 
			<div class="clearfix">
				<div class="pull-left">
					<div class="image-upload">
						<input class="btn btn-default" type="file" name="post_image">
						<button class="btn bg-yellow">
							<i class="fa fa-fw fa-image"></i> Images
						</button>
					</div>
				</div>
				<div class="pull-left">
					<div class="image-upload">
						<input class="btn btn-default" type="file" name="post_video">
						<button class="btn bg-yellow">
							<i class="fa fa-fw fa-film"></i> Video
						</button>
					</div>
				</div>
				<div class="pull-right">
					<button class="btn bg-blue-dark add" type="submit" style="padding: 6px 20px;margin-top: 8px;color: #fff;">Post</button>
				</div>
			</div>
			</form>
		</div>
		<p class="errorGroup_post text-center alert alert-danger hidden"></p>
	</div>
	<div class="col-md-4">
		<div class="box border-all-radius margin-15-responsive">
			<div class="box-header clearfix">
				<span class="bold grey pull-left">Group Member</span>
				<a href="{!! route('group_member', ['refnumber' => $group->ref_number]) !!}" class="btn btn-link pull-right yellow">View All</a>
			</div>
			<div class="box-body people-gallery">
				<div class="row">
					@foreach ($group->member as $memb)
						<div class="col-xs-4 col-sm-6 col-md-3">
							@if (count($memb->users->photo) == 0)
								<div class="thumbnail img-user img-user-small" style=" border: none;">
								<h2 style="color: #fff;" class="media-object">{{ mb_substr($memb->users->fname ,0,1)}}{{ mb_substr($memb->users->mdname ,0,1)}}{{ mb_substr($memb->users->lname ,0,1)}}</h2>
								</div>  
							@else 
							<div class="thumbnail margin-15 img-user img-user-small">
								<img src="{{ asset('avatar/'.$memb->users->photo) }}" alt="">
								{{-- <img src="{{ asset('dashboard_assets/images/2.jpg') }}" alt=""> --}}
							</div>
							@endif  
							<a href="#" class="btn btn-primary btn-user btn-sm bg-yellow"><i class="fa fa-user-plus"></i></a>
						</div>
					@endforeach 
				</div>
			</div>
		</div>
	</div>
</div>