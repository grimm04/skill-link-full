@extends('registration2.app')
@section('title') 	
	<title>Add Photo - Skill Link </title>
@endsection
@section('content')  
	<section class="bg-register">
		<div class="container">
			<div class="margin-top-80 register-sk">
				<form action="{{ route('register_photo') }}" enctype="multipart/form-data" method="post"	>
					{!! csrf_field() !!}  
					<div class="align-center">
						<h2 class="font-yellow font-semibold">Now, add a photo</h2>
						<h4 class="font-white">So you can stand out and be recognized<br>on Skill-link</h4>
					</div>
					<div class="alert alert-danger print-error-msg" style="display:none">
				        <ul></ul>
				    </div>
					<br><br><br><br><br>
					<div class="add-photo bg-white align-center">
						<div class="input-photo">
							<img src="{{ asset('registration2/img/default.png') }}" id="photoengine" alt="">
							<input type="file" name="photo" id="image-file" >
						</div>
						<h4 class="font-black font-bold">{{ $fullname }}</h4>
						<h5>{{ $tradename }}</h5>
						<h5>{{ $provincename }}</h5>
					</div><br>
					<div class="align-center">
						<button type="submit" class="btn bg-yellow font-black font-semibold btn-full-width border-all-radius-20">CONTINUE</button><br>
						{{-- <a href="{{ route('access_contact') }}" class="btn bg-yellow font-black font-semibold btn-full-width border-all-radius-20">CONTINUE</a><br><br> --}}
						<a href="{{ route('access_contact') }}" class="btn bg-blue-old font-yellow font-semibold btn-full-width border-all-radius-20">SKIP</a>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection  
@section('script') 
{!!Html::script('js/crud.js')!!}  
	<script>
		function readURL(input) 
		{	
			console.log(input);
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        reader.onload = function (e) {
		            document.getElementById('photoengine').src =  e.target.result; 
		        } 
		        reader.readAsDataURL(input.files[0]);
		    }
		} 
		$('#image-file').on('change', function(ev) {
			readURL(ev.target);
		});
	</script>  
@endsection 