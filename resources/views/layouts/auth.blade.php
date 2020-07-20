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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
	
</head>
<body>
		<br>
		<br>
		<br>

		@yield('content')

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>
</html>