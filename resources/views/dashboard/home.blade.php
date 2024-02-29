@extends('dashboard_layouts.app')
@section('title') 	
	<meta property="og:title" content="Skill Link" />
	<meta property="og:type" content="web" />
	<meta property="og:image" content="{{ asset('dashboard_assets/images/favicon.png') }}" />
	<meta property="og:description" content="Coming Soon" />
	<meta property="og:url" content="http://skill-link.net/" />
	<title>Dashboard - Skill Link </title> 
@endsection
 
@section('content') 
	<div class="col-md-9 ">
		<div class="infinite-scroll"> 
		@if (count($posts) == 0)
			<div class="box border-top-left-radius border-top-right-radius margin-15">
				 
			</div>
		@endif
		@foreach ($posts as $post)
			 	<div class="box border-top-left-radius border-top-right-radius margin-15">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8">
							<div class="media">
								<div class="media-left">
									@if ($post->id_user == Auth::user()->id)
										<a href="{{ route('profile_about') }}" class="grey">
										@if (count($post->user->photo) == 0)
											<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
											<h2 style="color: #fff;" class="media-object">{{ mb_substr($post->user->fname ,0,1)}}{{ mb_substr($post->user->mdname ,0,1)}}{{ mb_substr($post->user->lname ,0,1)}}</h2>
											</div>  
										@else 
											<img src="{{ asset('avatar/'.$post->user->photo) }}" alt="" class="media-object" style="width: 80px; height: 80px">
										@endif  
										</a>
									@else
										<a href="{{ route('networkprofile',$post->user->username) }}" class="grey">
										@if (count($post->user->photo) == 0)
											<div class="thumbnail img-user img-user-small" style="width: 80px !important; height: 80px !important; border: none;">
											<h2 style="color: #fff;" class="media-object">{{ mb_substr($post->user->fname ,0,1)}}{{ mb_substr($post->user->mdname ,0,1)}}{{ mb_substr($post->user->lname ,0,1)}}</h2>
											</div>  
										@else 
											<img src="{{ asset('avatar/'.$post->user->photo) }}" alt="" class="media-object" style="width: 80px; height: 80px">
										@endif 
										</a> 
									@endif   
									
								</div>
								<div class="media-body">
									<div class="grey">
										<h5 class="media-heading">
										@if ($post->id_user == Auth::user()->id)
											<a href="{{ route('profile_about') }}" class="grey">
												{!! $post->user->fname !!} {!! $post->user->lname !!}
											</a>
											@else
											<a href="{{ route('networkprofile',$post->user->username) }}" class="grey">
												{!! $post->user->fname !!} {!! $post->user->lname !!}
											</a>
										@endif
										@if ($post->groupid != null)
											<div class="fa fa-caret-right"></div> 
											<a href="{{ route('group',$post->group->ref_number) }}" class="grey">
												{!! $post->group->group_name !!}
											</a>
										@endif
										</h5>
										@if (count($post->user->province) != 0)
											<h6>{{ $post->user->province->name }}, {{ $post->user->province->country }}</h6>
										@endif
										{{-- Fort Hills job #123 <br /> --}}
										{{ $post->created_at->diffForHumans() }}
									</div>
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
						<h4>{!! $post->title!!}</h4><br>
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
							<a href="{{ route('post_detail',$post->id) }}" class="btn bg-blue-dark" style="color: #fff;">See Detail</a>
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
								  <input type="checkbox" class="like-{{$post->id}} " data-id="{{$post->id}}" onclick="like(this)" >
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
					<div class="more" id="commment-{!! $post->id !!}">
						@foreach ($post->comments as $com => $comment) 
						<div class="col-md-12 bg-grey margin-15-responsive comment-text" style="padding: 10px;">
						 	<div class="media">
								<div class="media-left">
									@if ($comment->users->photo == null)
										<div class="thumbnail margin-15 img-user img-user-small" style="border: none;">
											<h2 style="color: #fff;" class="media-object" style="width: 50px; height: 50px">{{ mb_substr($comment->users->fname ,0,1)}}{{ mb_substr($comment->users->mdname ,0,1)}}{{ mb_substr($comment->users->lname ,0,1)}}</h2>
										</div>  
									@else 
										<img src="{{ asset('avatar/'.$comment->users->photo) }}" alt="" class="media-object" style="width: 50px; height: 50px">
									@endif     
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
							<p><a href="#" id="commment-{!! $post->id !!}-show" class="hideLink blue-dark bold" 
						onclick="showHide('commment-{!! $post->id !!}');return false;">Hide Comment</a></p>
						</div>
					@endif
					</div> 
					<div class="clearfix"></div>
						<br>
					<div class="chat-form margin-15 clearfix">
						<div class="chat-img">
							@if (Auth::user()->photo == null)
								<div class="thumbnail margin-15 img-user img-user-small" style="width: 40px !important; height: 40px !important; border: none;">
									<h5 style="color: #fff;" >{{ mb_substr(Auth::user()->fname ,0,1)}}{{ mb_substr(Auth::user()->mdname ,0,1)}}{{ mb_substr(Auth::user()->lname ,0,1)}}</h5>
								</div> 
							@else 
								<img src="{{ asset('avatar/'.Auth::user()->photo) }}" >
							@endif     
						</div> 
						<form action="" method="POST" id="form-comment-{!! $post->id !!}"> 
							{!! csrf_field() !!} 
							<div class="input-group">
						      	<input type="text" name="comment" id="comment_add-{{$post->id}}" class="form-control comment-{!! $post->id !!}" placeholder="Comments...">
							 	<input type="hidden" name="id_post" id="id_post" value="{!! $post->id !!}"> 
						      	<span class="input-group-btn">
						        	<button class="btn bg-blue-dark add" type="button" style="color: #fff;" data-id="{{$post->id}}" onclick="Comments(this)" id="comments-{!! $post->id !!}">Comment</button>
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
@endsection
@section('style')
	<style>
		.more {
		    display: none;
		    padding-top: 10px;
		}
	</style>  
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