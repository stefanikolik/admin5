<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>

	<!-- Styles -->
	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
	<link href="{{ asset('css/semanticUI/semantic.css') }}" rel="stylesheet">
	<link href="{{ asset('css/semanticUI/calendar.min.css') }}" rel="stylesheet">
	
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- ruska media  -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
	<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
	<!--  -->
	
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#datepicker-11" ).datepicker();
         });
      </script>


</head>
<body>				
		<div class="ui inverted left visible vertical large fixed menu sidebar">
			@include('content.nav')
			
			@include('content.sidebar') 
		</div>	

		<div class="pusher">
			@yield('content')
		</div>





<!-- 	<script
		src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous"></script> -->

<!-- 	
	<script src="{{ asset('js/app.js') }}"></script>
 -->
	<script src="{{ asset('js/semanticUI/semantic.js') }}"></script>
	<script src="{{ asset('js/semanticUI/calendar.min.js') }}"></script>
	<script src="{{ asset('js/my.js') }}"></script>
</body>
</html>
