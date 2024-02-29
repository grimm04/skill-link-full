@extends('registration2.app2')
@section('title') 	
	<title>Forgot Password - Skill Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="align-center register-sk margin-top-80">
				<h2 class="font-yellow">Choose a new password</h2>
				<div class="bg-transparent border-bottom-left-radius border-bottom-right-radius input-style-pading">
					{{-- <h4 class="font-old-blue align-left">Enter the email or phone<br>associated with your account</h4> --}}
					<form method="post" action="{{ route('password_reset') }}">
            			{!! csrf_field() !!} 

            			<input type="hidden" name="token" value="{{ $token }}"> 

            			    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
				                <input type="email" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius" name="email" value="{{ old('email') }}" placeholder="Email">
				                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				                @if ($errors->has('email'))
				                    <span class="help-block">
				                    <strong>{{ $errors->first('email') }}</strong>
				                </span>
				                @endif
				            </div>
						<div class="has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
				                <input type="password" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius" name="password" value="{{ old('password') }}" placeholder="New Password">
				                @if ($errors->has('password')) 
									<div class="help-block" data-validation="">{{ $errors->first('password') }}</div> 
								@endif 
				                <br> 
				                <br> 
			            </div>

			            <div class="has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
				                <input type="password" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Retype new password"> 
				                @if ($errors->has('password_confirmation')) 
									<div class="help-block" data-validation="">{{ $errors->first('password_confirmation') }}</div> 
								@endif 
				              
			            </div>
			              <br>
				          <br>
						{{-- <input type="text" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius" placeholder="Email or Phone Number" required><br><br> --}}
						<div class="row">
							<div class="col-xs-7 col-sm-7 col-md-7 align-left"> 
							</div>
							<div class="col-md-5 align-right">
								<button type="submit" class="btn bg-yellow font-semibold font-black border-all-radius-20">Submit</button>
								{{-- <a href="" class="btn bg-yellow font-semibold font-black border-all-radius-20">Send Code</a> --}}
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection   