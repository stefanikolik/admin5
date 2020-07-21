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
	
</head>
<body>				
		<div class="ui inverted left visible vertical large fixed menu sidebar">
			@include('content.nav')
			
			@include('content.sidebar') 
		</div>	

		<div class="pusher ">
			@yield('content')
		</div>

	<!-- Scripts -->
	<script
		src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous"></script>

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/semanticUI/semantic.js') }}"></script>
	<script src="{{ asset('js/semanticUI/calendar.min.js') }}"></script>
	<script src="{{ asset('js/my.js') }}"></script>


</body>
</html>
