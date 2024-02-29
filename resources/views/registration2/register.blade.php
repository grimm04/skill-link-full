@extends('registration2.app2')
@section('title') 	
	<title>Register - Skill Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="margin-top-30 align-center register-sk">
				<div class="logo-small">
					<img src="{{ asset('registration2/img/logo-horizontal.png') }}" alt="">
				</div>
				<h1 class="font-bold font-white">Construction Lives Here</h1><br>
				<div class="alert alert-danger print-error-msg" style="display:none">
			        <ul></ul>
			    </div> 
				<form action="{{ route('register_post') }}" id="placeholder-yellow" method="post">
					{!! csrf_field() !!}  
					<div id="placeholder-yellow" class="align-left">
						<div class="form-group has-error">
				            <input type="text" class="input-style-pading font-yellow bg-black btn-full-width border-all-radius-20" placeholder="First Name" value="{{ old('fname') }}" name="fname" id="fname" required>  
				            <div class="help-block errorfname hidden" data-validation=""></div>  
				        </div> 
						<div class="form-group has-error">
							<input type="text" class="input-style-pading font-yellow bg-black btn-full-width border-all-radius-20" placeholder="Last Name" value="{{ old('lname') }}" name="lname" id="lname" required>
							<div class="help-block errorlname hidden" data-validation=""></div>
						</div>  
						<div class="form-group has-error">
							<input type="text" class="input-style-pading font-yellow bg-black btn-full-width border-all-radius-20" placeholder="Email" value="{{ old('email') }}" name="email" id="email" required> 
							<div class="help-block erroremail hidden" data-validation=""></div>
						</div>   
						<div class="password form-group has-error" style="position: relative;"> 
						 	<input type="password" class="input-style-pading font-yellow bg-black btn-full-width border-all-radius-20" placeholder="Password (6 more characters)" name="password" id="password" required>
							<a href="" class="show-password font-yellow font-semibold">Show</a>  
							<div class="help-block errorpassword hidden" data-validation=""></div> 
						</div><br>
						<h4 class="font-white">By clicking Register you agree to the Skill Link User Agreement, Privacy Policy, and Cookie Policy Register</h4>
						<button type="submit" id="button" class="btn bg-yellow font-black btn-full-width border-all-radius-20 font-semibold">Register</button>
					 </div>
						<h4 class="font-white">Already have an account?</h4>
						<a href="{{ route('signin') }}" class="font-yellow"><h4>Sign In</h4></a> 
				</form>
			</div>
		</div>
	</section>

	  <div class="modal fade" id="register" role="dialog">
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
	          	<b>Thank You for Registering</b>
	          </p>
	          <p>
	          	A confirmation email is on its way
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
	<script type="text/javascript"> 
		$('.show-password').click(function(ev) {
            ev.preventDefault();
            var el = $('.password input');

            if(el.attr('type') == 'password') {
                el.attr('type', 'text');
            } else {
                el.attr('type', 'password');
            }
        }); 
     // ========================Register============================ 
		// $('#placeholder-yellow').on('submit',function(e){ 
		//  	  e.preventDefault(); 
		//  	  $('#button').attr('disabled','disabled'); 
		//  	  // alert('tes');
		//  	  // return false;
		//       var data = $(this).serialize();
		//       var url  = $(this).attr('action');  
		//       $.post(url,data,function(data){ 
		//       	 if($.isEmptyObject(data.error) && data.page == 'email'){  
		// 			      setTimeout(function(){// wait for 5 secs(2)
		// 			           location.reload(); // then reload the page.(3)
		// 			      }, 1000 );   
	 //                	// alert(data.success);
  //                }else if($.isEmptyObject(data.error) && data.page == 'phone') {
  //                	 		setTimeout(function(){// wait for 5 secs(2) 
  //                			   window.location = "{{ route('sms_verify') }}";
		// 			      }, 1000 );   
  //                }else{
  //               	printErrorMsg(data.error);
  //                } 
		//       });
		//     }); 

		$(document).ready(function(){ 
			$('#placeholder-yellow').on('submit',function(e){  
				e.preventDefault();     
	            // return false;
	            $('#button').attr('disabled','disabled'); 
	            $('.errorfname').addClass('hidden');
	            $('.errorlname').addClass('hidden');
	            $('.erroremail').addClass('hidden');
	            $('.errorpassword').addClass('hidden');
	            // return false;
	            $.ajax({ 
	                type: 'POST', 
	                url: "{{ route('register_post') }}",
	                data: {
	                    '_token': $('input[name=_token]').val(),
	                    'fname': $("#fname").val(),
	                    'lname': $('#lname').val(),
	                    'email': $('#email').val(), 
	                    'password': $('#password').val()
	                },
	                success: function(data) {
	                	if (data.mail === false) { 
	                        if (data.errors.fname) {
	                            $('.errorfname').removeClass('hidden');
	                            $('.errorfname').text(data.errors.fname);
	                        }
	                        if (data.errors.lname) {
	                            $('.errorlname').removeClass('hidden');
	                            $('.errorlname').text(data.errors.lname);
	                        }
	                        if (data.errors.email) {
	                            $('.erroremail').removeClass('hidden');
	                            $('.erroremail').text(data.errors.email);
	                        }
	                        if (data.errors.password) {
	                            $('.errorpassword').removeClass('hidden');
	                            $('.errorpassword').text(data.errors.password);
	                        }
	                        $('#button').prop('disabled',false); 
	                    }  
	                    else if(data.mail === true){
	                    		$('.erroremail').removeClass('hidden');
	                            $('.erroremail').text(data.errors); 
	                            $('#button').prop('disabled',false); 
	                    }
	                    else {
	                    	 
	                    	$('#button').prop('disabled',false); 
	                		// console.log(data.id);
	                		$('#register').modal('show');
	                    }
	                	
	                },
	            });
	        }); 
	    }); 
 
     </script>  
@endsection 
