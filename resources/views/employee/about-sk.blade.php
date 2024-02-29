@extends('registration2.app')
@section('title') 	
	<title>About Your Self - Skill Link </title>
@endsection 
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="align-center register-sk margin-top-80">
				<h2 class="font-white">Help Us To Get To Know You</h2><br> 
				<div class="alert alert-danger print-error-msg" style="display:none">
			        <ul></ul> 
			    </div> 
				<form action="{{ route('register_about') }}" id="placeholder-white" class="form-about" method="post"> 
					{!! csrf_field() !!} 
					<div class="{{ $errors->has('address') ? ' has-error' : '' }}"">
						<input type="text" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder=" Address" style="margin-bottom: 5px;" name="address" required>
						{{-- <input type="text" class="input-style-pading font-white bg-transparent btn-full-width border-all-radius-20" placeholder="Email or Phone Number" name="email" value="{{ old('email') }}"><br>  --}}
						@if ($errors->has('address')) 
							<div class="help-block" data-validation="">{{ $errors->first('address') }}</div> 
						@endif
					</div>   
					<div class="{{ $errors->has('city') ? ' has-error' : '' }}"">
						<input type="text" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder=" country, Province or State" style="margin-bottom: 5px;" id="city" required>
						@if ($errors->has('city')) 
							<div class="help-block" data-validation="">{{ $errors->first('city') }}</div> 
						@endif
					</div>     
					<input type="hidden" name="countryid" id="countryid">
					<div class="{{ $errors->has('gender') ? ' has-error' : '' }}"">
						<select name="gender" id="" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Gender" style="margin-bottom: 5px;" required>
							<option class="font-black">Select Gender</option>
							@foreach ($gender as $gen)
								<option value="{{$gen->id}}" class="font-black">{{ $gen->name }}</option> 
							@endforeach
						</select>
						@if ($errors->has('gender')) 
							<div class="help-block" data-validation="">{{ $errors->first('gender') }}</div> 
						@endif
					</div>   
					<div class="{{ $errors->has('birth') ? ' has-error' : '' }}"">
						<input type="text" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Date of birth" style="margin-bottom: 5px;" name="birth" id="birth">
						@if ($errors->has('birth')) 
							<div class="help-block" data-validation="">{{ $errors->first('birth') }}</div> 
						@endif
					</div>   
					
					{{-- <input type="text" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Gender" style="margin-bottom: 5px;"> --}}
					<div class="{{ $errors->has('martial') ? ' has-error' : '' }}"">
						<select name="martial" id="" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Martial Status" style="margin-bottom: 5px;">
							<option class="font-black">Martial Status</option>
							@foreach ($martial as $mar)
								<option value="{{$mar->id}}" class="font-black">{{ $mar->name }}</option> 
							@endforeach
						</select>
						@if ($errors->has('martial')) 
							<div class="help-block" data-validation="">{{ $errors->first('martial') }}</div> 
						@endif
					</div>  
					<div class="{{ $errors->has('emergency_1') ? ' has-error' : '' }}"">
						<input type="text" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder=" Emergency Contacts 1" style="margin-bottom: 5px;" name="emergency_1" required>
						@if ($errors->has('emergency_1')) 
							<div class="help-block" data-validation="">{{ $errors->first('emergency_1') }}</div> 
						@endif
					</div>  
					<div class="{{ $errors->has('emergency_2') ? ' has-error' : '' }}"">
						<input type="text" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Emergency Contacts 2" style="margin-bottom: 5px;" name="emergency_2"><br><br>
						@if ($errors->has('emergency_2')) 
							<div class="help-block" data-validation="">{{ $errors->first('emergency_2') }}</div> 
						@endif
					</div>   
					
					{{-- <input type="text" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Martial status" style="margin-bottom: 5px;"> --}}
					
					
					<button type="submit" id="button-about" class="btn bg-yellow font-black btn-full-width border-all-radius-20 font-semibold">Continue</button>
					{{-- <a href="{{ route('certification') }}" class="btn bg-yellow font-black btn-full-width border-all-radius-20 font-semibold">Continue</a> --}}
				</form>
			</div>
		</div>
	</section>
@endsection 
@section('style')  
    {!!Html::style('css/jquery-ui.css')!!}   
    {{-- {!!Html::style('css/bootstrap-datepicker.min.css')!!}   --}}
    <style type="text/css"></style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">

@endsection 
@section('script')  
{!!Html::script('js/jquery-ui.js')!!}  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script> 
<script type="text/javascript"> 
   $(function(){
	 $( "#city" ).autocomplete({
	  source: "{{ route('province') }}",
	  minLength: 3, 
	  select: function(event, ui) {
	  	$('#city').val(ui.item.name); 
	  	$('#countryid').val(ui.item.id);
	  }
	 });
	}); 
	$('#birth').datepicker({
      autoclose: true
    }) 
    $('.form-about').on('submit',function(e){  
 	    e.preventDefault(); 
	    $('#button-about').prop('disabled',true);
	      var data = $(this).serialize(); 
	      var url  = $(this).attr('action');  
	      $.post(url,data,function(data){ 
	      	 if($.isEmptyObject(data.error)){
	      	 	    window.location.href = "{{ route('certification') }}";  
	         }else{
	            $('#button-about').prop('disabled',false); 
	        	setTimeout(function () { 
	                toastr.error('Fill Required Input!',{timeOut: 5000});
	            }, 500);  
	         } 
	      });
    });  
</script>
@endsection 
