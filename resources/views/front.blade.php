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
  <link href="{{ asset('css/footer.css')}}" rel="stylesheet">
  <link href="{{ asset('css/main.css')}}" rel="stylesheet">
  <link id="css-preset" href="{{ asset('css/presets/preset1.css')}}" rel="stylesheet">
  <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
  <link href="{{ asset('css/less.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <link href="{{asset('soltane/css/creative.min.css')}}" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
    <a class="navbar-brand" href="#" style=" font-size: 30px; font-family: 'lato';  " >CDTA</a>
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
          <a class="nav-link" href="#team" style=" font-family: 'lato'; " >Participants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about-us" style=" font-family: 'lato'; " >A Propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact" style=" font-family: 'lato'; " >Contact</a>
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
                <div class="item {{ $loop->first ? ' active' : '' }}" style=" height: 80vh;
                                                                              min-height: 350px;
                                                                              background: no-repeat center center scroll;
                                                                              -webkit-background-size: cover;
                                                                              -moz-background-size: cover;
                                                                              -o-background-size: cover;
                                                                              background-size: cover; " >

                <img class="d-block w-100"  src="/images/carousel/{{$photo->carousel}}" style="-webkit-filter: brightness(30%);" >
                
                <div class="carousel-caption d-none d-md-block">
                  <div class="fixed-top">
                    <h3 class="display-3 text-white" style="  margin-top: 260px;">{{$photo->titre}}</h3>
                   </div>
                   <div class="fixed-top">
                    <p class="display-6 text-white" style=" margin-top: 355px;">Centre de Développement des Technologies Avancées (CDTA) </p>
                   </div>
                   
                   <a class="btn btn-light btn-xl js-scroll-trigger" href=" #description ">Voir la Description</a>

                   
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

    
    <section class="page-section bg-primary" id="about" style=" height: 90vh; "   >
  <div class="container"  >
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h1 class="text-white mt-0">INTRODUCTION</h1>
        <hr class="divider light my-4">
        <h5 class="text-white ">{{$getProjet->intro}}</h5>
        

       
      </div>
    </div>
  </div>
</section>
  
  


<div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
<hr  style=" width: 70%;
            height: 1px;
            margin-left: auto;
            margin-right: auto;
            background-color: #00008b;
            border: 0 none;
            margin-top: 20px;
            opacity: 0.3 " >
</div>

<section  id="description" style=" width: 100%;
                 padding: 0 7%;
                 display: table;
                 margin: 0;
                 max-width: none;
                 height: 50vh; " >

    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2" >
            <h2 style=" font-family: 'Ubuntu'; " >DESCRIPTION DU PROJET</h2>
            <br>
            <p style=" font-family: 'arvo'; " >{{$getProjet->description}} </p>
          </div>
        </div> 
      </div>
      <br>
    </div>
  </section>

  <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">


<hr  style=" width: 70%;
            height: 1px;
            margin-left: auto;
            margin-right: auto;
            background-color: #00008b;
            border: 0 none;
            margin-top: 20px;
            opacity: 0.3 " >
</div>

<section>
    
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms">
           <h2 style=" font-family: 'Ubuntu'; " >IMAGES DE PRESENTATION</h2>
          <p>Voici quelque image de présentation du Projet</p>
        </div>
      </div>
    </div>

    <!-- Carousel -->
  
      <div id="carousel-example-generic-pr" class="carousel slide" data-ride="carousel" data-interval="2000" >
          <ol class="carousel-indicators">
               @foreach( $getProjetPresentation as $photo )
                 <li data-target="#carousel-example-generic-pr" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
               @endforeach
          </ol>
        <div class="carousel-inner" role="listbox"  >
          <!-- Slide One - Set the background image for this slide in the line below -->
            @foreach( $getProjetPresentation as $photo )
                <div class="item {{ $loop->first ? ' active' : '' }}" style=" height: 85vh;
                                                                              min-height: 350px;
                                                                              background: no-repeat center center scroll;
                                                                              -webkit-background-size: cover;
                                                                              -moz-background-size: cover;
                                                                              -o-background-size: cover;
                                                                              background-size: cover; "  >
                <img  class="d-block w-100" src="/images/presentation/{{$photo->presentation}}" >
                
              </div>
            @endforeach
          </div>

          <!-- Controls -->
      <a class="carousel-control-prev" href="#carousel-example-generic-pr" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-generic-pr" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>

        </div>
      </div>
<!-- END of Carousel -->


</section>

  


<section style=" width: 100%;
                 padding: 0 7%;
                 display: table;
                 margin: 0;
                 max-width: none;
                 height: 50vh; " >

  
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms">
           <h2 style=" font-family: 'Ubuntu'; " >OBJECTIFS DU PROJET</h2>
          <p>{{$getProjet->objectif}}</p>
        </div>
      </div> 
    </div>
    <br>
    <br>

  </section>

  



<div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
<hr  style=" width: 70%;
            height: 1px;
            margin-left: auto;
            margin-right: auto;
            background-color: #00008b;
            border: 0 none;
            margin-top: 20px;
            opacity: 0.3 " >
</div>




    

    
  
 

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
          <h2 style=" font-family: 'Ubuntu'; " >Superviseurs {{$getProjet->titre}} </h2>
          <p>Voici les superviseurs du projet {{$getProjet->titre}} </p>
        </div>
      </div>


      <div class="team-members">
        <div class="row">

@foreach( $getSup as $superviseurs )
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-info">
                <h3>{{$superviseurs->Name}}</h3>
                <h4>{{$superviseurs->Role}}</h4>
                <h4>Participants</h4>    
                @foreach($getParticipants as $particip)
                @if($particip->superviseur_id == $Superviseurs->id)
                <p>{{$particip->Nom}}</p>
                @endif
                @endforeach
              </div>  
            </div>
          </div>
@endforeach



         
             
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->

  <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
<hr  style=" width: 70%;
            height: 1px;
            margin-left: auto;
            margin-right: auto;
            background-color: #00008b;
            border: 0 none;
            margin-top: 20px;
            opacity: 0.3 " >
</div>

  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
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
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Support & Expertise</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Software Development</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Technological Development</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Physics & Electrical Characterization</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100"></div>
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
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms">
            <h2>Contactez Nous!</h2>
            <p>Soyez a l'aise de nous contactez a tout moments</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1800ms" data-wow-delay="850ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1800ms" data-wow-delay="300ms">
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
                  <button type="submit" class="btn-submit" href="mailto:scontact@cdta.dz">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
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


  
  <footer class="footer-distributed">

      <div class="footer-left">

        <h3>CDTA</h3>

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Pricing</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">CDTA &copy; 2019</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Cité 20 août 1956 Baba Hassen</span> Alger, Algérie</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+213 (0) 23 35 22 60 /61 /64 /68 /69  </p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">contact@cdta.dz</a></p>
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