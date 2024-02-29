@extends('registration2.app2')
@section('title') 	
	<title>Please check your email - Skill.Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="align-center register-sk margin-top-80">
				<h2 class="font-yellow">We just emailed you a link</h2>
				<div class="bg-transparent border-bottom-left-radius border-bottom-right-radius input-style-pading">
					<h4 class="font-old-blue align-left">Please check your email and click the secure link.</h4>
					<form method="post" action="{{ route('reset_post') }}">
            			{!! csrf_field() !!}   
						<input type="hidden" name="email" value="{{ session('email') }}">  
						<button type="submit" class="btn bg-yellow font-semibold font-black border-all-radius-20">Resend Link</button>
						<a href="{{ route('reset') }}" class="btn bg-yellow font-semibold font-black border-all-radius-20">Try different email</a> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection   