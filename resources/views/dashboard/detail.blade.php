@extends('front_jobs.app_one_wrapper_menu')
@section('title') 	
	{!! $og->renderTags() !!}
	<title>Dashboard - Skill Link </title> 
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
@section('content') 
<div class="row">
	<div class="col-md-9 ">
		<div class="infinite-scroll"> 
		@if (count($detail) == 0)
			<div class="box border-top-left-radius border-top-right-radius margin-15">
				 
			</div>
		@endif 
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
									@if ($detail->id_user == Auth::user()->id)
										<a href="{{ route('profile_about') }}" class="grey">
										@if (count($detail->user->photo) == 0)
											<img src="{{ asset('avatar/default.png') }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
										@else 
											<img src="{{ asset('avatar/'.$detail->user->photo) }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
										@endif  
										</a>
									@else
										<a href="{{ route('networkprofile',$detail->user->username) }}" class="grey">
										@if (count($detail->user->photo) == 0)
											<img src="{{ asset('avatar/default.png') }}" alt="" class="media-object" style="width: 80px; height: 80px;border-radius: 50%;">
										@else 
											<img src="{{ asset('avatar/'.$detail->user->photo) }}" alt="" class="media-object" style="width: 80px; height: 80px">
										@endif 
										</a> 
									@endif  
								</div>
								<div class="media-body">
									@if ($detail->id_user == Auth::user()->id)
										<a href="{{ route('profile_about') }}" class="grey">
											{!! $detail->user->fname !!} {!! $detail->user->lname !!}
										</a>
										@else
										<a href="{{ route('networkprofile',$detail->user->username) }}" class="grey">
											{!! $detail->user->fname !!} {!! $detail->user->lname !!}
										</a>
									@endif
									@if ($detail->groupid != null)
										<div class="fa fa-caret-right"></div> 
										<a href="{{ route('group',$detail->group->ref_number) }}" class="grey">
											{!! $detail->group->group_name !!}
										</a>
									@endif
									</h5>
									@if (count($detail->user->province) != 0)
										<h6>{{ $detail->user->province->name }}, {{ $detail->user->province->country }}</h6>
									@endif
									{{-- Fort Hills job #123 <br /> --}}
									{{ $detail->created_at->diffForHumans() }}
								</div>
							</div> 
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="setting-more">
								<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
									<i class="fa fa-ellipsis-h"></i>
								</a>
								<ul class="dropdown-menu right">
									@if (Auth::user()->id !=  $detail->id_user )  
										<a  class="btn blue-dark" data-id="{!! $detail->id !!}"  onclick="hide(this)">Hide this post</a><br>
										@if (in_array($detail->id_user, $followid))
											 <a  class="btn blue-dark" data-id="{!! $detail->user->id !!}" onclick="unfollow(this)">Unfollow {!! $detail->user->fname !!} {!! $detail->user->lname !!}</a><br>
										@else 
											<a  class="btn blue-dark" data-id="{!! $detail->user->id !!}" onclick="follow(this)">Follow {!! $detail->user->fname !!} {!! $detail->user->lname !!}</a><br>
										@endif 
										<a  class="btn blue-dark" data-id="{!! $detail->id !!}"  onclick="report(this)">Report this post</a><br>
									@else
										<a  class="btn blue-dark">Improve my feed</a><br>
										<a  class="btn blue-dark" id="detail" data-id="{!! $detail->id !!}" onclick="deletepost(this)">Delete my feed</a><br>
									@endif
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div><br>
					@if ($detail->title !=null) 
						<h4>{!! $detail->title!!}</h4><br>
					@endif 
					@if (count($detail->images_post) != null)
						<div style="position: relative;">
							<img src="{{ asset('post_image/'.$detail->images_post->image) }}" alt=""  data-toggle="modal" data-target="#imagePost{!! $detail->images_post->id !!}">
						</div>
						<div class="modal fade" id="imagePost{!! $detail->images_post->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-body">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <br>
								<div style="position: relative;">
									<img src="{{ asset('post_image/'.$detail->images_post->image) }}" alt=""  data-toggle="modal" data-target="#exampleModal">
								</div>


						      </div>
						    </div>
						  </div>
						</div>
					@endif
					@if (count($detail->video))
						<div style="position: relative;">
							<video width="100%" height="320" controls>
							  <source src="{{ asset('post_video/'.$detail->video->video) }}" type="video/mp4">
							</video>  
						</div> 
					@endif
					<br>
					<p>{!! $detail->post !!}</p>
					@php
						$comment = count($detail->comments);
						$like = count($detail->likes);
					@endphp
					<div style="border-top: .7px #1F3E5A solid;border-bottom: .7px #1F3E5A solid;padding: 5px;">
						<span class="blue-dark bold display-like-{{$detail->id}}" data-id="{{$like}}" style="padding: 0px 5px;">{{ $like }}</span><span class="blue-dark bold">Likes</span>
						<span class="blue-dark bold " style="padding: 0px 5px;" ><a href="#" id="commment-{!! $detail->id !!}-show" style="display: inline;" class="showLink blue-dark bold" onclick="showHide('commment-{!! $detail->id !!}');return false;">{{ $comment }} Comments</a></span>
					</div> 
					<div class="like-coment-share">
						<form method="post"> 
						{!! csrf_field() !!} 
						<ul>
							<li> 
								{{-- @if ($detail->likes->status  == 1) unlike-{{$detail->id}} @else like-{{$detail->id}} @endif --}}
								<img src="{{ asset('dashboard_assets/images/icon/like-grey.png') }}" alt=""> 
								<input type="hidden" name="groupid" value="">
								  <input type="checkbox" class="like-{{$detail->id}}" data-id="{{$detail->id}}" onclick="like(this)" >
								  <div class="like-active @foreach ($detail->likes as $like) @if ($like->id_post == $detail->id && $like->id_user == Auth::user()->id) like-active-top @endif @endforeach">
								  	<img src="{{ asset('dashboard_assets/images/icon/like-active.png') }}" alt="">
								  </div> 
							  <h5>Like</h5> 
							</li>
							<li>
								<img src="{{ asset('dashboard_assets/images/icon/comment.png') }}" alt="">
								<h5>Coment</h5>
							</li>
							<li>
								<a data-toggle="modal" href='#modal-id-{{ $detail->id }}'>
									<img src="{{ asset('dashboard_assets/images/icon/share-grey.png') }}" alt="">
									<h5>Share</h5>
								</a>
							</li>
						</ul>
						</form>
					</div>
					<div class="clearfix"></div>
					@if ($detail->comments !=null)
					<div id="commment-{!! $detail->id !!}"  class="more">
						@foreach ($detail->comments as $com => $comment) 
						<div class="col-md-12 bg-grey margin-15-responsive comment-text" style="padding: 10px;">
						 	<div class="media">
								<div class="media-left">
									<img src="{{ asset('avatar/'.$comment->users->photo) }}" alt="bell" class="media-object" style="width: 80px; height: 80px">
								</div>
								<div class="media-body">
									<a href="#" class="grey">
										<h5 class="media-heading">{{ $comment->users->fname }}</h5> 
										{{ $comment->comment }} <br>
										{{ $comment->created_at->diffForHumans() }}
									</a>
								</div>
							</div> 
						</div> 
						@endforeach
						<div style="text-align: center;">
							<p><a href="#" id="commment-{!! $detail->id !!}-show" class="hideLink blue-dark bold" 
						onclick="showHide('commment-{!! $detail->id !!}');return false;">Hide Comment</a></p>
						</div>
					</div> 
					@endif
					<div class="clearfix"></div>
					<div class="chat-form margin-15 clearfix">
						<div class="chat-img">
							<img src="{{ asset('avatar/'.Auth::user()->photo) }}" alt="women">
						</div>
						<form action="" method="POST" id="form-comment-{!! $detail->id !!}"> 
							{!! csrf_field() !!} 
							<div class="input-group">
						      	<input type="text" name="comment" id="comment_add-{{$detail->id}}" class="form-control comment-{!! $detail->id !!}" placeholder="Comments...">
							 	<input type="hidden" name="id_post" id="id_post" value="{!! $detail->id !!}">
							 	<input type="hidden" name="ref_number" value=""> 
						      	<span class="input-group-btn">
						        	<button class="btn bg-blue-dark add" type="button" style="color: #fff;" data-id="{{$detail->id}}" onclick="Comments(this)" id="comments">Comment</button>
						      	</span>
					   		</div>
					    </form>
					</div>  
				</div>
				<div class="modal fade sosmed" id="modal-id-{{ $detail->id }}">
					<div class="modal-dialog">
						<div class="modal-content bg-blue-dark">
							<div class="modal-header" style="border-bottom: 0px;padding: 5px 10px;">
								<button type="button" class="close" style="color: #fff;opacity: 1;" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body" style="padding: 5px 10px;">
								<ul>
									<li><a href="https://www.facebook.com/dialog/share?app_id=226272481260211&href={{ route('post_detail',array('detail'=>$detail->id)) }}" target="_blank" style="color: #fff;"><i class="fa fa-facebook"></i> Facebook</a></li>
									<li><a href="https://twitter.com/intent/tweet?url={{ route('post_detail',array('detail'=>$detail->id)) }}&text={{ str_limit($detail->post, 10) }}&via=skill_link_inc&related=skill_link_inc" style="color: #fff;" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>  
		</div>
	</div>
</div>
@endsection 
@section('script')
	{!!Html::script('js/crud.js')!!}  
@endsection 
@section('style')
	<style>
		.more {
		    display: none;
		    padding-top: 10px;
		}
	</style>
@endsection 