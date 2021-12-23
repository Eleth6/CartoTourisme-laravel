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
            <span>Carte <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-3 bread">Carte</h1>
          <p class="caps">Carte interactive du Bénin. Zoomez sur la carte pour voir les différentes attractions
            (monuments, musées, restaurants, ...). Cliquez sur la punaise pour voir plus d'informations
            (horaires d'ouverture, <br> les prix des billets, l'historique du lieu, etc.).
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Bénin</span>
          <h2 class="mb-4">Carte interactive</h2>
        </div>
      </div>
      <div class="ftco-animate">
        <div id="mapid" style="height: 500px;"></div>
      </div>
    </div>
  </section>

@endsection