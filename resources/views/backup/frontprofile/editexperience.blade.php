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
				<h4 class="yellow" style="margin:15px 15px;">Experience</h4>
			</div>
			<ul>
				<nav>
					@if (count($edit->experience) != 0)
					<button class="btn bg-yellow" form="form-edit-ex" type="submit" id="save-edit" >Save</button>
					@else 
					<button class="btn bg-yellow" form="form-add-ex" type="submit" id="save-add" >Save</button>
					@endif
				</nav>
			</ul>
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			<div class="alert bg-orange" id="myAlert" style="padding: 10px 10px 5px 10px;">
			    <div class="row">
			    	<div class="col-xs-8 col-sm-9 col-md-11">
			    		<p style="margin-top: 5px;">Share Profile Change</p>
			    	</div>
			    	<div class="col-xs-4 col-sm-3 col-md-1">
			    		<label class="switch">
						 <input type="checkbox" name="status_share" id="status_share" class="switch-input" {{ $edit->status_share == '1' ? 'checked' : '' }}>
						  <span class="slider round"></span>
						</label>
			    	</div>
			    </div>
			</div>
			<div class="wrapper" style="margin-bottom: 20px;">
				<div class="row">
					@if (count($edit->experience) != 0)
						@foreach ($edit->experience as $n => $e)
							<form method="post" id="form-edit-ex">
								{!! csrf_field() !!}
							<div class="col-md-12">
								<div class="box border-all-radius" style="margin-bottom: 15px;">
									<div class="box-header with-border">
										<span class="box-title"><b>Experience {{ $n+1}}</b></span>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div style="margin-bottom: 10px;">
												<span>Company</span>
												<input type="text" value="{{ $e->company}}" name="company"  class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div style="margin-bottom: 10px;">
												<span>Title</span>
												<input type="text" value="{{ $e->title}}" name="title"  class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div style="margin-bottom: 10px;">
												<span>Location</span>
												<input type="hidden" value="{{ $e->locationid}}" name="locationid"  class="form-control">
												<input type="text" value="{{ $e->province->name}}, {{ $e->province->country}}" name="location" id="location"  class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div style="margin-bottom: 10px;">
												<span>State Date</span>
												<input type="text" value="{{ $e->start_date->format('M') }} {{ $e->start_date->format('d') }}, {{ $e->start_date->format('Y') }}" name="start_date" id="start_date"  class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div style="margin-bottom: 10px;">
												<span>Present</span>
												<input type="text" value="{{ $e->present}}" name="present"  class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div style="margin:30px 0px;">
												<label class="input-checkbox">
								                  <p>I currently work here</p>
								                  <input type="checkbox" name="work_status" {{ $e->work_status == '1' ? 'checked' : '' }} value="1">
								                  <span class="checkmark border-all-radius"></span>
								                </label>
											</div>
										</div>
										<div class="col-md-8">
											<div style="margin-bottom: 10px;">
												<span>Description</span>
												<textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $e->description}}</textarea>
											</div>
										</div>
									</div>
									<div style="text-align: center;margin: 10px 0px;">
										<button class="btn bg-red" style="color: #fff;" data-id="{{ $e->id}}"  onclick="deleteexp(this)">Delete Experience</button>
									</div>
								</div>
							</div> 
						</form>
						@endforeach 
					@else 
						<div class="col-md-12">
							<div class="box border-all-radius" style="margin-bottom: 15px;">
								<div class="box-header with-border">
									<span class="box-title"><b>Experience 1</b></span>
								</div>
								<form method="post" id="form-add-ex">
								{!! csrf_field() !!}
								<div class="row">
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Company</span>
											<input type="text" value="" name="company"  class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Title</span>
											<input type="text" value="" name="title"  class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Location</span>
											<input type="hidden" value="" name="locationid" id="locationid"  class="form-control">
											<input type="text" value="" name="location" id="location"  class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>State Date</span>
											<input type="text" id="start_date" name="start_date"  class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Present</span>
											<input type="text" value="" name="present"  class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin:30px 0px;">
											<label class="input-checkbox">
							                  <p>I currently work here</p>
							                  <input type="checkbox" name="work_status" value="1">
							                  <span class="checkmark border-all-radius"></span>
							                </label>
										</div>
									</div>
									<div class="col-md-8">
										<div style="margin-bottom: 10px;">
											<span>Description</span>
											<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
										</div>
									</div>
								</div>
								<div style="text-align: center;margin: 10px 0px;">
									<button class="btn bg-red" style="color: #fff;">Delete Experience</button>
								</div>
								</form>
							</div>
						</div> 
					@endif
					 
				</div>
				<div style="text-align: center; margin: 10px 0px;">
					<button class="btn bg-yellow" style="color: #fff;">Add More Experience</button>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('style')   
	{!!Html::style('css/jquery-ui.css')!!}  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"> 
