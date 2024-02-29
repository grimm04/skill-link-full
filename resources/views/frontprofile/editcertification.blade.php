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
				<h4 class="yellow" style="margin:15px 15px;">Edit Certification </h4>
			</div> 
			<ul>
				<nav>
					<button class="btn bg-yellow" type="submit" form="form-edit-cert">Save</button>
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
				    		<p style="margin-top: 5px;">This section is private only to you and employer</p>
				    	</div>
				    </div>
				</div>
				<div class="wrapper" style="margin-bottom: 20px;">
					<div class="row">
						<form method="post" id="form-edit-cert" action="{{ route('save_edit_certification') }}" enctype="multipart/form-data">
						{!! csrf_field() !!}
						<div class="col-md-12">
							<div class="multi-field-wrapper">
								@foreach ($certification as $cert => $value)
								<input type="hidden" value="{{ $value->id }}" name="id[][id]" class="form-control" >
								<div class="multi-fields">
									<div class="multi-field">
										<div class="box border-all-radius" style="margin-bottom: 15px;">
											<div class="box-header with-border">
												<span class="box-title"><b>Certificate {{ $cert+1 }}</b></span>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div style="margin-bottom: 10px;">
														<span>Certificate image</span>
														<img src="{{ asset('ticket/'.$value->photo) }}">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Upload Certificate</span>
														<input type="file" class="form-control" name="photo[][photo]" value="{{ $value->photo }}">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Title</span>
														<input type="text"  class="form-control" name="title[][title]" value="{{ $value->title }}">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Institution</span>
														<input type="text"  class="form-control" name="institution[][institution]" value="{{ $value->institution }}">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Location</span>
														<input type="text"  class="form-control" name="location[][location]" value="{{ $value->location }}">
													</div>
												</div>
												<div class="col-md-4">
													<div style="margin-bottom: 10px;">
														<span>Expiry Date</span>
														<input type="date"  class="form-control" name="expiry_date[][expiry_date]" value="{{ date_format($value->expiry_date,"Y-m-d") }}">
													</div>
												</div>
											</div>
										</div>
										<button class="btn bg-red remove-field" type="button"   data-id="{{ $value->id }}" onclick="deletecertification(this)" style="color: #fff;margin-bottom: 10px;">Delete Experience</button>
									</div>
								</div>
								@endforeach 
								<div style="text-align: center; margin: 10px 0px;">
									<button class="btn bg-yellow" type="submit" style="color: #fff;">Save</button> 
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('script')  

<script type="text/javascript">  

	function deletecertification(i) {
		id = $(i).data('id'); 
            $.ajax({
                type: 'POST',
                url: "{{ route('delete_certification') }}",
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
</script>
@endsection
