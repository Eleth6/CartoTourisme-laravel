	@extends('layout')

	@section('content')
	
	<div class="hero-wrap js-fullheight" style="background-image: url('images/ponton.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<!-- <span class="subheading">Bienvenue au Bénin</span> -->
					<h1 class="mb-4">Bienvenue au Bénin</h1>
					<p class="caps">Préparez votre voyage et découvrez les incontournables</p>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section services-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center mt-0">
					<div class="w-100">
						<span class="subheading">Bienvenue au Bénin</span>
						<h2 class="mb-4">Commencez votre aventure</h2>
						<p>Le Bénin est un pays francophone d’Afrique de l’Ouest situé entre le Togo à l’ouest, le
							Nigéria à l'est et le Burkina Faso et le Niger au nord. Le Bénin, qu'on appelait le royaume
							du Dahomey, possède de nombreux attraits géographiques, historiques et culturels. C'est le
							berceau du vaudou et la seule nation où le vaudou a été reconnu religion officielle. On
							célèbre la fête du Vodoun le 10 janvier.</p>
						<p> Le Bénin concentre de nombres paysages diversifiés : lagunes, plages, mangroves, savanes,
							forêts luxuriantes, marécages... 7 sites béninois sont inscrits au Patrimoine Mondial : la
							cité lacustre de Ganvié, le village souterrain d’Agoingointo, le palais royal de Porto-Novo,
							la route des Esclaves à Ouidah, les palais royaux d'Abomey ainsi que le parc national du
							W-Arly-Pendjari.</p>
						<p class="text-center"><a href="/sitesTouristiques"
								class="btn btn-primary py-3 px-4">Découvrir les sites
								touristiques</a></p>
					</div>
				</div>
				<div class="col-md-6 mt-5">
					<div class="row">
						<div class="col-md-12 col-lg-6 d-flex ftco-animate">
							<div class="services services-1 color-1 d-block img"
								style="background-image: url('images/safari1.jpg');">
								<div class="media-body">
									<h3 class="heading mb-3 text-white">Aventure</h3>
									<p class="text-white">Parcs naturels et safari</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex ftco-animate">
							<div class="services services-1 color-2 d-block img"
								style="background-image: url('images/mangroves.jpg');">
								<div class="media-body">
									<h3 class="heading mb-3">Nature</h3>
									<p>Mangroves, plages, forêts, lagunes, lacs...
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex ftco-animate">
							<div class="services services-1 color-3 d-block img"
								style="background-image: url('images/tissus.jpg');">
								<div class="media-body">
									<h3 class="heading mb-3">Culture</h3>
									<p>Art local traditionnel et contemporain
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex ftco-animate">
							<div class="services services-1 color-4 d-block img"
								style="background-image: url('images/view.jpg');">
								<div class="media-body">
									<h3 class="heading mb-3">Histoire</h3>
									<p>Route des Esclaves, <br> palais royaux, monuments
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Les différents</span>
					<h2 class="mb-4">Sites touristiques</h2>
				</div>
			</div>
			<div class="row">
			@foreach($sites as $site)
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="/sitesTouristiques/{{ $site->slug }}" class="img" style="background-image: url('/images/{{ $site->mainImage }}');"></a>
					<div class="text p-4">
					<h3><a href="/sitesTouristiques/{{ $site->slug }}">{{ $site->titleSite }}</a></h3>
					<p class="location"><span class="fa fa-map-marker"></span> {{ $site->locationSite }}</p>
					<p>{{ $site->summarySite }}</p>
					<p class="text-center"><a href="/sitesTouristiques/{{ $site->slug }}">En savoir plus</a></p>
					</div>
				</div>
			</div>
			@endforeach
			</div>
		</div>
		<p class="text-center ftco-animate"><a href="/sitesTouristiques" class="btn btn-primary py-3 px-4">Voir plus
				de sites touristiques</a>
		</p>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Les différents</span>
					<h2 class="mb-4">Bars et restaurants</h2>
				</div>
			</div>
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
		</div>
		<p class="text-center ftco-animate"><a href="/sitesTouristiques" class="btn btn-primary py-3 px-4">Voir plus
				de bars et restaurants</a>
		</p>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Les différents</span>
					<h2 class="mb-4">Hôtels et auberges</h2>
				</div>
			</div>
			<div class="row">
			@foreach($hotels as $hotel)
			<div class="col-md-4 ftco-animate">
				<div class="project-wrap">
					<a href="/hotels/{{ $hotel->slug }}" class="img" style="background-image: url('/images/{{ $hotel->mainImage }}');"></a>
					<div class="text p-4">
					<h3><a href="/hotels/{{ $hotel->slug }}">{{ $hotel->nameHotel }}</a></h3>
					<p class="location"><span class="fa fa-map-marker"></span> {{ $hotel->adresseHotel }}</p>
					<p>{{ $hotel->summaryHotel }}</p>
					<p><span class="fa fa-money"></span> Prix des chambres :</p>
                    <p>{{ $hotel->prixHotel }}</p>
					<p class="text-center"><a href="/hotels/{{ $hotel->slug }}">En savoir plus</a></p>
					</div>
				</div>
			</div>
			@endforeach
			</div>
		</div>
		<p class="text-center ftco-animate"><a href="/sitesTouristiques" class="btn btn-primary py-3 px-4">Voir plus
				d'hôtels et auberges</a>
		</p>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Les derniers</span>
					<h2 class="mb-4">actualités et événements</h2>
				</div>
			</div>
			<div class="row">
				@foreach($posts as $post)
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="/actualite/{{ $post->slug }}" class="img" style="background-image: url('/images/{{ $post->imageArticle }}');">
							<span class="price">{{ \Carbon\Carbon::parse($post->dateArticle)->format('d/m/Y') }}</span>
						</a>
						<div class="text p-4">
							<h3 class="heading text-center"><a href="/actualite/{{ $post->slug }}">{{ $post->titleArticle }}</a></h3>
							<p>{{ $post->summaryArticle }}</p>
							<p class="text-center"><a href="/actualite/{{ $post->slug }}" class="btn btn-primary">Lire la suite</a></p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<p class="text-center ftco-animate"><a href="/actualite" class="btn btn-primary py-3 px-4">Voir plus
				d'actualités et événements</a>
		</p>
	</section>

	<section class="ftco-section ftco-about img">
		<div class="container mt-5">
			<div class="row d-flex">
				<div class="col-md-12 about-intro">
					<div class="row">
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="img d-flex w-100 align-items-center justify-content-center"
								style="background-image:url('images/bateau1.jpg');">
							</div>
						</div>
						<div class="col-md-6 pl-md-5 py-5">
							<div class="row justify-content-start pb-3">
								<div class="col-md-12 heading-section ftco-animate">
									<span class="subheading">A propos de nous</span>
									<h2 class="mb-4">Préparez votre voyage avec nous</h2>
									<p>Le projet Carto-Tourisme se propose de mettre en place un outil numérique
										innovant qui permettra de faciliter le voyage à toute personne venant visiter le
										Bénin. Les porteurs du projet sont Blolab et Géom@d.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection