<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/myform.css" rel="stylesheet"> 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title> @yield('title')</title>
</head>
<body>

	@include('header')

	 <main role="main">

	@include('sidebar')


@yield('content')

	</main>

	@include('footer')


    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
