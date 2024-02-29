@if (!Auth::guest())
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, maximum-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- <title>Skill-link-register</title> -->
	@yield('title')
	 <link href="{!! asset('landing_page/image/20171206_211142.png') !!}" rel="shortcut icon">
    {{Html::style('registration2/css/bootstrap.css')}}  
    {{Html::style('registration2/font-awesome/css/font-awesome.min.css')}}  
    {{Html::style('registration2/css/style.css')}}   
    {{Html::style('css/sweetalert.min.css')}}     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">  
	@yield('style')
</head>
<body> 
	@yield('content')  
    {{Html::script('registration2/js/jquery.min.js')}}  
    {{Html::script('registration2/js/bootstrap.min.js')}}  
    {{Html::script('js/pagination.js')}} 
    {{Html::script('js/sweetalert.min.js')}}
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>  
	@include('sweet::alert')
    @yield('script')   
    @include('dashboard_layouts.script')
</body>
</html>
@endif