<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="user-scalable=no, width=device-width, maximum-scale=1.0">
		<title>Recruiting</title>
		{{Html::style('css/bootstrap.min.css')}}
		{{Html::style('css/font-awesome.min.css')}}
		{{Html::style('css/style.css')}} 
		@yield('style')
	</head>
	<body>
		<div class="wrapper">
			@include('layouts.headerec')
			<div class="main-wrapper" id="wrapper"> 
				 @include('layouts.menurec')
				 @yield('content')
			</div>
		</div>

		{{Html::script('js/jquery.min.js')}}
		{{Html::script('js/bootstrap.min.js')}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script> 
		{{Html::script('js/app.js')}}  
		@yield('script')
		<script>
			$('.circle').circleProgress({
				fill: "#FEBF0F",
				emptyFill: "transparent"
			});
		</script>
	</body>
</html>