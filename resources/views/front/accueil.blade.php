
@extends('layouts.master')

@section('content')




<!-- Masthead -->
<header class="masthead" >
  <div class="container h-100"  >
    <div class="row h-100 align-items-center justify-content-center text-center" >
      <div class="col-lg-10 align-self-end"  >
        <h1 class="text-uppercase text-white ">système de gestion de contenu</h1>
        <hr class="divider my-4">
      </div>
      <div class="col-lg-8 align-self-baseline">
        <p class="text-white-75 font-weight-light mb-5">Created By CESI.EXIA</p>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ url('projets') }}">Qui êtes-vous ?</a>
      </div>
    </div>
  </div>
</header>


<!-- About Section -->
<section class="page-section bg-primary" id="about">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h1 class="text-white mt-0">Explication du concept</h1>
        <hr class="divider light my-4">
        <h5 class="text-white ">Vous en avez marre de créer des sites WEB avec vos propre mains! Nous Avons la solutions pour ca!</h5>
        <p class="text-white"> Creer votre compte à partir de maintenant et commencer a creer des sites web profesionnels pour la présentation de votre projet </p>

        <br>
        <a class="btn btn-light btn-xl js-scroll-trigger" href="{{ url('design') }}" target="_blank">Voir à quoi resemble votre site !</a>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="page-section" id="services">
  <div class="container">
    <h2 class="text-center mt-0">Particularité</h2>
    <hr class="divider my-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-gem text-primary mb-4"></i>
          <h3 class="h4 mb-2">Unique en son genre</h3>
          <p class="text-muted mb-0">Un Unique CMS entre vos mains</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
          <h3 class="h4 mb-2">Derniere Technologie</h3>
          <p class="text-muted mb-0">Developper avec les derniere technologie du WEB </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-globe text-primary mb-4"></i>
          <h3 class="h4 mb-2">Pret à utiliser</h3>
          <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-heart text-primary mb-4"></i>
          <h3 class="h4 mb-2">Responsive</h3>
          <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Call to Action Section -->
<section class="page-section bg-dark text-white">
  <div class="container text-center">
    <h2 class="mb-4">Commencer l'utilisation dès maintenant</h2>
    <p class="text-white" >Ouvrer un compte et commencer à creer vos sites de présentations</p>
    <a class="btn btn-light btn-xl" href="{{ route('register') }}">Ouvrir un compte !</a>

  </div>
</section>

<!-- Contact Section -->
<section class="page-section" id="contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="mt-0">Prenons contact !</h2>
        <hr class="divider my-4">
        <p class="text-muted mb-5">Prêt à commencer votre prochain projet avec nous ? Appelez-nous ou envoyez-nous un courriel et nous vous répondrons dès que possible !</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
        <div>+213 (0)23 35 22 68</div>
      </div>
      <div class="col-lg-4 mr-auto text-center">
        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
        <!-- Make sure to change the email address in anchor text AND the link below! -->
        <a class="d-block" href="mailto:contact@yourwebsite.com">contact@cdta.dz</a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-light py-5">
  <div class="container">
    <div class="small text-center text-muted">Copyright &copy; 2019 - CDTA</div>
  </div>
</footer>


@endsection