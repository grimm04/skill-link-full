@extends('front_jobs.app_one_wrapper')
@section('title') 	
	<title>Jobs Recomended | Skill Link </title>
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
			<h4 class="yellow" style="margin:15px 15px;">Review</h4>
		</div>
	</div>
</header> 
@endsection 
@section('content')   
		<div class="row">
					<div class="col-md-9">
						<div style="text-align: center;">
							<img src="{{ asset('dashboard_assets/images/kbr.png') }}" style="width: 150px;" alt="">	
							<div class="" style="color: #fff;">
								<h3 style="color: #fff;"><b>KBR</b></h3>
								<h3 style="color: #fff; font-weight: 100;">Head Recruiter</h3>
								<h4 style="color: #fff; font-weight: 100;">Antonio Hall</h4>
							</div><br>
							<div class="rating" style="text-align: center;">
				                <input class="radio-click" type="radio" name="stars" id="star-1" />
				                <input class="radio-click" type="radio" name="stars" id="star-2" />
				                <input class="radio-click" type="radio" name="stars" id="star-3" />
				                <input class="radio-click" type="radio" name="stars" id="star-4" checked />
				                <input class="radio-click" type="radio" name="stars" id="star-5" />
				                <section>
				                  <label for="star-1"> <svg width="255" height="240" viewBox="0 0 51 48">
				                    <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
				                    </svg> </label>
				                  <label for="star-2"> <svg width="255" height="240" viewBox="0 0 51 48">
				                    <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
				                    </svg> </label>
				                  <label for="star-3"> <svg width="255" height="240" viewBox="0 0 51 48">
				                    <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
				                    </svg> </label>
				                  <label for="star-4"> <svg width="255" height="240" viewBox="0 0 51 48">
				                    <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
				                    </svg> </label>
				                  <label for="star-5"> <svg width="255" height="240" viewBox="0 0 51 48">
				                    <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
				                    </svg> </label>
				                </section>
				            </div>
				            <style>
				            	.rating label{
				            		width: 20px;
				            	}
				            </style>
						</div><br>
						<div class="box border-all-radius">
							<div class="box-header with-border">
								<span class="box-title"><b>Write Your Review</b></span>
								<div >
									<a data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn-setting">
										<i class="fa fa-gear"></i>
									</a>
									<ul class="dropdown-menu right">
										<a href="" class="btn blue-dark">Edit</a><br>
										<a href="" class="btn blue-dark">Delete</a><br>
									</ul>
								</div>
							</div>
							<div class="box-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum necessitatibus praesentium, ex nam reiciendis? Inventore esse saepe qui sint, mollitia nihil consequatur ratione excepturi officiis vero. Modi, temporibus fuga impedit!</p>
							</div>
						</div>
						<div style="text-align: center;margin-top: 10px;">
							<a href="" class="btn bg-yellow">Share</a>
						</div>
					</div>
				</div>
@endsection

@section('script')  
<script type="text/javascript">
	 function sort(i) {
			id = $(i).data('id');  
			// alert(id ); return false;
			$.ajax({
                type: 'POST',
	                url: "{{ route('job_apply') }}",
	                data: { 
                    'id': id
                },
                success: function(data) { 
                	if(data.data === true){ 
                		$('#modal-application-true').modal('show');
                	}else {  
                		$('#modal-application-false').modal('show');
                	} 
                },
       		 }); 
	    } 
</script>
@endsection
