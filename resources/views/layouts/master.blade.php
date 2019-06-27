<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<!-- All links from layouts app -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    

    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============
================================================================================-->
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

    <!-- All links from layouts app -->


  <title>Creative - Start Bootstrap Theme</title>

  <!-- Font Awesome Icons -->
  <link href="{{('soltane/klimqx/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{asset('soltane/klimqx/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset('soltane/css/creative.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

</head>


<body id="page-top">
@yield('content')
<!-- Navigation --> 
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" style="color: white;" href="#page-top"><img src="{{asset('soltane/images/CDTA.jpg')}}" style=" width:60px; " ></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" style="color: white;" href="{{ url('/#About') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" style="color: white;" href="{{ url('/#contact') }} ">Contactez-Nous</a>
        </li>
        @guest
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{{ route('login') }}" style=" color: white; ">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}" style=" color: white; ">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link js-scroll-trigger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style=" color: white; " >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style=" color: black; " >
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
      </ul>
    </div>
  </div>
</nav>




  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('soltane/klimqx/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('soltane/klimqx/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{('asset(soltane/klimqx/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('soltane/klimqx/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="soltane/js/creative.min.js"></script>





  <!-- All scripts from layouts app -->
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

  <!--  -->
</body>

</html>
