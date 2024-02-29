@extends('registration2.app')
@section('title') 	
	<title>Welcome - Skill Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="align-center-default">
				<div class="logo-big align-center">
					<h3 class="font-white">WELCOME <br>TO</h3>
					<img src="{{ asset('registration2/img/logo.png') }}" alt=""><br>
					<a href="{{ route('about-ys') }}" class="btn bg-yellow font-black font-semibold margin-top-30">Click to Next</a>
				</div>
			</div>
		</div>
	</section>
@endsection 
