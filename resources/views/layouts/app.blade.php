<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Akcelon</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	
	</head>
	<body>
		<div id="app">
			@include('partials.menu')
				@yield('content')
			@include('partials.footer')
		</div>

		<script src="/js/app.js"></script>

	</body>
	</html>
