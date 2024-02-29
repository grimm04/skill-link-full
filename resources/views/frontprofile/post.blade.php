@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>My Network | Skill Link </title>
@endsection 
@section('style') 	 
	<style>
	.more {
		    display: none;
		    padding-top: 10px;
		}
	.toolpen {
    position: relative;
    display: inline-block; 
	}
	.toolpen a{
		color :black !important;
	}

	.toolpen .toolpentext {
	    visibility: hidden;
	    width: 120px;
	    background-color: black;
	    color: #fff;
	    text-align: center;
	    border-radius: 6px;
	    padding: 5px 0;
 
	    position: absolute;
	    z-index: 1;
	}

	.toolpen:hover .toolpentext {
	    visibility: visible;
	}
	</style>
@endsection

@section('header')  
	@include('dashboard_layouts.headermenu')   
	<header class="header-responsive">
		<div class="container-fluid">
			<div class="back-responsive">
				<a onclick="goBack()"> 
					<img src="{{ asset('dashboard_assets/images/icon/left.png') }}" alt="">
				</a>
			</div>
			@include('dashboard_layouts.searchmobile')
			<ul>
				<nav>
					<a href="{{ route('search') }}" class="yellow" style="font-size: 30px;">
						<i class="fa fa-gear" style="margin-top: 5px;"></i>
					</a><br><br>
				</nav>
			</ul>
		</div>
	</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="wrapper" style="margin-bottom: 20px;">
				<div class="bg-cover">
					@if ($post->cover == null)
						<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
					@else 
						<img src="{{ asset('cover/'.$post->cover) }}" alt="">
					@endif   
					<form method="post" action="{{ route('profie_cover') }}" id="profile-cover" enctype="multipart/form-data">
						<div class="bg-cover-hover">
							{!! csrf_field() !!} 
							<input type="file" name="cover" id="cover">
						</div> 
					</form>
				</div>
				<div style="position: relative;">
					<div class="branch-img branch-profile">
						@if ($post->photo == null)
							<div class="img-user"  style="width: 180px !important; height: 180px !important">
								<h1 style="color: #fff; font-size: 60px !important;" class="media-object" >{{ mb_substr($post->fname ,0,1)}}{{ mb_substr($post->mdname ,0,1)}}{{ mb_substr($post->lname ,0,1)}}</h1>
							</div>  
						@else 
							<img src="{{ asset('avatar/'.$post->photo) }}" >
						@endif  
						<form method="post" action="{{ route('profie_avatar') }}" id="profile-avatar" enctype="multipart/form-data">
							<div class="branch-img-hover">
								{!! csrf_field() !!} 
								<input type="file" name="avatar" id="avatar">
							</div>
						</form>
						<div class="branch-check branch-img-status">
							<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
						</div><br>
						<div class="branch-title">
							<h3 style="color: #fff;"><b>{{ $post->fname }} {{ $post->lname }}</b></h3>
							{{-- <h3 style="color: #fff;">Head Recruiter</h3> --}}
							@if (count($post->province) != 0) 
							<h4 style="color: #fff;">{{ $post->province->name }}, {{ $post->province->country }}</h4>
							@endif
						</div>
					</div>
					<ul class="branch-menu-tabs block">
						<li>
							<a href="{{ route('profile_about') }}" class="btn bg-yellow">About</a>
						</li>
						<li>
							<a href="" class="btn btn-default">Post</a>
						</li>
					</ul>
				</div>
				<div class="box-body dashboard-info" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6" style="margin-bottom: 10px;">
							<div class="box">
								<a href="{{ route('profile_edit') }}"> 
								<div class="row">
									<div class="col-xs-9 col-sm-9 col-md-9">
										@if (count($post->status) != 0)
											<p class="blue-dark bold" style="font-size: 20px;">{{ $post->status->name }}</p>
										@endif
									</div>
									<div class="col-md-3">
										<i class="fa fa-gear yellow" style="font-size: 30px;margin-top: 5px;"></i>
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-md-6" style="margin-bottom: 10px;">
							<div class="box">
								<div class="row">
									<a href="{{ route('job_applied') }}">
									<div class="col-xs-9 col-sm-9 col-md-9">
										<p class="blue-dark bold" style="font-size: 20px;">Applied Job</p>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3">
										<h2>{{ count($post->job) }}</h2>
									</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6" style="margin-bottom: 10px;">
							<div class="box">
								<div class="row">
									<a href="{{ route('network') }}">
									<div class="col-xs-9 col-sm-9 col-md-9">
										<p class="blue-dark bold" style="font-size: 20px;">Your Network</p>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3">
										<h2>{{ $follow }}</h2>
									</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-6" style="margin-bottom: 10px;">
							<div class="box">
								<div class="row">
									<a href="{{ route('search') }}">
									<div class="col-xs-9 col-sm-9 col-md-9">
										<p class="blue-dark bold" style="font-size: 20px;">Search Appearances</p>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3">
										<h2>2</h2>
									</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				 <div class="infinite-scroll"> 
					@if (count($posts) == 0)
						<div class="box border-top-left-radius border-top-right-radius margin-15">
							 Do not have post, try to make it
						</div>
					@endif
					@foreach ($posts as $post)
						 	<div class="box border-top-left-radius border-top-right-radius margin-15">
					 			@if (count($post->likes) != 0)  
							 		@foreach ($post->likes as $like)
							 			@if (count($post->likes) == 1 ) 
							 				@if ($like->user->id == Auth::user()->id) 
										      <b><i>You like this</i> </b> 
										      <hr style="margin: 0px;margin-bottom: 20px;"> 
										    @endif 
										    @if ($like->user->id != Auth::user()->id)
										    	 <b>{{ $like->user->fname }} {{ $like->user->lname }}</b>  
										 		 	 <i>and 
										 		 	 <div class="toolpen"><a> Others</a> </i>
													  	<span class="toolpentext">
													  	@foreach ($post->likes as $other)
														    @if ($other->user->id == $like->user->id)
														        @continue
														    @endif 
														    @if ($other->user->id != $like->user->id)
														       {{ $other->user->fname }} {{ $other->user->lname }}</br> 
														    @endif
														@endforeach</span> 
													 </div>
										 		 Like this 
												<hr style="margin: 0px;margin-bottom: 20px;"> 
										        @break
										    @endif
							 			@else
										    @if ($like->user->id == Auth::user()->id) 
										        @continue
										    @endif 
										    @if ($like->user->id != Auth::user()->id)
										    	 <b>{{ $like->user->fname }} {{ $like->user->lname }}</b> 
											     @if (count($post->likes) > 1 )
										 		 	 <i>and 
										 		 	 <div class="toolpen"><a> Others</a> </i>
													  	<span class="toolpentext">
													  	@foreach ($post->likes as $other)
														    @if ($other->user->id == $like->user->id)
														        @continue
														    @endif 
														    @if ($other->user->id != $like->user->id)
														       {{ $other->user->fname }} {{ $other->user->lname }}</br> 
														    @endif
														@endforeach</span> 
													 </div>
										 		 @endif  Like this 
												<hr style="margin: 0px;margin-bottom: 20px;"> 
										        @break
										    @endif
										@endif
									@endforeach 
							 		@endif
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8">
										<div class="media">
											<div class="media-left">
												@if (count($post->user->photo) == 0)
													<div class="img-user">
													<h1 style="color: #fff;" class="media-object" style="width: 80px; height: 80px">{{ mb_substr($post->user->fname ,0,1)}}{{ mb_substr($post->user->mdname ,0,1)}}{{ mb_substr($post->user->lname ,0,1)}}</h1>
													</div>  
												@else 
													<img src="{{ asset('avatar/'.$post->user->photo) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
												@endif     
											</div>
											<div class="media-body">
												<a href="#" class="grey">
													<h5 class="media-heading">{!! $post->user->fname !!} {!! $post->user->lname !!}</h5>
													{{-- Fort Hills job #123 <br /> --}}
													{{ $post->created_at->diffForHumans() }}
												</a>
											</div> 
										</div> 
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4">
										<div class="setting-more">
											<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<ul class="dropdown-menu right">
												@if (Auth::user()->id !=  $post->id_user )  
													<a  class="btn blue-dark" data-id="{!! $post->id !!}"  onclick="hide(this)">Hide this post</a><br>
													@if (in_array($post->id_user, $followid))
														 <a  class="btn blue-dark" data-id="{!! $post->user->id !!}" onclick="unfollow(this)">Unfollow {!! $post->user->fname !!} {!! $post->user->lname !!}</a><br>
													@else 
														<a  class="btn blue-dark" data-id="{!! $post->user->id !!}" onclick="follow(this)">Follow {!! $post->user->fname !!} {!! $post->user->lname !!}</a><br>
													@endif 
													<a  class="btn blue-dark" data-id="{!! $post->id !!}"  onclick="report(this)">Report this post</a><br>
												@else
													<a  class="btn blue-dark">Improve my feed</a><br>
													<a  class="btn blue-dark"  data-id="{!! $post->id !!}" onclick="deletepost(this)">Delete my feed</a><br>
												@endif
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div><br>
								@if ($post->title !=null) 
									<h4>$post->title</h4><br>
								@endif
								@if (count($post->images_post) != null)
									<div style="position: relative;">
										<img src="{{ asset('post_image/'.$post->images_post->image) }}" alt=""  data-toggle="modal" data-target="#imagePost{!! $post->images_post->id !!}">
									</div>
									<div class="modal fade" id="imagePost{!! $post->images_post->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-body">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									        <br>
											<div style="position: relative;">
												<img src="{{ asset('post_image/'.$post->images_post->image) }}" alt=""  data-toggle="modal" data-target="#exampleModal">
											</div>


									      </div> 
									    </div>
									  </div>
									</div>
								@endif
								@if (count($post->video))
									<div style="position: relative;">
										<video width="100%" height="320" controls>
										  <source src="{{ asset('post_video/'.$post->video->video) }}" type="video/mp4">
										</video>  
									</div> 
								@endif
								<br>
								<p>{!! $post->post !!}</p>
								@php
									$comment = count($post->comments);
									$like = count($post->likes);
								@endphp
								<div style="border-top: .7px #1F3E5A solid;border-bottom: .7px #1F3E5A solid;padding: 5px;">
									<span class="blue-dark bold display-like-{{$post->id}}" data-id="{{$like}}" style="padding: 0px 5px;">{{ $like }}</span><span class="blue-dark bold">Likes</span>
									<span class="blue-dark bold " style="padding: 0px 5px;"><a href="#" id="commment-{!! $post->id !!}-show" style="display: inline;" class="showLink blue-dark bold" onclick="showHide('commment-{!! $post->id !!}');return false;">{{ $comment }} Comments</a></span>
								</div> 
								<div class="like-coment-share">
									<form method="post"> 
									{!! csrf_field() !!} 
									<ul>
										<li>  
											<img src="{{ asset('dashboard_assets/images/icon/like-grey.png') }}" alt=""> 
											  <input type="checkbox" class="like-{{$post->id}}" data-id="{{$post->id}}" onclick="like(this)" >
											  <div class="like-active @foreach ($post->likes as $like) @if ($like->id_post == $post->id && $like->id_user == Auth::user()->id) like-active-top @endif @endforeach">
											  	<img src="{{ asset('dashboard_assets/images/icon/like-active.png') }}" alt="">
											  </div> 
										    <h5>Like</h5> 
										</li>
										<li>
											<img src="{{ asset('dashboard_assets/images/icon/comment.png') }}" alt="">
											<h5>Coment</h5>
										</li>
										<li>
											<a data-toggle="modal" href='#modal-id-{{ $post->id }}'>
												<img src="{{ asset('dashboard_assets/images/icon/share-grey.png') }}" alt="">
												<h5>Share</h5>
											</a>
										</li>
									</ul>
									</form>
								</div>
								<div class="clearfix"></div>
								@if ($post->comments !=null)
								<div  class="more" id="commment-{!! $post->id !!}">
									@foreach ($post->comments as $com)
									<div class="col-md-12 bg-grey margin-15-responsive comment-text" style="padding: 10px;">
									 	<div class="media">
											<div class="media-left">
												@if ($com->users->photo == null)
													<div class="thumbnail margin-15 img-user img-user-small">
														<h2 style="color: #fff;" class="media-object" style="width: 50px; height: 50px">{{ mb_substr($com->users->fname ,0,1)}}{{ mb_substr($com->users->mdname ,0,1)}}{{ mb_substr($com->users->lname ,0,1)}}</h2>
													</div>  
												@else 
													<img src="{{ asset('avatar/'.$com->users->photo) }}" alt="" class="media-object" style="width: 50px; height: 50px">
												@endif  
											</div>
											<div class="media-body">
												<a href="#" class="grey">
													<h5 class="media-heading">{{ $com->users->fname }}</h5> 
													{{ $com->comment }} <br>
													{{ $com->created_at->diffForHumans() }}
												</a>
											</div>
										</div> 
									</div>
									@endforeach
									<div style="text-align: center;">
										<p><a href="#" id="commment-{!! $post->id !!}-show" class="hideLink blue-dark bold" 
									onclick="showHide('commment-{!! $post->id !!}');return false;">Hide Comment</a></p>
									</div>
								@endif
								</div> 
								<div class="clearfix"></div>
								<div class="chat-form margin-15 clearfix">
									<div class="chat-img"> 
										@if (Auth::user()->photo == null)
											<div class="thumbnail margin-15 img-user img-user-small" style="width: 40px !important; height: 40px !important;">
												<h5 style="color: #fff;" >{{ mb_substr(Auth::user()->fname ,0,1)}}{{ mb_substr(Auth::user()->mdname ,0,1)}}{{ mb_substr(Auth::user()->lname ,0,1)}}</h5>
											</div> 
										@else 
											<img src="{{ asset('avatar/'.Auth::user()->photo) }}" >
										@endif      
									</div>
									<form action="" method="POST" id="form-comment-{!! $post->id !!}"> 
										{!! csrf_field() !!} 
										<div class="input-group">
									      	<input type="text" name="comment" id="comment_add" class="form-control comment-{!! $post->id !!}" placeholder="Comment">
										 	<input type="hidden" name="id_post" id="id_post" value="{!! $post->id !!}">
									      	<span class="input-group-btn">
									        	<button class="btn bg-blue-dark add" type="button" style="color: #fff;" data-id="{{$post->id}}" onclick="Comments(this)">Comment</button>
									      	</span>
								   		</div>
								    </form>
								</div>
							</div>
							<div class="modal fade sosmed" id="modal-id-{{ $post->id }}">
							<div class="modal-dialog">
								<div class="modal-content bg-blue-dark">
									<div class="modal-header" style="border-bottom: 0px;padding: 5px 10px;">
										<button type="button" class="close" style="color: #fff;opacity: 1;" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body" style="padding: 5px 10px;">
										<ul>
											<li><a href="https://www.facebook.com/dialog/share?app_id=226272481260211&href={{ route('post_detail',array('detail'=>$post->id)) }}" target="_blank" style="color: #fff;"><i class="fa fa-facebook"></i> Facebook</a></li>
											<li><a href="https://twitter.com/intent/tweet?url={{ route('post_detail',array('detail'=>$post->id)) }}&text={{ str_limit($post->post, 10) }}&via=skill_link_inc&related=skill_link_inc" style="color: #fff;" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
										</ul>
									</div>
								</div>
							</div>
					    </div>
					@endforeach
					{{ $posts->links() }} 
				</div>
			</div>
		</div>
	</div>
@endsection
 
@section('script')
<script type="text/javascript">
	$('#cover').change(function() {
		$('#profile-cover').submit();
	});
	$('#avatar').change(function() {
		$('#profile-avatar').submit();
	}); 
</script>
@endsection
@section('style')
	<style>
		.more {
		    display: none;
		    padding-top: 10px;
		}
	</style>
@endsection 