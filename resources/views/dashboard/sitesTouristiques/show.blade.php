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
                        <span><a href="sitesTouristiques"> Sites touristiques</a> <i class="fa fa-chevron-right"></i></span>
                        <span>{{ $site->titleSite }} <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h1 class="mb-3 bread">{{ $site->titleSite }}</h1>
                    <p>{{ $site->summarySite }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <span><i class="fa fa-chevron-left"></i><a href="/sitesTouristiques"> Retour aux
                sites touristiques</a></span>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text general-info mt-5">
                            <h3 class="heading text-center">Informations générales</h3>
                            <p><span class="icon fa fa-clock-o"></span> Horaires :</p>
                            <p>{!! nl2br(e($site->horairesSite)) !!}</p>
                            <p><span class="icon fa fa-map-marker"></span> Localisation :</p>
                            <p>{!! nl2br(e($site->adresseSite)) !!}</p>
                            <p><span class="icon fa fa-dollar"></span> Prix :</p>
                            <p>{!! nl2br(e($site->prixSite)) !!}</p>
                            <p><span class="icon fa fa-hourglass-1"></span> Durée du tour :</p>
                            <p>{!! nl2br(e($site->dureeSite)) !!}</p>
                            <p class="text-center"><b>Contact :</b></p>
                            <p><span class="icon fa fa-at"></span>Adresse Email : </p>
                            <p>{{ $site->email }}</p>
                            <p><span class="icon fa fa-phone"></span>Numéro de téléphone : </p>
                            <p>{{ $site->phone }}</p>
                            <p><span class="icon fa fa-envelope"></span>Boîte postale : </p>
                            <p>{{ $site->poste }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-sm-5 mt-md-0 ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text mt-5">
                            <h3 class="heading text-center" style="font-size: 2rem">Histoire</h3>
                            <p class="text-center mt-4 mb-4"><img src="/images/{{ $site->mainImage }}" alt=""
                            style="width: 600px; height: auto;"></p>
                            <p>{!! nl2br(e($site->textSite)) !!}</p>
                            <!-- <p class="text-center mt-4 mb-4"><img src="/images/{{ $site->imageSite }}" alt=""
                            style="width: 600px; height: auto;"></p> -->
                            <p class="text-right">Ecrit le {{ $site->created_at->format('d/m/Y') }} </p>
                        </div>
                    </div>
                </div>
                <!-- <span><i class="fa fa-chevron-left"></i><a href="/sitesTouristiques" class="mb-5 text-end"> Retour aux
                sites touristiques</a></span> -->
            </div>
            <div class="row d-flex">
                <span><i class="fa fa-chevron-left"></i><a href="/sitesTouristiques"> Retour aux
                sites touristiques</a></span>
            </div>
        </div>
    </section>
    
@endsection