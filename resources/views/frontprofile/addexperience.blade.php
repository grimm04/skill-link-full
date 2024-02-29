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
				<h4 class="yellow" style="margin:15px 15px;">Experience</h4>
			</div>
			<ul>
				<nav> 
					<button class="btn bg-yellow" form="form-add-ex" type="submit" id="save-add" >Save</button> 
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
					<form method="post" id="form-add-ex">
					{!! csrf_field() !!}
					<div class="col-md-12">
						<div class="multi-field-wrapper">
							<div class="multi-fields">
								<div class="multi-field">
									<div class="box border-all-radius box-looping" style="margin-bottom: 15px;">
										<div class="box-header with-border">
											<span class="box-title"><b>Experience</b></span>
										</div>
										<div class="row"> 
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Company</span><span style="color: red;">*</span>
														<input type="text" value="" name="company[][company]"  class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Title</span><span style="color: red;">*</span>
														<input type="text" value="" name="title[][title]"  class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Location</span><span style="color: red;">*</span>
														<input type="text" value="" name="location[][location]" id="location"  class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>State Date</span>
														<input type="date" id="" name="start_date[][start_date]"  class="form-control" value="{{ \Carbon\Carbon::now()->format('Y-m-d')}}">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>End Date</span>
														<input type="date" id="" name="end_date[][end_date]"  class="form-control" value="{{ \Carbon\Carbon::now()->format('Y-m-d')}}">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Present</span><span style="color: red;">*</span>
														<input type="text" value="" name="present[][present]"  class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin:30px 0px;"> 
														<label class="input-checkbox">
										                  <p>I currently work here</p>  
										                  <input type="checkbox" name="work_status[][work_status]" value="1">
										                  <span class="checkmark border-all-radius"></span>
										                </label>
													</div>
												</div>
												<div class="col-md-8">
													<div style="margin-bottom: 10px;">
														<span>Description</span>
														<textarea name="description[][description]" id="" cols="30" rows="10" class="form-control"></textarea>
													</div>
												</div>
											</div> 
									</div>
									<button class="btn bg-red remove-field" style="color: #fff;margin-bottom: 10px;">Delete Experience</button>
								</div>
							</div>
							<div style="text-align: center; margin: 10px 0px;">
								<button class="btn bg-yellow" style="color: #fff;" form="form-add-ex" type="button" id="save-add"  onclick="saveex(this)">Save</button>
								<button class="btn bg-yellow add-field" type="button" style="color: #fff;">Add More Experience</button>
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
 
		// $('.start_date').datepicker({
	 //      	format: "MM dd yyyy", 
		//     autoclose: true, 
	 //    }) 

	 //    $(function(){
		// 	 $( "#location" ).autocomplete({
		// 	  source: "{{ route('province') }}",
		// 	  minLength: 3,
		// 	  select: function(event, ui) {
		// 	  	$('#location').val(ui.item.value);
		// 	  	$('#locationid').val(ui.item.id);
		// 	  }
		// 	 });

		// 	 $( "#chtrade" ).autocomplete({
		// 	  source: "{{ route('chtrades') }}",
		// 	  minLength: 3,
		// 	  select: function(event, ui) {
		// 	  	$('#chtrade').val(ui.item.value);
		// 	  	$('#child_tradeid').val(ui.item.id);
		// 	  }
		// 	});
		// }); 
		function saveex(i) { 
            form = $('#form-add-ex').serialize();  
            $('#save-add').prop('disabled',true); 
            $.ajax({
                type: 'POST', 
                url: "{{ route('profile_post_addexperience') }}",
                data: form,
                success: function(data) {
                        // console.log(data.data);return false;
                	if ((data.errors)) {
                        setTimeout(function () { 
                            toastr.error('Fill Required Input!',{timeOut: 5000});
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
                		 window.location.href = "{{ route('profile_about') }}";  

                    }
                	
                },
            });
			} 

			$('#tess_mun').change(function () {
				// alert()
				  if (document.getElementById('xxx').checked) 
				  {
				      $('tes_hidden').is(":hidden"); 
				  } else {
				      $('tes_hidden').is(":visible'"); 
				  }

			   	  
			 });

			


	</script>
@endsection
