@extends('dashboard_layouts.app2')
@section('title') 	
	<title>{!! $group->group_name !!} - Skill Link </title>
@endsection
@section('top') 	
	@include('frontgroups.top')
@endsection
@section('right') 	
	@include('dashboard_layouts.right')
@endsection
@if ($cek_join == 1) 
	@include('frontgroups.group')
@else 
	@if ($group->type->id == 1)
		@section('content') 
			<div class="col-md-9">
				<div class="box border-all-radius margin-15">
					<div class="box-header with-border">
						<span class="box-title">Group Description</span>
					</div>
					<p>{!! $group->group_info !!}</p>
				</div>
			</div>
		@endsection
	@elseif($group->type->id == 2) 
		@include('frontgroups.group')
	@endif 
@endif 
@section('script')  
	<script type="text/javascript">
		$(document).ready(function(){ 
			$('#form-group').on('submit',function(e){  
				e.preventDefault();     
				// alert('asda');
	   //          return false;
	            $('#button-group-post').prop('disabled',true); 
	            $.ajax({
	                type: 'POST', 
	                url: "{{ route('group_post') }}",
	                data: {
	                    '_token': $('input[name=_token]').val(),
	                    'post': $("#post").val(),  
	                    'ref_number': $("#ref_number").val(),  
	                    'image': $("#image").val(),  
	                    'video': $('#video').val() 
	                },
	                success: function(data) {
	                	if ((data.errors)) {
	                        setTimeout(function () { 
	                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
	                        }, 500);  
	                        if (data.errors.post) {
	                            $('.errorGroup_post').removeClass('hidden');
	                            $('.errorGroup_post').text(data.errors.post);
	                        }

	                        $('#button-group-post').prop('disabled',false)
	                        // if (data.errors.group_type) {
	                        //     $('.errorGroup_type').removeClass('hidden');
	                        //     $('.errorGroup_type').text(data.errors.group_type);
	                        // }
	                        // if (data.errors.location) {
	                        //     $('.errorLocation').removeClass('hidden');
	                        //     $('.errorLocation').text(data.errors.location);
	                        // }
	                    }  
	                    else {
	                    	toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
	                    	$('#button-group-post').prop('disabled',false); 
	                		// console.log(data.id);
	                		window.location = ""+data.ref_n; 

	                    }
	                	
	                },
	            });
	        }); 
	    });  
	    function joingroup(i) {
			id = $(i).data('id');   
			var kelas = $(i).attr('id'); 
			if(kelas == 'public'){ 
				var type ='public';
			}else if(kelas == 'private') { 
				var type ='private';
			} 
			$.ajax({
                type: 'POST',
                url: "{{ route('join_group') }}",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': id,
                    'type': type
                },
                success: function(data) {  
                    if (data.errors == true) {
	                        setTimeout(function () { 
	                            toastr.error('You already sent Invitation!', {timeOut: 1000});
	                        }, 500);  
	                } else {
	                	if(data.type == 'public'){
	                		toastr.success('Join Group success', {timeOut: 5000}); 
	                		location.reload(); 
	                	}else {
	                		toastr.success('Request Join Group success', {timeOut: 5000}); 
	                	} 
                        
	                }
                },
            });  
		} 	    
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