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
				<h4 class="yellow" style="margin:15px 15px;">Edit Profile</h4>
			</div>
			 
		</div>
</header> 
@endsection 
@section('content')   
	<div class="row">
		<div class="col-md-9">
			@include('frontprofile.statusshare');
			<div class="wrapper" style="margin-bottom: 20px;">
				<form method="post" id="form-edit" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<div class="bg-cover">
					@if ($edit->cover == null)
						<img src="{{ asset('dashboard_assets/images/bg_1.jpg') }}" alt="">
					@else 
						<img src="{{ asset('cover/'.$edit->cover) }}" alt="">
					@endif    
					<div class="bg-cover-hover">
						<input type="file" name="cover" id="cover">
					</div>
				</div>
				<div style="position: relative;">
					<div class="branch-img branch-profile">
						@if ($edit->photo == null)
							<img src="{{ asset('avatar/default.png') }}" alt="">
						@else 
							<img src="{{ asset('avatar/'.$edit->photo) }}" alt="">
						@endif   
						<div class="branch-img-hover">
							<input type="file"" name="photo" id="photo">
						</div>
						<div class="branch-check branch-img-status">
							<img src="{{ asset('dashboard_assets/images/check.png') }}" alt="">
						</div><br><br>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box border-all-radius" style="margin-bottom: 15px;">
							<div class="box-header with-border">
								<span class="box-title"><b>Employment Status</b></span>
							</div>
							<select name="employe_status" id="employe_status" class="form-control">
								<option value="">Select Employment</option>
								@foreach ($employment as $em) 
									<option value="{{ $em->id }}" {{ $edit->employe_status == $em->id ? 'selected="selected"' : '' }}>{{ $em->name }}</option> 
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-8">
						<div class="box margin-responsive-15 border-all-radius">
							<div class="box-header with-border">
								<span class="box-title"><b>Personal Info</b></span>
							</div>
							<div class="box-body" id="table-info">
								<table class="table">
									<tbody>
										<tr>
											<td>First Name</td>
											<td><b><input type="text" name="fname" id="fname" value="{{ $edit->fname}}" class="form-control"></b></td>
										</tr>
										<tr>
											<td>Middle Name</td>
											<td><b><input type="text" name="mdname" id="mdname" value="{{ $edit->mdname}}" class="form-control" placeholder="(optional)"></b></td>
										</tr>
										<tr>
											<td>Last Name</td>
											<td><b><input type="text" name="lname" id="lname" value="{{ $edit->lname}}" class="form-control"></b></td>
										</tr>
										<tr>
											<td>About Me</td>
											<td><b><input type="text" name="about" id="about" value="{{ $edit->about}}" class="form-control"></b></td>
										</tr>
										<tr>
											<td>Birthday</td>
											<td><b><input type="text" name="birth" id="birth" value="@if (count($edit->birth) != null)
												{{ $edit->birth->format('M') }} {{ $edit->birth->format('d') }}, {{ $edit->birth->format('Y') }}
											@endif" class="form-control"></b></td>
										</tr>
										<tr>
											<td>Lives in</td>
											<td>
												<b>
												<input type="hidden" name="provinceid" id="provinceid" value="{{ $edit->provinceid}}" class="form-control">
												<input type="text" name="province" id="province" value="@if (count($edit->province) != 0)
													{{ $edit->province->name }}, {{ $edit->province->country }}
												@endif" class="form-control">
												</b>
											</td>
										</tr>
										<tr>
											<td>Occupation</td>
											<td><b>
												<input type="hidden" name="child_tradeid" id="child_tradeid" value="{{ $edit->provinceid}}" class="form-control">
												<input type="text" name="chtrade" id="chtrade" value="@if (count($edit->chtrade) != 0){{ $edit->chtrade->name }}@endif" class="form-control"></b>
											</td>
										</tr>
										<tr>
											<td>Joined</td>
											<td><b><input type="text" name="" id="" value=""@if (count($edit->created_at) != null){{ $edit->created_at->format('M') }} {{ $edit->created_at->format('d') }}, {{ $edit->created_at->format('Y') }}@endif" class="form-control" disabled=""></b></td>
										</tr>
										<tr>
											<td>Gender</td>
											<td>
												<b>
													<select name="genderid" id="genderid" class="form-control">
														<option value="">Select Gender</option>
														@foreach ($gender as $gr) 
															<option value="{{ $gr->id }}" {{ $edit->genderid == $gr->id ? 'selected="selected"' : '' }}>{{ $gr->name }}</option> 
														@endforeach
													</select>
												</b>
											</td>
										</tr>
										<tr>
											<td>Status</td>
											<td>
												<b>
													<select name="martialid" id="martialid" class="form-control">
														<option value="">Select Martial Status</option>
														@foreach ($martial as $mr) 
															<option value="{{ $mr->id }}" 	 {{ $edit->martialid == $mr->id ? 'selected="selected"' : '' }}>{{ $mr->name }}</option> 
														@endforeach
													</select>
												</b>
											</td>
										</tr>
										<tr>
											<td>Email</td>
											<td><b><input type="text" name="email" id="email" value="{{ $edit->email}}" class="form-control" disabled=""></b></td>
										</tr>
										<tr>
											<td>Website</td>
											<td><b><input type="text" name="web" id="web" value="{{ $edit->web}}" class="form-control"></b></td>
										</tr>
										<tr>
											<td>Phone Number</td>
											<td><b><input type="text" name="phone" id="phone" value="{{ $edit->phone}}" class="form-control"></b></td>
										</tr>
										<tr>
											<td>Social Network</td>
											<td>
												<div class="row" style="margin-bottom: 20px;">
													<div class="col-xs-3 col-sm-2 col-md-1">
														<span class="btn btn-warning"><i class="fa fa-facebook"></i></span>
													</div>
													<div class="col-xs-9 col-sm-10 col-md-11">
														<input type="text" name="fb" id="fb" value="{{ $edit->fb}}" class="form-control">
													</div>
												</div>
												<div class="row" style="margin-bottom: 20px;">
													<div class="col-xs-3 col-sm-2 col-md-1">
														<span class="btn btn-warning"><i class="fa fa-twitter"></i></span>
													</div>
													<div class="col-xs-9 col-sm-10 col-md-11">
														<input type="text" name="twitter" id="twitter" value="{{ $edit->twitter}}" class="form-control">
													</div>
												</div>
												<div class="row">
													<div class="col-xs-3 col-sm-2 col-md-1">
														<span class="btn btn-warning"><i class="fa fa-instagram"></i></span>
													</div>
													<div class="col-xs-9 col-sm-10 col-md-11">
														<input type="text" name="ig" id="ig" value="{{ $edit->ig}}" class="form-control">
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="pull-right">
									<button type="submit" class="btn bg-yellow" id="save-edit">Save Change</button>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
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
 
		$('#birth').datepicker({
	      	format: "MM dd yyyy", 
		    autoclose: true, 
	    }) 

	    $(function(){
			 $( "#province" ).autocomplete({
			  source: "{{ route('province') }}",
			  minLength: 3, 
			  select: function(event, ui) {
			  	$('#province').val(ui.item.value);
			  	$('#provinceid').val(ui.item.id);
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
			$('#form-edit').on('submit',function(e){  
				e.preventDefault();     
	            form = $('#form-edit').serialize();
	        	console.log(form);
	            // return false;
	            $('#save-edit').prop('disabled',true); 
	            $.ajax({
	                type: 'POST', 
	                url: "{{ route('profile_post_edit') }}",
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
	                    	toastr.success('Save Changes!', 'Success Alert', {timeOut: 5000});
	                    	$('#save-edit').prop('disabled',false);  

	                    }
	                	
	                },
	            });
       	 	}); 
    }); 


	</script>
@endsection
