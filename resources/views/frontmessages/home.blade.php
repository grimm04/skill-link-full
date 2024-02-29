@extends('dashboard_layouts.appmessage')
@section('title') 	
	<title>Messages  | Skill Link </title>
@endsection   
	
@section('content') 
	<div class="col-md-4">
		<div class="box-1" id="online">
		
		</div>
		<br>
		<div class="box-1" id="list_message">
			
		</div>
		<br>
		<div class="box-1" >
			<p><b><i>Groups</i></b></p>
			@foreach ($groups as $gr) 
			<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
				<a data-id="{{ $gr->groups->ref_number }}" onclick="return messagegroup(this);">
					<div class="media">
						<div class="media-left">
							@if ($gr->group_image == null)
							<div class="thumbnail margin-15 img-user img-user-small" style="border-radius: 0% !important;background-color: #1F3E5A;">
								<h2 style="color: #fff;">{{ mb_substr($gr->groups->group_name ,0,1)}}</h2>
							</div>  
								 
							@else 
								<img src="{{ asset('group_image/'.$gr->groups->group_name) }}" alt="bell" class="media-object"  style="width: 80px; height: 80px;border-radius: 5%;">
							@endif     
						</div>
						<div class="media-body"> 
								<h5 class="media-heading-1">{{ $gr->groups->group_name }}</h5>
{{-- 								<span>General Engineer | Shell </span><br />
								<i>2 Minute Ago</i> --}} 
						</div>
					</div>
				</a>
				</div>
			</div> 
			@endforeach
			<hr style="margin: 0px;margin-bottom: 10px;border-top: 2px solid #959696;margin-top:5px;">
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="box-1 margin-15-responsive" id="message">
			<p>no messages</p>
		</div>
	</div> 
		@include('dashboard_layouts.right')
@endsection 
@section('script')  
<script type="text/javascript">
	$(document).ready(function(){
		  var intercal = setInterval(function()
		  {
		    $.ajax({
		      url: '{{ route('list_online') }}',
		      success: function(data){
		        $('#online').html(data);
		      }
		    }); 
		  },2000); 
		  
		});
	$(document).ready(function(){ 
	 	var intercal = setInterval(function()
		  {
		    $.ajax({
		      url: '{{ route('list_messages') }}',
		      success: function(data){
		        $('#list_message').html(data);
		      }
		    }); 
		  },4000); 
		}); 

	function message(i){
	 username = $(i).data('id');    
	 var url = '{{ route("getmessage", ":id") }}';
	     url = url.replace(':id',username);
	 // var intercal = setInterval(function()
		  // {
		    $.ajax({
		      url: url,
		      success: function(data){
		        $('#message').html(data);
		      }
		    });

		// },1000); 
	}  
	function messagegroup(i){
	 ref = $(i).data('id');   

	 var url = '{{ route("getmessagegroup", ":id") }}';
	     url = url.replace(':id',ref);
	 // var intercal = setInterval(function()
		  // {
		    $.ajax({
		      url: url,
		      success: function(data){
		        $('#message').html(data);
		      }
		    });

		// },1000); 
	}  

	function messagerecruit(i){
	 username = $(i).data('id');    
	 var url = '{{ route("getmessagerecruit", ":id") }}';
	     url = url.replace(':id',username);
	 // var intercal = setInterval(function() 
		  // {
		    $.ajax({
		      url: url,
		      success: function(data){
		        $('#message').html(data);
		      }
		    });

		// },1000); 
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

    function chatgroup(i){
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

     function chatrecruit(i){
		form = $('#message-form').serialize(); 
            // console.log(form);return false;
        $('#save').prop('disabled',true); 
        $.ajax({
            type: 'POST', 
            url: "{{ route('message_recruit_save') }}",
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
                	}else {
                		location.reload(); 
                	} 
                }
            	
            }
        });
    }  
		  
</script>
@endsection