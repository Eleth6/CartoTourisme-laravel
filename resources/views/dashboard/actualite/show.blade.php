@extends('layout')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/ponton.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="/index">Accueil <i class="fa fa-chevron-right"></i></a>
                    </span>
                    <span><a href="/actualite"> Actualite et événements </a> <i class="fa fa-chevron-right"></i></span>
                    <span>Article <i class="fa fa-chevron-right"></i></span>
                </p>
                <h1 class="mb-3 bread">{{ $post->titleArticle }}</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <span class="mb-5"><i class="fa fa-chevron-left"></i><a href="/actualite"> Retour aux
                    actualités et événements</a></span>
            <div class="mt-sm-5 mt-md-5 ftco-animate">
                <div class="blog-entry justify-content-end mb-5">
                    <div class="text">
                        <h3 class="heading text-center" style="font-size: 2rem">{{ $post->titleArticle }}</h3>
                        <p class="text-center mt-4 mb-5"><img src="/images/{{ $post->imageArticle }}" alt=""
                        style="width: 700px; height: auto;"></p>
                        <p>{!! nl2br(e($post->textArticle)) !!}</p>
                        <p class="text-right">Ecrit le {{ $post->created_at->format('d/m/Y') }} </p>
                    </div>
                </div>
            </div>
            <span><i class="fa fa-chevron-left"></i><a href="/actualite" class="mb-5 text-end"> Retour aux
                    actualités et événements</a></span>
        </div>
    </div>
</section>

@endsection