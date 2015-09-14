<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi tienda online</title>
	<link rel="shortcut icon" href="{{ asset('img/faviconv.ico') }}">
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/united/bootstrap.min.css" rel="stylesheet">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link href='http://fonts.googleapis.com/css?family=Averia+Libre:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
	<!--Start of Tawk.to Script-->
	<script>
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/55a8288284d307454c027f84/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
<!--End of Tawk.to Script-->
</head>
<body>
	
	@if(\Session::has('message'))
	@include('admin.partials.message')
	@endif
	
	@include('admin.partials.nav')

	@yield('content')

	@include('admin.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>