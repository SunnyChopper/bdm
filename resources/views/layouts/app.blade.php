<!DOCTYPE html>
<html lang="en">
<head>
	@if(isset($page_title))
		<title>{{ $page_title }} - {{ env('APP_NAME') }}</title>
	@else
		<title>{{ env('APP_NAME') }}</title>
	@endif

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->   
	<link href="{{ URL::asset('img/favicon.ico') }}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('css/layouts.css') }}"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	@include('layouts.navbar')
	@yield('content')
	@include('layouts.footer')
	@include('layouts.js')
</body>
</html>