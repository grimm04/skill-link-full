@extends('registration2.app2')
@section('title') 	
	<title>Forgot Password - Skill Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="align-center register-sk margin-top-80">
				<h2 class="font-yellow">First, Lets find your account</h2>
				<div class="bg-transparent border-bottom-left-radius border-bottom-right-radius input-style-pading">
					<h4 class="font-old-blue align-left">Enter the email or phone<br>associated with your account</h4>
					<form method="post" action="{{ route('reset_post') }}">
            			{!! csrf_field() !!} 
						<div class="has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
				                <input type="email" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius" name="email" value="{{ old('email') }}" placeholder="Email or Phone Number"> 
			                @if ($errors->has('email'))
			                    <span class="help-block">
			                    <strong>{{ $errors->first('email') }}</strong>
			                </span>
			                @endif
			                <br><br>
			            </div>
						{{-- <input type="text" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius" placeholder="Email or Phone Number" required><br><br> --}}
						<div class="row">
							<div class="col-xs-7 col-sm-7 col-md-7 align-left">
								<a href="{{ route('signin') }}" class="font-white font-semibold btn">Cancel</a>
							</div>
							<div class="col-md-5 align-right">
								<button type="submit" class="btn bg-yellow font-semibold font-black border-all-radius-20">Send Code</button>
								{{-- <a href="" class="btn bg-yellow font-semibold font-black border-all-radius-20">Send Code</a> --}}
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection   