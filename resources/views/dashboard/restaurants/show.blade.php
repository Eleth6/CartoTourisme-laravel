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
                        <span><a href="/restaurants"> Bars et restaurants</a> <i class="fa fa-chevron-right"></i></span>
                        <span>{{ $restaurant->nameRest }} <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h1 class="mb-3 bread">{{ $restaurant->nameRest }}</h1>
                    <p>{{ $restaurant->summaryRest }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <span><i class="fa fa-chevron-left"></i><a href="/restaurants"> Retour aux
                bars et restaurants</a></span>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text general-info mt-5">
                            <h3 class="heading text-center">Informations générales</h3>
                            <p><span class="icon fa fa-clock-o"></span> Horaires :</p>
                            <p>{!! nl2br(e($restaurant->horairesRest)) !!}</p>
                            <p><span class="icon fa fa-map-marker"></span> Localisation :</p>
                            <p>{!! nl2br(e($restaurant->adresseRest)) !!}</p>
                            <p><span class="icon fa fa-cutlery"></span> Type de restaurant :</p>
                            <p>
                                @foreach($restaurant->typeRest as $value)
                                {{$value}},
                                @endforeach
                            </p>
                            <p><span class="icon fa fa-dollar"></span> Prix :</p>
                            <p>{!! nl2br(e($restaurant->prixRest)) !!}</p>
                            <p><span class="icon fa fa-hourglass-1"></span> Durée du tour :</p>
                            <p>{!! nl2br(e($restaurant->dureeRest)) !!}</p>
                            <p class="text-center"><b>Contact :</b></p>
                            <p><span class="icon fa fa-globe"></span>Site internet : </p>
                            <p>{{ $restaurant->siteInternet }}</p>
                            <p><span class="icon fa fa-phone"></span>Numéro de téléphone : </p>
                            <p>{{ $restaurant->phone }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-sm-5 mt-md-0 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text mt-5">
                            <h3 class="heading text-center" style="font-size: 2rem">Histoire</h3>
                            <p class="text-center mt-4 mb-4"><img src="/images/{{ $restaurant->mainImage }}" alt=""
                            style="width: 600px; height: auto;"></p>
                            <p>{!! nl2br(e($restaurant->textRest)) !!}</p>
                            <p class="text-right">Ecrit le {{ $restaurant->created_at->format('d/m/Y') }} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <span><i class="fa fa-chevron-left"></i><a href="/restaurants"> Retour aux
                bars et restaurants</a></span>
            </div>
        </div>
    </section>
    
@endsection