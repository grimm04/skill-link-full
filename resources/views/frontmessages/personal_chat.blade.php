@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>{{ $user->fname }} {{ $user->lname }} | Skill Link </title>
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
							<a href="" class="btn blue-dark">Create Group</a><br>
							<a href="" class="btn blue-dark">Block</a><br>
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
			<div class="box-1 margin-15-responsive" id="message">
			<p>no messages</p>
		</div>
		</div>
	</div>
@endsection 
@section('script')   
	<script type="text/javascript">
		$(document).ready(function(){ 
		    $.ajax({
		      url: '{{ route('getmessage',$username) }}',
		      success: function(data){
		        $('#message').html(data);
		      }
		    }); 
		});
		function chat(i){
			form = $('#message-form').serialize(); 
	            // console.log(form);return false;
	        $('#save').prop('disabled',true); 
	        $.ajax({
	            type: 'POST', 
	            url: "{{ route('message_save') }}",
	            data: form,
	            success: function(data) {
	            	if ((data.errors)) {
	                    setTimeout(function () { 
	                        toastr.error('Not Send!,Fill the Input!',{timeOut: 5000});
	                    }, 500);  
	                    $('#save').prop('disabled',false); 
	                }  
	                else { 
	                	if(data.status === 'lama') { 
	                		location.reload(); 
		                	$('#msg').val('');
		                	$('#save').prop('disabled',false); 
	                	}else {
	                		location.reload(); 
	                	} 
	                }
	            	
	            }
	        });
	    }

		function deletechat(i){ 
		 id = $(i).attr('data-id');
		 type = $(i).attr('id'); 
		 	console.log(type,id);  
	  		$.ajax({
		        type: 'POST',
		        url: "{{ route('message_delete') }}",
		        data: {
		            "_token": "{{ csrf_token() }}",
		            'type': type,
		            'id': id
		        },
		        success: function(data) { 
		            if(data.data == true){
		            	alert('Chat Deleted');
		            	 location.reload(); 
		            }
		        },
			 });
		}  


	</script> 

@endsection
