<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('soltane/css/main.css')}}">
<!--===============================================================================================-->
  <!-- Font Awesome Icons -->
  <link href="{{asset('soltane/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{asset('soltane/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset('soltane/css/creative.min.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">

    @include('Partials.menu')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    	
<!--===============================================================================================-->
	<script src="soltane/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="soltane/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="soltane/bootstrap/js/popper.js"></script>
	<script src="soltane/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="soltane/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="soltane/daterangepicker/moment.min.js"></script>
	<script src="soltane/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="soltane/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
      <!-- Bootstrap core JavaScript -->
  <script src="soltane/jquery/jquery.min.js"></script>
  <script src="soltane/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="soltane/jquery-easing/jquery.easing.min.js"></script>
  <script src="soltane/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>
</body>

</html>
