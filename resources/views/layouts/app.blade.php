<!DOCTYPE html>
<html>
<head>
	<title>DoctyTek</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  	<meta content="" name="android, java, php, html, laravel">
    <meta content="" name="DoctyTek is an online learning platform. Expand your understanding on web development, android apps, standalone softwares with various examples.">
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    @stack('mainstyles')
</head>
<body onload="PR.prettyPrint()">
@yield('content')


	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/wow.min.js') }}" defer></script>
	<script src="{{ asset('js/superfish.min.js') }}" defer></script> 
	<script src="{{ asset('js/main.js') }}" defer></script>
	@stack('mainscripts')

</body>
</html>