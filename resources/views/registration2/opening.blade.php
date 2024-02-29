@extends('registration2.app2')
@section('title') 	
<title>Opening - Skill Link </title>
@endsection
@section('content') 	
	<section class="bg-register">
		<div class="container">
			<div class="align-center-default">
				<div class="logo-big">
					<img src="{{ asset('registration2/img/logo.png') }}" alt="">
					<div class="align-center margin-top-30">
						<a href="{{ route('getstarted') }}" class="btn bg-yellow font-black font-semibold">Start</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
 