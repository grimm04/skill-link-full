@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>{{ $groups->group_name }} | Skill Link </title>
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
			<div class="navbar-sl">
				<form action="">
					<div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default"><img src="{{ asset('dashboard_assets/images/icon/search.png') }}" alt=""></button>
						</span>
						<input type="text" class="form-control" placeholder="Advance Search">
					</div>
				</form>
			</div>
			<ul class="nav">
				<li>
					<div class="setting-more" style="margin-top: -18px;">
						<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
							<i class="fa fa-gear yellow" style="font-size: 30px;"></i>
						</a>
						<ul class="dropdown-menu right">
							<a href="" class="btn blue-dark">Turn Notification On</a><br>
							<a href="" class="btn blue-dark">Add to Group</a><br>
							<a href="" class="btn blue-dark">Exit Group</a><br>
						</ul>
					</div>
					<div class="clearfix"></div>
				</li>
			</ul><br><br>
			 
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="box border-all-radius">
			<div class="box-header with-border">
				<div class="media-left">
				    <a href="#">

				    	@if ($groups->group_image  == null)
							<div class="thumbnail margin-15 img-user img-user-small">
								<h2 style="color: #fff;">{{ mb_substr($groups->group_name ,0,1)}}</h2>
							</div> 
						@else  
							<img src="{{ asset('group_image/'.$groups->group_image) }}"  class="media-object" style="width: 60px; height: 60px;" >
						@endif     
				    </a>
				 </div>
				<div class="media-body">
					<span class="box-title">{{ $groups->group_name }}</span>
				</div>
			</div>
			<div class="box-body">
				<div class="row" style="margin-bottom: 10px;">
					@foreach ($member as $member)
						<div class="col-xs-2 col-sm-1 col-md-1">
							<a href="{{ route('networkprofile',$member->users->username) }}">
								@if ($member->users->photo == null)
									<img src="{{ asset('avatar/default.png') }}" class="media-object" alt="KBR" style="width: 40px; height: 40px;" >
								@else 
									<img src="{{ asset('avatar/'.$member->users->photo) }}" class="media-object" style="width: 40px; height: 40px;" >
								@endif 
						    </a>
						</div> 
					@endforeach 
					@php
						$total = $countmember - 4 ;
					@endphp
					@if ($total >= 1)
						<div class="col-xs-2 col-sm-1 col-md-1">
							<a href="#modal-id" data-toggle="modal">
						      <div class="media-object" style="width: 40px;background: #ddd;text-align: center;padding: 7px 0px;border-radius: 40px;">+{{$total}}</div>
						    </a>
						</div>
					@endif
					
				</div>
				<div class="chat-body">
					<div class="media">
					  <div class="media-left" id="messages"> 
					  
					</div>
				</div>
				<div class="chat-form margin-15 clearfix">
					<div class="chat-img">
						<input type="file">
						<i class="fa fa-picture-o"></i>
					</div>
					<form method="post" action="{{ route('message_save_photo') }}" id="message-form">
						{!! csrf_field() !!} 
						<div class="input-group">
					      <input type="hidden" class="form-control" name="groupid" value="{{$groups->id}}">
					      <input type="text" class="form-control" name="msg" placeholder="Chat Something" id="msg">
					      <span class="input-group-btn">
					        <button class="btn bg-yellow" type="submit" id="save">Post</button>
					      </span>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')  

<script type="text/javascript">
		$(document).ready(function(){
			var intercal = setInterval(function()
			  {
			    $.ajax({
			      url: '{{ route('getmessagegroup',$groups->ref_number) }}',
			      success: function(data){
			        $('#messages').html(data);
			      }
			    });

			},1000); 

			$('#file').change(function() {
				$('#message-form-photo').submit();
			}); 
		}); 
	</script>
	<script type="text/javascript">
		$('#message-form').on('submit',function(e){  
			e.preventDefault();     
            form = $('#message-form').serialize(); 
            // console.log(form);return false;
            $('#save').prop('disabled',true); 
            $.ajax({
                type: 'POST', 
                url: "{{ route('message_group_save') }}",
                data: form,
                success: function(data) {
                	if ((data.errors)) {
                        setTimeout(function () { 
                            toastr.error('Validation error!',{timeOut: 5000});
                        }, 500);  
                    }  
                    else { 
                    	$('#msg').val('');
                    	$('#save').prop('disabled',false); 
                    }
                	
                }
            });
   	 	}); 
	</script>
@endsection
