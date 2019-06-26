<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>{{$getProjet->titre}}</title>
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet"> 
  <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/lightbox.css')}}" rel="stylesheet">
  <link href="{{ asset('css/main.css')}}" rel="stylesheet">
  <link id="css-preset" href="{{ asset('css/presets/preset1.css')}}" rel="stylesheet">
  <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
  <link href="{{ asset('css/less.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <style>
    .carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
    

 
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
 <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Carousel -->
  
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000" >
          <ol class="carousel-indicators">
               @foreach( $getProjetInfos as $photo )
                 <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
               @endforeach
          </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
            @foreach( $getProjetInfos as $photo )
                <div class="item {{ $loop->first ? ' active' : '' }}" style=" height: 65vh;
                                                                              min-height: 350px;
                                                                              background: no-repeat center center scroll;
                                                                              -webkit-background-size: cover;
                                                                              -moz-background-size: cover;
                                                                              -o-background-size: cover;
                                                                              background-size: cover;
                                                                              " >
                <img src="/images/carousel/{{$photo->carousel}}" style="-webkit-filter: brightness(30%);" >
                <div class="carousel-caption d-none d-md-block">
                  <div class="carousel-item active align-items-center d-flex justify-content-center"  >
                    <h3 class="display-3 text-white" style=" font-family: 'lato'; margin-top: 100px;">{{$photo->titre}}</h3>
                   </div>
                   
                </div>

              </div>
            @endforeach
          </div>

          <!-- Controls -->
      <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>

        </div>
      </div>
<!-- END of Carousel -->

    
  </header>

    
  
  <section id="services">


    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2 style=" font-family: 'Ubuntu'; " >INTRODUCTION</h2>
            <br>
            <p style=" font-family: 'arvo'; " >{{$getProjet->intro}} </p>
          </div>
        </div> 
      </div>
      <br>


    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2 style=" font-family: 'Ubuntu'; " >DESCRIPTION DU PROJET</h2>
            <br>
            <p style=" font-family: 'arvo'; " >{{$getProjet->description}} </p>
          </div>
        </div> 
      </div>
      <br>
    
  


  
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
           <h2 style=" font-family: 'Ubuntu'; " >OBJECTIFS DU PROJET</h2>
          <p>{{$getProjet->objectif}}</p>
        </div>
      </div> 
    </div>
    <br>
    <br>

    
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
           <h2 style=" font-family: 'Ubuntu'; " >IMAGES DE PRESENTATION</h2>
          <p>Voici quelque image de présentation du Projet</p>
        </div>
      </div>
    </div>

    <!-- Carousel -->
  
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="500"  data-wow-duration="1000ms" data-wow-delay="300ms" >
          <ol class="carousel-indicators">
               @foreach( $getProjetInfos as $photo )
                 <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
               @endforeach
          </ol>
        <div class="carousel-inner" role="listbox"  >
          <!-- Slide One - Set the background image for this slide in the line below -->
            @foreach( $getProjetInfos as $photo )
                <div class="item {{ $loop->first ? ' active' : '' }}" style=" height: 65vh;
                                                                              min-height: 350px;
                                                                              background: no-repeat center center scroll;
                                                                              -webkit-background-size: cover;
                                                                              -moz-background-size: cover;
                                                                              -o-background-size: cover;
                                                                              background-size: cover;
                                                                              "  >
                <img src="/images/presentation/{{$photo->presentation}}" >
                
              </div>
            @endforeach
          </div>

          <!-- Controls -->
      <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>

        </div>
      </div>
<!-- END of Carousel -->



    

    
  </section><!--/#portfolio-->


  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2 style=" font-family: 'Ubuntu'; " >PARTICIPANTS {{$getProjet->titre}} </h2>
          <p>Voici les participants du projet {{$getProjet->titre}} </p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/1.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Djamel Bouchaffra</h3>
                <h4>Chef de section</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
            
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/2.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Lawrence Lane</h3>
                <h4>UI/UX Designer</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/3.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Lois Clark</h3>
                <h4>Developer</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/4.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Marian Dixon</h3>
                <h4>Support Manager</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
             
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->

  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>A Propos du CDTA</h2>
            <p>Le Centre de Prototypage Technologique du CDTA a pour but d’assurer différentes prestations, dont la fabrication de prototypes d’expérimentation, de démonstration, de recherche appliquée, l’assistance technique et le conseil au profit des entreprises économiques, ainsi que la formation pratique, le perfectionnement et le recyclage.</p>
            <p>Intégré dans un environnement de recherche développement et doté d’équipements numériques, d’outils de conception et de fabrication assistée par ordinateur. Le centre de prototypage technologique du CDTA pourra offrir à ses partenaires du secteur de l’enseignement supérieur et de la recherche scientifique ainsi qu’à celui du secteur socio-économique et industriel, la possibilité de bénéficier de services à haute valeurs ajoutées tel que :
</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Dedicated Training</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100">100%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Support & Expertise</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100">100%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Software Development</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100">100%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Technological Development</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100">100%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Physics & Electrical Characterization</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100">100%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  
<br>
<br>
<br>


  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> Cité 20 août 1956 Baba Hassen, Alger, Algérie</li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +213 (0) 23 35 22 60 /61 /64 /68 /69  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:scontact@cdta.dz">  contact@cdta.dz</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.sitename.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
        
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy;2019 CDTA Theme.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by CESI </a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.inview.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/wow.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/mousescroll.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/smoothscroll.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.countTo.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/lightbox.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('js/less.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  
</body>
</html>