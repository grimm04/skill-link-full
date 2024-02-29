@extends('registration2.app2')
@section('title') 	
	<title>SMS Verification - Skill Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="align-center register-sk margin-top-80">
				<h2 class="font-yellow">Sms Verification</h2>
				<div class="bg-transparent border-bottom-left-radius border-bottom-right-radius input-style-pading">
					<h4 class="font-old-blue align-left">Please Insert Verification code :<br></h4>
					<div class="alert alert-danger print-error-msg" style="display:none">
			        <ul></ul>
			    </div> 
					<form id="form-sms" action="{{ route('smsverfytoken') }}"  method="post">
            			{!! csrf_field() !!}  
						   <div class="has-feedback {{ $errors->has('code') ? ' has-error' : '' }}">
				                <input type="code" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius" name="code" value="{{ old('code') }}" placeholder="Verification code"> 
			                @if ($errors->has('code'))
			                    <span class="help-block">
			                    <strong>{{ $errors->first('code') }}</strong>
			                </span>
			                @endif
			                <br><br>
			            </div>
						{{-- <input type="text" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius" placeholder="Email or Phone Number" required><br><br> --}}
						<div class="row"> 
							<div class="col-md-12 align-right">
								<button type="submit" id="button-sms" class="btn bg-yellow font-semibold font-black border-all-radius-20">Verify</button>
								{{-- <a href="" class="btn bg-yellow font-semibold font-black border-all-radius-20">Send Code</a> --}}
							</div>
						</div>
					</form> 
				</div>
			</div>
		</div>
	</section>
@endsection   
@section('script')   
	{!!Html::script('js/crud.js')!!} 
@endsection 
