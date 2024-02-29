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
				<h4 class="yellow" style="margin:15px 15px;">Additional Information </h4>
			</div> 
			<ul>
				<nav>
					<button class="btn bg-yellow">Save</button>
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
					<div class="col-md-12">
						@if (count($employe->medical) != 0)
						<form method="post" id="form-medic" action="{{ route('profile_post_editmedical') }}">
						{!! csrf_field() !!}
						<div class="multi-field-wrapper"> 
							<div class="multi-fields">
								@foreach ($employe->medical as $med)
									<div class="multi-field">
										<div class="box border-all-radius box-looping" style="margin-bottom: 15px;">
											<div class="box-header with-border">
												<span class="box-title"><b>Medical Condition</b></span>
											</div>
											<div class="row">
												<div class="col-md-12"> 
													<div class="row">
														<div class="col-xs-5 col-sm-4 col-md-4">
															<div style="margin-bottom: 10px;">
																<span>Condition</span>
																<input type="text" name="condition[][condition]" value="{{ $med->condition }}" class="form-control">
															</div>
														</div>
														<div class="col-xs-5 col-sm-4 col-md-4">
															<div style="margin-bottom: 10px;">
																<span>Level</span>
																<select name="level[][level]" id="" class="form-control">
																	@foreach ($levelall as $level => $value) 
																	<option value="{{ $value->id}}" {{ $value->id == $med->level ? 'selected="selected"' : '' }}>{{ $value->name}}</option> 
																	@endforeach 
																</select>
															</div>
														</div>
														<div class="col-xs-5 col-sm-4 col-md-4">
															<div style="margin-bottom: 10px;">
																<span>From</span>
																<input type="date" name="from[][from]" value="{{ $med->from }}" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div> 
										</div>
										<button class="remove-field bg-red btn" style="border: none;background-color: transparent;color: #fff;margin-bottom: 20px; ">Delete</button>
									</div>
								@endforeach 
							</div>
							<div style="text-align: center; margin: 10px 0px;">
								<button class="btn bg-yellow" type="submit" style="color: #fff;">Save</button>
								<button class="btn bg-yellow add-field" type="button" style="color: #fff;">Add More Medical Condition</button>
							</div>
						</div>
						</form>
						@endif 
						@if (count($employe->interest) != 0)
							<div class="box border-all-radius" style="margin-bottom: 15px;">
								<form method="post" id="form-add-ex" action="{{ route('profile_post_editinterests') }}">
								{!! csrf_field() !!}
								<div class="box-header with-border">
									<span class="box-title"><b>Interest</b></span>
								</div>
								<div style="margin-bottom: 10px;">
									<textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $employe->interest->description }}</textarea>
								</div>
								<div style="text-align: right;margin: 10px 0px;">
									<button class="btn bg-yellow" type="submit" style="color: #fff;">Save</button>
								</div>
								</form>
							</div>
						@endif 
						@if (count($employe->fitduties) != 0)
						<div class="box border-all-radius" style="margin-bottom: 15px;">
							<form method="post" id="form-add-ex" action="{{ route('profile_post_editfitduties') }}">
							{!! csrf_field() !!}
							<div class="box-header with-border">
								<span class="box-title"><b>Fit For Duties</b></span>
							</div>
							@foreach ($duty as $duty => $value) 
							<div style="margin-bottom: 10px;">
								{{ $duty+1 }}. {{ $value->description }}
								@foreach ($value->fit as $fit)
									<label class="input-checkbox">
					                  <p>{{ $fit->description}}</p> 
				                  		<input type="{{ $fit->type }}" {{ $fit->type == 'checkbox' ? 'name=dutyid_checkbox[]' : 'name=dutyid_'. $fit->dutyid .'' }}  id="dutyid-{{ $fit->id }}" value="{{ $fit->id }}" onclick="fitduty(this)" @if(in_array($fit->id, $dutyid)) checked="" @endif>
				                  	    <span class="checkmark border-all-radius"></span>  
					                </label> 
								@endforeach 
							</div>
							@endforeach
							<br>
							<div style="margin-bottom: 10px;">
								  DECLARATION : (read the material below carefully before submit): 
							</div> 
							<div style="margin-bottom: 10px;">
								  I hereby certify that all statments made on this employment form are correct to the best my knowledge. I authorize Skill-link to investigate fully all information contained in this form.
							</div>
							<div style="text-align: right;margin: 10px 0px;">
								<button class="btn bg-yellow" type="submit" style="color: #fff;">Save</button>
								<button class="btn bg-blue-dark" type="button" style="color: #fff;">Cancel</button>
							</div>
							</form>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 
@section('script')  
<script type="text/javascript"> 
</script>
@endsection
