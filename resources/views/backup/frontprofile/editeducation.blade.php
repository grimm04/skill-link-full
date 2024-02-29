@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Education | Skill Link </title>
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
				<h4 class="yellow" style="margin:15px 15px;">Education </h4>
			</div> 
			<ul>
				<nav>
					@if (count($edit->education) != 0)
					<button class="btn bg-yellow" form="form-edit-edu" type="submit" id="save-edit" >Save</button>
					@else 
					<button class="btn bg-yellow" form="form-add-edu" type="submit" id="save-add" >Save</button>
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
						  <input type="checkbox" class="switch-input">
						  <span class="slider round"></span>
						</label>
			    	</div>
			    </div>
			</div>
			<div class="wrapper" style="margin-bottom: 20px;">
				<div class="row">
					@if (count($edit->education) != 0)
						@foreach ($edit->education as $n => $e)
						<div class="col-md-12">
							<div class="box border-all-radius" style="margin-bottom: 15px;">
								<div class="box-header with-border">
									<span class="box-title"><b>Education 1</b></span>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Institution</span>
											<input type="text" value="" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Major</span>
											<input type="text" value="" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Location</span>
											<input type="text" value="" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>From</span>
											<input type="number" value="" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Until</span>
											<input type="number" value="" class="form-control">
										</div>
									</div>
								</div>
								<div style="text-align: center;margin: 10px 0px;">
									<button class="btn bg-red" style="color: #fff;">Delete Experience</button>
								</div>
							</div>
						</div>
						@endforeach 
					@else 
						<div class="col-md-12">
							<div class="box border-all-radius" style="margin-bottom: 15px;">
								<div class="box-header with-border">
									<span class="box-title"><b>Education 1</b></span>
								</div>
								<div class="row">
									<form method="post" id="form-add-edu">
									{!! csrf_field() !!}
									<div class="col-md-4">
										<div style="margin-bottom: 10px;"  >
											<span>Institution</span>
											<input type="text" value="" name="institution" id="institution" class="form-control">
											<div class="help-block errorinstitution hidden" data-validation=""></div>
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Major</span>
											<input type="text" value="" name="major" id="major" class="form-control">
											<div class="help-block errormajor hidden" data-validation=""></div>
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Location</span>
											<input type="hidden" value="" name="locationid" id="locationid" class="form-control">
											<input type="text" value="" name="location" id="location" class="form-control">
											<div class="help-block errorlocation hidden" data-validation=""></div>
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>From</span>
											<input type="text" value="" name="from" id="from" class="form-control">
											<div class="help-block errorfrom hidden" data-validation=""></div>
										</div>
									</div>
									<div class="col-md-4">
										<div style="margin-bottom: 10px;">
											<span>Until</span>
											<input type="text" value="" name="until" id="until" class="form-control">
											<div class="help-block erroruntil hidden" data-validation=""></div>
										</div>
									</div>
									</form>
								</div>
								<div style="text-align: center;margin: 10px 0px;"> 
									{{-- <button class="btn bg-red" style="color: #fff;">Delete Experience</button> --}}
								</div>
							</div>
						</div>
					@endif
				</div>
				<div style="text-align: center; margin: 10px 0px;">
					@if (count($edit->education) != 0)
					<button class="btn bg-yellow" form="form-edit-edu" type="submit" id="save-edit" >Save</button>
					@else 
					<button class="btn bg-yellow" form="form-add-edu" type="submit" id="save-add" >Save</button> 
					@endif
					{{-- <button class="btn bg-yellow" style="color: #fff;">Add More Education</button> --}}
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

		$('#from').datepicker({
	      	format: "yyyy", 
		    autoclose: true, 
		    viewMode: "years", 
   			minViewMode: "years"
	    }) 
	    $('#until').datepicker({
	      	format: "yyyy", 
		    autoclose: true, 
		    viewMode: "years", 
   			minViewMode: "years"
	    }) 
	    $(function(){
			 // $( "#location" ).autocomplete({
			 //  source: "{{ route('province') }}",
			 //  minLength: 3,
			 //  select: function(event, ui) {
			 //  	$('#location').val(ui.item.value);
			 //  	$('#locationid').val(ui.item.id);
			 //  }
			 // }); 
		}); 
		$(document).ready(function(){  
			$('#form-add-edu').on('submit',function(e){  
				e.preventDefault();     
	            form = $('#form-add-edu').serialize(); 

	            $('#save-add').prop('disabled',true); 
	            $.ajax({
	                type: 'POST', 
	                url: "{{ route('profile_post_addeducation') }}",
	                data: form,
	                success: function(data) {
	                	if ((data.errors)) {  
	                        if (data.errors.institution) {
	                            $('.errorinstitution').removeClass('hidden');
	                            $('.errorinstitution').text(data.errors.institution);
	                        }
	                        if (data.errors.major) {
	                            $('.errormajor').removeClass('hidden');
	                            $('.errormajor').text(data.errors.major);
	                        } 
	                        if (data.errors.location) {
	                            $('.errorlocation').removeClass('hidden');
	                            $('.errorlocation').text(data.errors.location);
	                        }  
	                        if (data.errors.from) {
	                            $('.errorfrom').removeClass('hidden');
	                            $('.errorfrom').text(data.errors.from);
	                        } 
	                        if (data.errors.until) {
	                            $('.erroruntil').removeClass('hidden');
	                            $('.erroruntil').text(data.errors.until);
	                        } 
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
