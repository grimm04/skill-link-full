@extends('registration2.app')
@section('title') 	
	<title>Access Contact - Skill Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="margin-top-80 register-sk">
				<form action="" enctype="multipart/form-data">
					<div class="align-center">
						<h2 class="font-yellow font-semibold">Import Contacts</h2>
						<h4 class="font-white">import contacts to invite friends to SkillLink</h4>
					</div>
					<br><br>
					<div class="row" style="margin-bottom: 10px;">
						<div class="col-xs-2 col-sm-2 col-md-2">
							<i class="fa fa-twitter font-black bg-yellow btn" style="font-size: 16px;width:36px; height: 36px; border-radius: 50%; padding: 10px;border: 1px #F8CD0F solid;"></i>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-7">
							<h4 class="font-white" style="margin-bottom: 0px;margin-top: 5px;">Twitter</h4>
							@if ($twitter != '')  
								<p class="font-yellow">Succes Connect With Twitter</p>
							@endif
						</div>
						<div class="col-xs-4 col-sm-4 col-md-3">	
							<label class="switch">
							  <input type="checkbox" class="switch-input" id="twitteraccess" value="1" {{ $twitter }}>
							  <span class="slider round"></span>
							</label>
						</div>
					</div>
					<div class="row" style="margin-bottom: 10px;">
						<div class="col-xs-2 col-sm-2 col-md-2">
							<i class="fa fa-facebook font-black bg-yellow btn" style="font-size: 16px;width:36px; height: 36px; border-radius: 50%; padding: 10px;border: 1px #F8CD0F solid;"></i>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-7">
							<h4 class="font-white" style="margin-bottom: 0px;margin-top: 5px;">Facebook</h4>
							@if ($fabebook != '')  
								<p class="font-yellow">Succes import from Facebook</p>
							@endif
						</div>
						<div class="col-xs-4 col-sm-4 col-md-3">	
							<label class="switch">
							  <input type="checkbox" class="switch-input" id="facebookaccess" value="1" {{ $fabebook }}>
							  <span class="slider round"></span>
							</label>
						</div>
					</div>
					<div class="row" style="margin-bottom: 10px;">
						<div class="col-xs-2 col-sm-2 col-md-2">
							<i class="fa fa-google-plus font-black bg-yellow btn" style="font-size: 16px;width:36px; height: 36px; border-radius: 50%; padding: 10px;border: 1px #F8CD0F solid;"></i>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-7">
							<h4 class="font-white" style="margin-bottom: 0px;margin-top: 5px;">Google +</h4>
							@if ($google != '') 
								<p class="font-yellow">Succes import from Google +</p>
							@endif
						</div>
						<div class="col-xs-4 col-sm-4 col-md-3">	
							<label class="switch">
							  <input type="checkbox" class="switch-input" id="googleaccess" value="1" {{ $google }}>
							  <span class="slider round"></span>
							</label>
						</div>
					</div>
					{{-- <div class="row" style="margin-bottom: 10px;">
						<div class="col-xs-2 col-sm-2 col-md-2">
							<i class="fa fa-linkedin font-black bg-yellow btn" style="font-size: 16px;width:36px; height: 36px; border-radius: 50%; padding: 10px;border: 1px #F8CD0F solid;"></i>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-7">
							<h4 class="font-white" style="margin-bottom: 0px;margin-top: 5px;">Linkedin</h4>
							<p class="font-yellow">Succes import from Linkedin</p>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-3">	
							<label class="switch">
							  <input type="checkbox" class="switch-input">
							  <span class="slider round"></span>
							</label>
						</div>
					</div> --}}
					<div class="align-center">
						<a href="{{ route('connect_other') }}" class="btn bg-yellow font-black border-all-radius-20 btn-full-width">Continue</a>
						{{-- <button class="btn bg-yellow font-black border-all-radius-20 btn-full-width">Continue</button> --}}
					</div>
				</form>
			</div>
		</div>
	</section>

@endsection   
@section('script')   
{!!Html::script('js/crud.js')!!} 
<script type="text/javascript">
	document.getElementById('googleaccess').onclick = function() {
	    if (this.checked==true) {
	        window.location='{{ route('google.import') }}';
	        return false;
	      }
	      return true; 
	}

	document.getElementById('twitteraccess').onclick = function() {
	    if (this.checked==true) {
	        window.location='{{ route('twitter.import') }}';
	        return false;
	      }
	      return true; 
	}

	document.getElementById('facebookaccess').onclick = function() {
	    if (this.checked==true) {
	        window.location='{{ route('facebook.import') }}';
	        return false;
	      }
	      return true; 
	}
</script>
@endsection   