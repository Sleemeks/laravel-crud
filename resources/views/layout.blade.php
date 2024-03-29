<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel CRUD</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/js"></script>
</body>
</html>