@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Profile | Skill Link </title>
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
				<h4 class="yellow" style="margin:15px 15px;">Endorsement</h4>
			</div> 
		</div>
</header> 
@endsection 
@section('content')    
	<div class="row">
		<div class="col-md-9">
			<div class="wrapper" style="margin-bottom: 20px;">
				<div class="row">
					<div class="col-md-12">
						<p style="color: #fff;">Manage how you receive and give endorsement</p>
						<div class="box border-all-radius" style="margin-bottom: 15px;">
							<form method="post" id="form-edit-endors" >
							{!! csrf_field() !!}
							<div class="row">
								@foreach ($endorsement  as $endors => $value)
								<div class="col-md-4">
									<div class="margin-15-responsive">
										<label class="input-checkbox">
						                  <p>{{ $value->name }}</p>
						                  <input type="checkbox" id="endorsementid-{{ $value->id }}" name="endorsementid" value="{{ $value->id }}" onclick="endorst(this)"@if(in_array($value->id, $endorsmentid)) checked="" @endif>
						                  <span class="checkmark border-all-radius"></span>
						                </label>
									</div>
								</div> 
								@endforeach
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 
@section('script')  
	<script type="text/javascript">
		function endorst(i) { 
			 var id = $(i).val(); 
			 if($('#endorsementid-'+id).is(':checked')){ 
		            $.ajax({
		                type: 'POST',
		                url: "{{ route('profile_editendorsement') }}",
		                data: {
		                    '_token': $('[name="csrf_token"]').attr('content'),
		                    'id': id,
		                    'status': '1'
		                },
		                success: function(data) { 
		                    if ((data.errors)) {
			                        setTimeout(function () { 
			                            toastr.error('Validation error!', {timeOut: 1000});
			                        }, 500);  
			                } else {
			                	toastr.success('Experience Updated', {timeOut: 5000});  
			                }
		                },
		            });
			 }else {
	 			id = $(i).data('id'); 
	            $.ajax({
	                type: 'POST',
	                url: "{{ route('profile_editendorsement') }}",
	                data: {
	                    '_token': $('[name="csrf_token"]').attr('content'),
	                    'id': id,
	                    'status': '0'
	                },
	                success: function(data) { 
	                    if ((data.errors)) {
		                        setTimeout(function () { 
		                            toastr.error('Validation error!', {timeOut: 1000});
		                        }, 500);  
		                } else {
		                	toastr.success('Endorsement Updated', {timeOut: 5000});  
		                }
	                },
	            });
			 }
			
		} 
	</script>
@endsection
