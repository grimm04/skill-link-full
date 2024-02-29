

@extends('registration2.app')
@section('title') 	
	<title>Certification - Skill Link </title>
@endsection
@section('style')  
<style type="text/css">
	.add-size {
		font-size: 12px;
		font-style: italic;
	}
</style>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="align-center register-sk margin-top-80">
				<h2 class="font-white">What certification do you have?</h2><br>
				<div class="alert alert-danger print-error-msg" style="display:none">
			        <ul></ul>
			    </div>
				<form action="{{ route('register_certification') }}" id="placeholder-white" method="post" class="form-certification">
						{!! csrf_field() !!}
					<div class="row"> 
						<div class="col-md-12">
							<select name="child_tradeid" id="" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Address" style="margin-bottom: 5px;" required>
								<option selected class="font-black">Trade ( Skill set , Occupation)</option> 
									@foreach ($trade as $tradeo) 
									  <optgroup label="{{ $tradeo->name }}" class="font-black">
									  @foreach ($tradeo->chtrade as $chtd)
									     <option value="{{ $chtd->id }}" class="font-black add-size">{{ $chtd->name }}</option>
									  @endforeach
									  </optgroup>
									@endforeach
							 </select> 
						</div> 
					</div>
					<select name="levelid" id="" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Address" style="margin-bottom: 5px;" required>
						<option value="" class="font-black">Current Level</option>
						@foreach ($level as $lev)
							<option value="{{ $lev->id }}" class="font-black">{{ $lev->name }}</option>  
						@endforeach
					</select>
					<input type="text" name="certifiction_number" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Certification number" style="margin-bottom: 5px;" required>  
					<select name="origin_certification" id="" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Origin of certification" style="margin-bottom: 5px;" required>
						<option value="" class="font-black">Origin of certification</option>
						@foreach ($province as $prov)
							<option value="{{ $prov->id }}" class="font-black">{{ $prov->name }}, {{ $prov->country }}</option>  
						@endforeach
					</select>
					<select name="certifictionoriginid" id="" class="font-white input-style-default input-border-bottom bg-none btn-full-width" placeholder="Location certification issued" style="margin-bottom: 5px;" required>
						<option value="" class="font-black">Location certification issued</option>
						@foreach ($province as $prov)
							<option value="{{ $prov->id }}" class="font-black">{{ $prov->name }}, {{ $prov->country }}</option>  
						@endforeach
					</select> 
					<button type="submit" id="button-certification" class="btn bg-yellow font-black btn-full-width border-all-radius-20 font-semibold"> Continue</button> 
				</form>
			</div>
		</div>
	</section>
@endsection 
@section('script')    
	<script type="text/javascript"> 
		$('.form-certification').on('submit',function(e){  
			  e.preventDefault(); 
			  $('#button-certification').prop('disabled',true); 
			  var data = $(this).serialize(); 
			  var url  = $(this).attr('action');  
			  $.post(url,data,function(data){ 
			  	 if($.isEmptyObject(data.error)){
			  	 	    window.location = '{{ route('add_photo') }}';  
			     }else{
			       $('#button-certification').prop('disabled',false);     
		        	setTimeout(function () { 
		                toastr.error('Required!',{timeOut: 5000});
		            }, 500);  
			     } 
			  });
		}); 
	</script>
	{{-- {!!Html::script('js/crud.js')!!}  --}}
@endsection 
