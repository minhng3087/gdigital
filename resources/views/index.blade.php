<!DOCTYPE html>
<html lang="VI">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nha khoa Otis</title>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="{{ asset('public/assets/css/fonts-UTMCentur.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/fonts-hlt_bauserif.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/fonts-astronova.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/aos.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/mobilemenu.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/slick.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/all.fontawesome.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/styles.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/customs.css')}}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/responsive.css')}}" rel="stylesheet" />
	<style type="text/css">
	</style>
</head>
<body class="body-site body-home">
    @include ('templates.header')
	<!-- //////////////////////////////////////////////////////////// -->
	@yield('content')
	<!-- //////////////////////////////////////////////////////////// -->
    @include ('templates.footer')
	<!-- Load Facebook SDK for JavaScript -->
</body>
</html>