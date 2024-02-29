@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Profile Experience | Skill Link </title>
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
				<h4 class="yellow" style="margin:15px 15px;">Edit Experience</h4>
			</div>
			<ul>
				<nav> 					
					<button class="btn bg-yellow" type="button" id="save-edit" onclick="saveex(this)" >Save</button> 
				</nav>
			</ul>
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			@include('frontprofile.statusshare');
			<div class="wrapper" style="margin-bottom: 20px;">
				<div class="row">
					<form method="post" id="form-edit-ex">
					{!! csrf_field() !!} 
						<div class="col-md-12"> 
							<div class="multi-field-wrapper">
								@foreach ($experience as $ex => $value)
								<div class="multi-fields">
									<div class="multi-field">
										<div class="box border-all-radius box-looping" style="margin-bottom: 15px;">
											<div class="box-header with-border">
												<span class="box-title"><b>Experience {{ $ex+1 }}</b></span>
											</div>
											<div class="row"> 
													<div class="col-md-4">
														<div style="margin-bottom: 10px;">
															<span>Company</span>
															<input type="text" name="company[][company]"  class="form-control" value="{{ $value->company }}">
														</div>
													</div>
													<div class="col-md-4">
														<div style="margin-bottom: 10px;">
															<span>Title</span>
															<input type="text" value="{{ $value->title }}" name="title[][title]"  class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div style="margin-bottom: 10px;">
															<span>Location</span> 
															<input type="text" value="{{ $value->location }}" name="location[][location]"   class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div style="margin-bottom: 10px;">
															<span>State Date</span>
															<input type="date" value="{{ date_format($value->start_date,"Y-m-d") }}" name="start_date[][start_date]"  class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div style="margin-bottom: 10px;">
															<span>End Date</span>
															<input type="date" value="{{ date_format($value->end_date,"Y-m-d") }}" name="end_date[][end_date]"  class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div style="margin-bottom: 10px;">
															<span>Present</span>
															<input type="text" value="{{ $value->present }}" name="present[][present]"  class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div style="margin:30px 0px;">
															<label class="input-checkbox">
											                  <p>I currently work here</p>
											                  @if ($value->work_status == 1) 
												                  @php
												                  	$chek = 'checked'; 
												                  @endphp
											                  @else 
											                  	 @php
												                  	$chek = '' ; 
												                  @endphp
											                  @endif
											                  <input type="checkbox" name="work_status[][work_status]" value="1" {{ $chek }} >
											                  <span class="checkmark border-all-radius"></span>
											                </label>
														</div>
													</div>
													<div class="col-md-8">
														<div style="margin-bottom: 10px;">
															<span>Description</span>
															<textarea name="description[][description]" id="" cols="30" rows="10" class="form-control">{{ $value->description }}</textarea>
														</div>
													</div>
												</div> 
										</div>
										<button class="btn bg-red remove-field" type="button" data-id="{{ $value->id }}" onclick="deleteexp(this)" style="color: #fff;margin-bottom: 10px;">Delete Experience</button>
									</div>
								</div>
								@endforeach 
								<div style="text-align: center; margin: 10px 0px;">
									<button class="btn bg-yellow" style="color: #fff;" form="form-edit-ex" type="button" id="save-edit" onclick="saveex(this)">Save</button> 
								</div>
							</div> 
							
						</div> 
					</form>
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
		$('.multi-field-wrapper').each(function() {
		    var $wrapper = $('.multi-fields', this);
		    $(".add-field", $(this)).click(function(e) {
		        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('.box-looping').val('').focus();  
		    });
		    $('.multi-field .remove-field', $wrapper).click(function() {
		        if ($('.multi-field', $wrapper).length > 1)
		            $(this).parent('.multi-field').remove();
		    });
		});
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
		function saveex(i) { 
	            form = $('#form-edit-ex').serialize(); 
	            // console.log(form);return false;
	            $('#save-add').prop('disabled',true);     
	            $.ajax({
	                type: 'POST', 
	                url: "{{ route('profile_post_editexperience') }}",
	                data: form,
	                success: function(data) {
	                	if ((data.errors)) {
	                        setTimeout(function () { 
	                            toastr.error('Validation error!',{timeOut: 5000});
	                        }, 500);   
	                    }  
	                    else {
	                    	toastr.success('Save Changes!', {timeOut: 5000});
	                    	$('#save-add').prop('disabled',false); 
	                		location.reload();  
	                    }
	                	
	                },
	            });
			}  

	</script>
@endsection