@endsection 
@section('script')  
	{!!Html::script('js/jquery-ui.js')!!} 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript">
		function deleteexp(i) {
				id = $(i).data('id');   
	                $.ajax({
	                    type: 'POST',
	                    url: "{{ route('delete_experience') }}",
	                    data: {
	                        '_token': $('[name="csrf_token"]').attr('content'),
	                        'id': id
	                    },
	                    success: function(data) { 
	                        if ((data.errors)) {
			                        setTimeout(function () { 
			                            toastr.error('Validation error!', {timeOut: 1000});
			                        }, 500);  
			                } else {
			                	toastr.success('Experience Deleted', {timeOut: 5000}); 
		                        location.reload(); 
			                }
	                    },
	                });
			} 	
 
		$('#start_date').datepicker({
	      	format: "MM dd yyyy", 
		    autoclose: true, 
	    }) 

	    $(function(){
			 $( "#location" ).autocomplete({
			  source: "{{ route('province') }}",
			  minLength: 3,
			  select: function(event, ui) {
			  	$('#location').val(ui.item.value);
			  	$('#locationid').val(ui.item.id);
			  }
			 });

			 $( "#chtrade" ).autocomplete({
			  source: "{{ route('chtrades') }}",
			  minLength: 3,
			  select: function(event, ui) {
			  	$('#chtrade').val(ui.item.value);
			  	$('#child_tradeid').val(ui.item.id);
			  }
			});
		}); 
		$(document).ready(function(){  
			$('#form-add-ex').on('submit',function(e){  
				e.preventDefault();     
	            form = $('#form-add-ex').serialize(); 
	            $('#save-add').prop('disabled',true); 
	            $.ajax({
	                type: 'POST', 
	                url: "{{ route('profile_post_addexperience') }}",
	                data: form,
	                success: function(data) {
	                	if ((data.errors)) {
	                        setTimeout(function () { 
	                            toastr.error('Validation error!',{timeOut: 5000});
	                        }, 500);  
	                        // if (data.errors.group_name) {
	                        //     $('.errorGroup_name').removeClass('hidden');
	                        //     $('.errorGroup_name').text(data.errors.group_name);
	                        // }
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
	                    	toastr.success('Save Changes!', {timeOut: 5000});
	                    	$('#save-add').prop('disabled',false); 
	                		console.log(data.data); 

	                    }
	                	
	                },
	            });
       	 	}); 
       	 	$('#form-edit-ex').on('submit',function(e){  
				e.preventDefault();     
	            form = $('#form-edit-ex').serialize(); 
	            $('#save-edit').prop('disabled',true); 
	            $.ajax({
	                type: 'POST', 
	                url: "{{ route('profile_post_editexperience') }}",
	                data: form,
	                success: function(data) {
	                	if ((data.errors)) {
	                        setTimeout(function () { 
	                            toastr.error('Validation error!',{timeOut: 5000});
	                        }, 500);  
	                        // if (data.errors.group_name) {
	                        //     $('.errorGroup_name').removeClass('hidden');
	                        //     $('.errorGroup_name').text(data.errors.group_name);
	                        // }
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
	                    	toastr.success('Save Changes!', {timeOut: 5000});
	                    	$('#save-edit').prop('disabled',false); 
	                		console.log(data.data); 

	                    }
	                	
	                },
	            });
       	 	}); 
    }); 


	</script>
@endsection
