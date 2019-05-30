<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	{!! Html::style('/frontend/css/bootstrap.min.css') !!}
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	{!! Html::style('/frontend/css/menu.css') !!}
	{!! Html::style('/frontend/css/style.css') !!}
	@stack('stylesheets')

</head>

<body>

	<div class="container-fluid">

		@include('frontend.include._header')
		
		@yield('content')

		@include('frontend.include.footer')
	
	</div>

	{!! Html::script('frontend/js/jquery.min.js') !!}
	{!! Html::script('frontend/js/bootstrap.min.js') !!}
	{!! Html::script('frontend/js/menu.js') !!}
	{!! Html::script('frontend/js/myScript.js') !!}
	@stack('scripts')
	
</body>

</html>