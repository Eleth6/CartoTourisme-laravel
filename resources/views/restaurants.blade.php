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
                        <span>Bars et restaurants <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h1 class="mb-3 bread">Bars et restaurants</h1>
                    <p class="caps">Trouvez un bar ou un restaurant</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="#" class="search-property-1">
                            <div class="row no-gutters">
                                <div class="col-lg d-flex">
                                    <div class="form-group p-4">
                                        <label for="#">Ville</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Choisissez une ville</option>
                                                    <option value="">Abomey</option>
                                                    <option value="">Abomey-Calavi</option>
                                                    <option value="">Allada</option>
                                                    <option value="">Bohicon</option>
                                                    <option value="">Boukombé</option>
                                                    <option value="">Comé</option>
                                                    <option value="">Cotonou</option>
                                                    <option value="">Dassa</option>
                                                    <option value="">Djougou</option>
                                                    <option value="">Ganvié</option>
                                                    <option value="">Godomey</option>
                                                    <option value="">Grand Popo</option>
                                                    <option value="">Kandi</option>
                                                    <option value="">Kétou</option>
                                                    <option value="">Lokossa</option>
                                                    <option value="">Natitinqou</option>
                                                    <option value="">Nikki</option>
                                                    <option value="">Ouidah</option>
                                                    <option value="">Parakou</option>
                                                    <option value="">Porto-Novo</option>
                                                    <option value="">Savalou</option>
                                                    <option value="">Savé</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg d-flex">
                                    <div class="form-group p-4">
                                        <label for="#">Type de cuisine</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="typeRest" id="typeRest" class="form-control">
                                                    <option value="">Choisissez votre type</option>
                                                    <option value="Cuisine locale">Cuisine locale</option>
                                                    <option value="Indien">Indien</option>
                                                    <option value="Japonais">Japonais</option>
                                                    <option value="Chinois">Chinois</option>
                                                    <option value="Thaï">Thaï</option>
                                                    <option value="Italien">Italien</option>
                                                    <option value="Libanais">Libanais</option>
                                                    <option value="Français">Français</option>
                                                    <option value="Africain">Africain</option>
                                                    <option value="Asiatique">Asiatique</option>
                                                    <option value="Européen">Européen</option>
                                                    <option value="Américain du Nord">Américain du Nord</option>
                                                    <option value="Américain du Sud">Américain du Sud</option>
                                                    <option value="Autre">Autre</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg d-flex">
                                    <div class="form-group p-4">
                                        <label for="#">Trier par</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Trier par</option>
                                                    <option value="">Popularité</option>
                                                    <option value="">Note des clients</option>
                                                    <option value="">Prix (croissant)</option>
                                                    <option value="">Prix (décroissant)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg d-flex">
                                    <div class="form-group d-flex w-100 border-0">
                                        <div class="form-field w-100 align-items-center d-flex">
                                            <input type="submit" value="Search"
                                                class="align-self-stretch form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success mb-5" role="alert"">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
            @foreach($restaurants as $restaurant)
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="/restaurants/{{ $restaurant->slug }}" class="img" style="background-image: url('/images/{{ $restaurant->mainImage }}');"></a>
                    <div class="text p-4">
                        <h3><a href="/restaurants/{{ $restaurant->slug }}">{{ $restaurant->nameRest }}</a></h3>
                        <p class="location"><span class="fa fa-map-marker"></span> {{ $restaurant->adresseRest }}</p>
                        <p>{{ $restaurant->summaryRest }}</p>
                        <p><span class="icon fa fa-cutlery"></span> Type de restaurant :</p>
                        <p>
                        @foreach($restaurant->typeRest as $value)
                           {{$value}},
                        @endforeach
                        </p>
                        <p class="text-center"><a href="/restaurants/{{ $restaurant->slug }}">En savoir plus</a></p>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    @endsection