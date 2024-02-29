@extends('registration2.app')
@section('title') 	
	<title>Connect to Others - Skill Link </title>
@endsection
@section('content')  
<section class="bg-register">
		<div class="container">
			<div class="margin-top-80 register-sk">
				<div class="align-center">
					<h2 class="font-yellow font-semibold">How do you want to use skill.link</h2>
					<h4 class="font-white">We’ll use this info to personalizeyour experience,</h4>
					<h6 class="font-white">(Don’t worry, we’ll keep it private)</h6>
				</div>
				<br><br>
				<div class="align-center logo-middle">
					<img src="{{ asset('registration2/img/logo.png') }}" alt="">
				</div><br><br>
				<div class="use-sk">
					<a href="{{ route('dashboard') }}" class="btn bg-black btn-full-width">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 align-center">
								<img src="{{ asset('registration2/img/home.png') }}" style="height: 25px; margin-top: 5px;" alt="">
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 align-left">
								<h5 class="font-yellow">Stay up to date with my industry</h5>
							</div>
						</div>
					</a>
					<a href="{{ route('job_list') }}" class="btn bg-black btn-full-width">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 align-center">
								<img src="{{ asset('registration2/img/id-card.png') }}" style="height: 25px; margin-top: 5px;" alt="">
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 align-left">
								<h5 class="font-yellow">Find a job</h5>
							</div>
						</div>
					</a>
					<a href="{{ route('network') }}" class="btn bg-black btn-full-width">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 align-center">
								<img src="{{ asset('registration2/img/share.png') }}" style="height: 25px; margin-top: 5px;" alt="">
							</div>
							<div class="col-xs-10 col-sm-10 col-md-10 align-left">
								<h5 class="font-yellow">Build my professional network</h5>
							</div>
						</div>
					</a>
				</div>
				<br><br>
				<div class="align-center">
					<h4 class="font-yellow font-semibold">NOT SURE YET, I'M OPEN !</h4><br>
					<div style="width: 40px;height: 4px; margin: 0 auto;" class="bg-yellow"></div>
				</div>
			</div>
		</div>
	</section>
@endsection  
 