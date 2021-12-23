@extends('layout')

	@section('content')
	
	<section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('/images/ponton.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="index">Accueil <i class="fa fa-chevron-right"></i></a>
                        </span>
                        <span><a href="/hotels"> Hôtels et auberges</a> <i class="fa fa-chevron-right"></i></span>
                        <span>{{ $hotel->nameHotel }} <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h1 class="mb-3 bread">{{ $hotel->nameHotel }}</h1>
                    <p>{{ $hotel->summaryHotel }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <span><i class="fa fa-chevron-left"></i><a href="/hotels"> Retour aux
                hôtels et auberges</a></span>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text general-info mt-5">
                            <h3 class="heading text-center">Informations générales</h3>
                            <p><span class="icon fa fa-map-marker"></span> Localisation :</p>
                            <p>{!! nl2br(e($hotel->adresseHotel)) !!}</p>
                            <p><span class="icon fa fa-dollar"></span> Prix :</p>
                            <p>{!! nl2br(e($hotel->prixHotel)) !!}</p>
                            <p><span class="icon fa fa-cutlery"></span> Accès à la cuisine : {{ $hotel->cuisine }}</p>
                            <p class="text-center"><b>Contact :</b></p>
                            <p><span class="icon fa fa-at"></span>Adresse Email ou site internet : </p>
                            <p>{{ $hotel->email }}</p>
                            <p><span class="icon fa fa-phone"></span>Numéro de téléphone : </p>
                            <p>{{ $hotel->phone }}</p>
                            <p><span class="icon fa fa-envelope"></span>Boîte postale : </p>
                            <p>{{ $hotel->poste }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-sm-5 mt-md-0 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text mt-5">
                            <h3 class="heading text-center" style="font-size: 2rem">Histoire</h3>
                            <p class="text-center mt-4 mb-4"><img src="/images/{{ $hotel->mainImage }}" alt=""
                            style="width: 600px; height: auto;"></p>
                            <p>{!! nl2br(e($hotel->textHotel)) !!}</p>
                            <!-- <p class="text-center mt-4 mb-4"><img src="/images/{{ $hotel->imageHotel }}" alt=""
                            style="width: 600px; height: auto;"></p> -->
                            <p class="text-right">Ecrit le {{ $hotel->created_at->format('d/m/Y') }} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <span><i class="fa fa-chevron-left"></i><a href="/hotels"> Retour aux
                hôtels et auberges</a></span>
            </div>
        </div>
    </section>
    
@endsection