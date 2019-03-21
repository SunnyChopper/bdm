<html>
	<head>

		@if(isset($page_title))
			<title>{{ $page_title }}</title>
		@else
			<title>Get Your Downloadable</title>
		@endif

		<!-- Meta tags -->
		<meta charset="UTF-8">
		<meta name="description" content="Helping coders become successful entrepreneurs.">
		<meta name="keywords" content="webuni, education, creative, html">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->   
		<link href="{{ URL::asset('img/favicon.png') }}" rel="shortcut icon"/>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/layouts.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/lp.css') }}" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131372255-3"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-131372255-3');
		</script>

	</head>
	<body>
		@yield('content')
	</body>
</html>