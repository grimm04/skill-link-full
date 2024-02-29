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
				<h4 class="yellow" style="margin:15px 15px;">Edit Skill</h4>
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
					<form method="post" id="form-edit-edu" action="{{ route('profile_post_editskill') }}">
					{!! csrf_field() !!}
					<div class="col-md-12">
						<div class="box border-all-radius" style="margin-bottom: 15px;">
							<div class="box-header with-border">
								<span class="box-title"><b>Skill</b></span>
							</div>
							<div class="multi-field-wrapper">
								@foreach ($skill as $sk => $value)
								<div class="multi-fields">
									<div class="multi-field">
										<div class="box-looping">
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div style="margin-bottom: 10px;">
														<span>Skill</span>
														<input type="text" name="name[][name]" value="{{ $value->name }}" class="form-control">
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div style="margin-bottom: 10px;">
														<span>Level</span>
														<select name="levelid[][levelid]" id="" class="form-control">
															@foreach ($level as $lev) 
																<option value="{{ $lev->id}}"  {{ $value->levelid == $lev->id ? 'selected="selected"' : '' }}>{{ $lev->name}}</option> 
															@endforeach
														</select>
													</div>
												</div>
											</div>
										</div>
										<button class="btn bg-red remove-field" style="background: transparent;color: #fff;margin-bottom: 10px;">
											Delete
										</button>
									</div>
								</div>
								@endforeach 
								<button class="btn bg-blue-dark add-field" type="button" style="color: #fff;">Add More Skill</button>
							</div>
							<div style="text-align: center;margin: 20px 0px;">
								<button class="btn bg-yellow" style="color: #fff;" type="submit">Save</button>
							</div>
						</div>
					</div>
					</form>
				</div>
				<div style="text-align: center; margin: 10px 0px;">
					<a href="{{ route('profile_endorsement') }}" class="btn bg-yellow" style="color: #fff;">Adjust Endorsement Setting</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')  
@endsection
