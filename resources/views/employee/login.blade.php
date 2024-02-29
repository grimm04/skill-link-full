@extends('registration2.app2')
@section('title') 	
	<title>Sign In - Skill Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="margin-top-30 align-center register-sk">
				<div class="logo-small">
					<img src="{{ asset('registration2/img/logo-horizontal.png') }}" alt="">
				</div>
				<h1 class="font-bold font-white">Construction Lives Here</h1><br>
				<form action="{{ route('employee_login') }}"  method="POST" >
					 {!! csrf_field() !!} 
					<div id="placeholder-white" class="align-left"> 
						<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"">
							<input type="text" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius-20" placeholder="Email" name="email" value="{{ old('email') }}"><br> 
							@if ($errors->has('email')) 
								<div class="help-block" data-validation="">{{ $errors->first('email') }}</div> 
							@endif
						</div>  
						<div class="password form-group has-error"" style="position: relative;" >
							<input type="password"  placeholder="Password" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius-20" placeholder="Password" name="password">
							<a href="" class="show-password font-white font-semibold">Show</a> 
							@if ($errors->has('password')) 
								<div class="help-block" data-validation="">{{ $errors->first('password') }}</div> 
							@endif   
						</div> 
						<br><br>
						<button type="submit" class="btn bg-yellow font-black btn-full-width border-all-radius-20 font-semibold">Sign In</button>
					</div>
				</form>
				<div class="row">
					<div class="col-xs-7 col-sm-7 col-md-7 align-left">
						<a href="{{ route('reset') }}" class="font-white">Forgot Password?</a>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 align-right">
						<a href="{{ route('register') }}" class="font-white">Register</a>
					</div>
				</div>
			</div>
		</div>
	</section> 

	  <div class="modal fade" id="verify" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	      	<div class="modal-header" style="background-color: #233D5A; color: #FFCC10; font-size: 20px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <p class="modal-title">Skill Link</p>
	        </div>
	        <div class="modal-body">
	          <br><br>
	          <center style="font-size: 20px;">
	          <p>
	          	<img src="{!! asset('landing_page/image/20171206_211142.png') !!}" style="max-width: 100px">
	          </p>
	          <br>
	          <p>
	          	<b>Your Account is Active</b>
	          </p> 
	          <br>
	          <p>
	          	<a class="btn btn-popup" data-dismiss="modal">Continue</a>
	          </p>
	          </center>
	        </div>
	      </div>
	      
	    </div>
	  </div>
@endsection
 
@section('script')  
     @if(!empty(Session::get('modal_popup_verify')) && Session::get('modal_popup_verify') == 5)
      <script>
      $(function() {
          $('#verify').modal('show');
      });
      </script>
    @endif
	<script> 
		$('.show-password').click(function(ev) {
            ev.preventDefault();
            var el = $('.password input');

            if(el.attr('type') == 'password') {
                el.attr('type', 'text');
            } else {
                el.attr('type', 'password');
            }
        });
	</script>
@endsection
 