<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>DFMVR</title>

	<!-- Bootstrap core CSS -->
	{!! Html::style('/frontend/vendor/bootstrap/css/bootstrap.min.css') !!}
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<!-- Custom styles for this template -->
	{!! Html::style('/frontend/css/style.css') !!}
	{!! Html::style('/frontend/css/menu.css') !!}
	{!! Html::style('/frontend/css/slick.css') !!}
	{!! Html::style('/frontend/css/slick-theme.css.css') !!}

</head>

<body>

	<div class="container-fluid">

		@include('frontend.include.header')
		
		@yield('content')

		@include('frontend.include.footer')
	
	</div>

        {!! Html::script('frontend/vendor/jquery/jquery.min.js') !!}
        {!! Html::script('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
        {!! Html::script('frontend/vendor/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('frontend/vendor/jquery/menu.js') !!}
		{!! Html::script('frontend/vendor/jquery/slick.js') !!}
		{!! Html::script('frontend/js/custom.js') !!}

</body>

</html>