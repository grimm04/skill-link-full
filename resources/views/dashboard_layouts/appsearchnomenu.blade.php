<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="user-scalable=no, width=device-width, maximum-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		@yield('title')
		 <link href="{!! asset('landing_page/image/20171206_211142.png') !!}" rel="shortcut icon">
		<link rel="stylesheet" href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}	">
		<link rel="stylesheet" href="{{ asset('dashboard_assets/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('dashboard_assets/css/style.css') }}">
		<script> var base_url = "{{asset('/')}}"; </script>
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">  
		{{ Html::style('css/sweetalert.min.css')}} 
		@include('dashboard_layouts.laravel') 
		@yield('style')
	</head>
	<body>
		<div class="wrapper"> 
			@include('dashboard_layouts.headersearchnomenu')
			{{-- @include('all_include.searchheader') --}}
			<div class="main-wrapper" id="wrapper"> 
				@yield('content')   
			</div>
		</div>
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('dashboard_assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('dashboard_assets/js/bootstrap.min.js') }}"></script> 
		<script src="{{ asset('js/view.js') }}"></script>
		<script src="{{ asset('js/jquery.jscroll.js') }}"></script> 
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		{{ Html::script('js/sweetalert.min.js')}}  
		<script type="text/javascript" src="{{ asset('dashboard_assets/icheck/icheck.min.js') }}"></script> 
		<script src="{{ asset('js/share.js') }}"></script> 
		@include('sweet::alert')
		@yield('script') 
		@include('dashboard_layouts.online')
		<script type="text/javascript">
			function goBack() {
			   window.location.href = '{{ URL::previous() }}';  
			}  
		     
		</script>
 
		
	</body>
</html>
