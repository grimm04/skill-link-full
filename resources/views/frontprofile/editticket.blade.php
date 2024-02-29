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
				<h4 class="yellow" style="margin:15px 15px;">Ticket Tracker</h4>
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
					<form method="post" id="form-edit-ex" action="{{ route('profile_post_editticket') }}" >
					{!! csrf_field() !!}
					<div class="col-md-12">
						<div class="multi-field-wrapper">
							@foreach ($ticket as $tic => $value)
							<input type="hidden" value="{{ $value->id }}" name="id[][id]" class="form-control"   enctype="multipart/form-data">
							<div class="multi-fields">
								<div class="multi-field">
									<div class="box border-all-radius box-looping" style="margin-bottom: 15px;">
										<div class="box-header with-border">
											<span class="box-title"><b>Ticket {{ $tic+1 }}</b></span>
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
													<input type="text"  name="title[][title]" value="{{ $value->title }}" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div style="margin-bottom: 10px;">
													<span>Institution</span>
													<input type="text"  name="institution[][institution]" value="{{ $value->institution }}" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div style="margin-bottom: 10px;">
													<span>Location</span>
													<input type="text"  name="location[][location]" value="{{ $value->location }}" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div style="margin-bottom: 10px;">
													<span>Ticket Number</span>
													<input type="number"  name="ticket_number[][ticket_number]" value="{{ $value->ticket_number }}" class="form-control">
												</div>
											</div>
											<div class="col-md-4">
												<div style="margin-bottom: 10px;">
													<span>Expiry Date</span>
													<input type="date"  name="expiry_date[][expiry_date]" value="{{ date_format($value->expiry_date,"Y-m-d") }}" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<button class="btn bg-red remove-field" type="button"  data-id="{{ $value->id }}" onclick="deleteticket(this)" style="color: #fff;margin-bottom: 10px;">Delete Ticket</button>
								</div>
							</div>
							@endforeach 
							<div style="text-align: center; margin: 10px 0px;">
								<button class="btn bg-yellow" type="submit" style="color: #fff;">Save</button>
								<button class="btn bg-yellow add-field" type="button" style="color: #fff;">Add More Ticket</button>
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

	function deleteticket(i) {
		id = $(i).data('id'); 
            $.ajax({
                type: 'POST',
                url: "{{ route('delete_ticket') }}",
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
	                	toastr.success('Ticket Deleted', {timeOut: 5000}); 
                        location.reload(); 
	                }
                },
            });
		} 	 
</script>
@endsection
