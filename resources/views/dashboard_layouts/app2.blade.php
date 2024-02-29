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
		<script src="{{ asset('js/view.js') }}"></script>
		<script> var base_url = "{{asset('/')}}"; </script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> 
		@include('dashboard_layouts.laravel') 
		@yield('style')
	</head>
	<body>
		<div class="wrapper">
			@include('dashboard_layouts.header')
			<div class="main-wrapper"> 
				@yield('top') 	 
			</div>
			<div class="main-wrapper" id="wrapper">
				<div class="row"> 
					@yield('content')
					@yield('right')  
				</div>
			</div>
		</div>

		<script src="{{ asset('js/app.js') }}"></script> 
		<script src="{{ asset('dashboard_assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('dashboard_assets/js/bootstrap.min.js') }}"></script> 
		<script src="{{ asset('js/jquery.jscroll.js') }}"></script> 
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		@yield('script')
		@include('dashboard_layouts.online')
		  
		<script type="text/javascript"> 
			
			$('ul.pagination').hide();
		    $(function() {
		        $('.infinite-scroll').jscroll({
		            autoTrigger: true,
		            loadingHtml: '<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>',
		            padding: 0,
		            nextSelector: '.pagination li.active + li a',
		            contentSelector: 'div.infinite-scroll',
		            callback: function() {
		                $('ul.pagination').remove();
		            }
		        });
		    });  
		    
	    	$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
    	</script> 
		<script>
			$('[data-toggle="expand"]').click(function(ev) {
				ev.preventDefault();
				$($(this).attr('data-target')).toggleClass('expand');
			});

			$('[data-toggle="user-menu"]').click(function(ev) {
				ev.preventDefault();
				ev.stopPropagation();
				$(this).next($(this).attr('data-target')).toggleClass('in');
			});

			$('#user-menu').click(function(ev) {
				ev.stopPropagation();
			});

			$(document).click(function(ev) {
				$('#user-menu').removeClass('in');
			});

			$(document).ready(function(){
			    $(".close").click(function(){
			        $("#myAlert").alert("close");
			    });
			});	
		</script>
		@include('dashboard_layouts.script')
	</body>
</html>
