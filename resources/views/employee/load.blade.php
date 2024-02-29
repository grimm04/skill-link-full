@extends('registration2.app')
@section('title') 	
	<title>Connect to Others - Skill Link </title>
@endsection
@section('content')  
 	<section class="bg-register" >
		<div class="container">
			<div class="margin-top-80 register-sk" id="load"  style="position: relative;">
				<form action="" enctype="multipart/form-data">
					<div class="align-center">
						<h2 class="font-yellow font-semibold">Connect to other people you many know</h2>
						<h4 class="font-white">70% of jobs come from your network</h4>
					</div>
					<br><br> 
					@foreach ($user as $element) 
					<div class="connect-people">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="input-photo">
									<img src="{{ asset('registration2/img/default.png') }}" alt="" style="margin-top: 0px;">
								</div>
							</div>
							<div class="col-sm-7 col-md-7">
								<h4 class="font-yellow font-semibold">Indra Harta Kenda</h4>
								<p class="font-white">UI/UX Designer & Frontend Dev</p>
								<form action="">
									<button class="btn bg-yellow font-black">Connect</button>
								</form>
							</div>
						</div>
					</div> 
					<br>
					@endforeach
					<div class="align-center pagination-connect-people">
					{{ $user->links() }} 
					</div>
					<div class="align-center">
						<a href="{{ route('how_do_you') }}" class="btn bg-yellow font-black font-semibold btn-full-width border-all-radius-20">CONTINUE</a><br><br>
						<a href="{{ route('how_do_you') }}" class="btn bg-blue-old font-yellow font-semibold btn-full-width border-all-radius-20">SKIP</a>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection  

 