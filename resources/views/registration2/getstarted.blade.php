@extends('registration2.app2')
@section('title') 	
	<title>Get Started - Skill Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="margin-top-30 align-center register-sk">
				<div class="logo-small">
					<img src="{{ asset('registration2/img/logo-horizontal.png') }}" alt="">
				</div>
				<h1 class="font-bold font-white">Construction Lives Here</h1>
				<h3 class="font-white margin-top-250">Get Started - Its Free.</h3>
				<a href="{{ route('register') }}" class="btn bg-yellow font-black font-semibold border-all-radius-20" style="margin-bottom: 10px;">Register</a><br>
				<a href="{{ route('signin') }}" class="font-yellow font-semibold">Sign In</a>
			</div>
		</div>
	</section>
@endsection
 