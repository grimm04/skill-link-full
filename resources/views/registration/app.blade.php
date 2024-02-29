<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="">
<meta name="theme-color" content="#21AFDE">
<meta name="author" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Skill Link</title> 
 <link href="{!! asset('landing_page/image/20171206_211142.png') !!}" rel="shortcut icon">
    {{Html::style('registration/css/bootstrap-light.css')}}
    {{Html::style('registration/css/style.css')}}
    {{Html::script('registration/js/ie-emulation-modes-warning.js')}} 
    @yield('style')

</head>
<body> 
    @yield('content') 
    {{Html::script('registration/js/ie10-viewport-bug-workaround.js')}} 
    {{Html::script('registration/js/jquery.min.js')}} 
    {{Html::script('registration/js/bootstrap.min.js')}}
    <script type="text/javascript">
    	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
    </script> 
    @yield('script')
</body>
</html>