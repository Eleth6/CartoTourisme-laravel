@extends('layout')

	@section('content')
	
	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/ponton.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs">
            <span class="mr-2">
              <a href="/index">Accueil <i class="fa fa-chevron-right"></i></a>
            </span>
            <span>Nous contacter <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-3 bread">Nous contacter</h1>
          <p class="caps">
            Vous pouvez nous envoyer des questions, nous signaler des bugs, etc.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-animate ftco-no-pb contact-section mb-4">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-map-marker"></span>
            </div>
            <h3 class="mb-2">Adresse</h3>
            <p>Cotonou, Kindonou,
              <br>2ème immeuble après la pharmacie, 3ème étage
            </p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-phone"></span>
            </div>
            <h3 class="mb-2">Numéro de téléphone</h3>
            <p>+229 62 19 19 35</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-paper-plane"></span>
            </div>
            <h3 class="mb-2">Adresse email</h3>
            <p>contact@blolab.org</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-globe"></span>
            </div>
            <h3 class="mb-2">Website</h3>
            <p><a href="https://blolab.org/" style="color: #999999;">blolab.org</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-animate contact-section ftco-no-pt">
    <div class="container">
      @if(session()->has('message'))
        <div class="alert alert-success mb-5" role="alert"">
          {{ session()->get('message') }}
        </div>
      @endif
      <div class="row block-9">
        <div class="col-md-12 order-md-last d-flex">
          
          <form id="contacts" method="POST" action="/contact" enctype="multipart/form-data" class="bg-light p-5 contact-form">@csrf
            <h3 class="text-center mb-5" style="font-weight: 600; color: #f15d30;">Envoyez nous un
              message</h3>
            <div class="form-group">
              <input name ="name"  id ="name" type="text"class="form-control" placeholder="Votre nom complet" required>
            </div>
            <div class="form-group">
              <input name ="email"  id ="email" type="text" class="form-control" placeholder="Votre adresse email" required>
            </div>
            <div class="form-group">
              <input name ="object"  id ="object" type="text" class="form-control" placeholder="Objet" required>
            </div>
            <div class="form-group">
              <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Votre message"
                required></textarea>
            </div>
            <div class="form-group text-center mt-5">
              <button type="submit" class="btn btn-primary py-3 px-5">Envoyer le message</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

@endsection