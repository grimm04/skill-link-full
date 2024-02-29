@extends('front_jobs.app_one_wrapper_menu')
@section('title') 	
	<title>Messages  | Skill Link </title>
@endsection   
@section('content')
		<div class="row">
			<div class="col-md-9">
				<div style="text-align: center;">
					<a href="{{ route('message_home') }}" class="btn btn-warning">Message</a>
					<a href="" class="btn btn-default">Active</a>
					<a href="{{ route('message_group') }}" class="btn btn-warning">Groups</a>
				</div>
				<div class="margin-15">
					<div class="box-body" id="list-message">
						
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
		      url: '{{ route('list_online') }}',
		      success: function(data){
		        $('#list-message').html(data);
		      }
		    }); 
		  },1000);

		  
		});
</script>
@endsection
