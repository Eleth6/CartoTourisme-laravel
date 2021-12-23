<!DOCTYPE html>
<html lang="en">

<head>
	<title>Carto-Tourisme</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="/css/animate.css">

	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">

	<link rel="stylesheet" href="/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="/css/flaticon.css">
	<link rel="stylesheet" href="/css/style.css">

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<a class="navbar-brand pl-5" href="/index">Bénin<span>Carto-Tourisme</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
			aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li id="accueil" class="nav-item active"><a href="/index" class="nav-link">Accueil</a></li>
				<li class="nav-item"><a href="/carte" class="nav-link other">Carte</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Lieux à visiter
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="/sitesTouristiques">Sites touristiques</a>
					<a class="dropdown-item" href="/hotels">Hôtels et auberges</a>
					<a class="dropdown-item" href="/restaurants">Bars et restaurants</a>
					</div>
				</li>
				<li class="nav-item"><a href="/transport" class="nav-link other">Transports</a></li>
				<li class="nav-item"><a href="/actualite" class="nav-link other">Actualité et événements</a>
				</li>
				<li class="nav-item"><a href="/infos" class="nav-link other">Infos importantes</a></li>
				<li class="nav-item"><a href="/contact" class="nav-link other">Nous contacter</a></li>
			</ul>
		</div>
	</nav>
	<!-- END nav -->

    @yield('content')

	<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
		<div class="container">
			<div class="row mb-5">
				<div class="col-3 pt-5">
					<div class="ftco-footer-widget pt-md-5 mb-4 mr-2">
						<h2 class="ftco-heading-2 text-center">A propos</h2>
						<p>Le projet Carto-Tourisme se propose de mettre en place un outil numérique innovant
							qui permettra de faciliter le voyage à toute personne venant visiter le Bénin. Les porteurs
							du projet sont Blolab et Géom@d.</p>
						<img id="logoBlolab" class="d-inline-block" src="/images/logo blolab.png" alt=""
							style="width: 100px; height: 40px;">
						<img id="logoGeo" class="d-inline-block ml-5" src="/images/logo geomad.png" alt=""
							style="width: 70px; height: 70px;">
					</div>
				</div>
				<div class="col-5 pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-2">
						<h2 class="ftco-heading-2 text-center">Blolab</h2>
						<p>Le BloLab est une ONG, un laboratoire de fabrication numérique et un
							espace de démocratisation technologique au service de l'innovation intervenant dans
							les domaines de l'éducation et du numérique.</p>
						<div class="block-23 mb-3">
							<ul>
								<li>
									<span class="icon fa fa-map-marker"></span>
									<span class="text">Cotonou, Kindonou,
										<br> 2ème immeuble après la pharmacie,
										<br> 3ème étage</span>
								</li>
								<!-- <li><span class="icon fa fa-map-marker"></span><span class="text">Porto-Novo, Qtier
                                        Houinmey, pharmacie Adjibadé, 3ème étage</span></li> -->
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+229 62 19 19
											35</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane"></span><span
											class="text">contact@blolab.org</span></a></li>
							</ul>
						</div>
						<ul class="ftco-footer-social list-unstyled text-center">
							<li class="ftco-animate"><a href="https://twitter.com/blolab_benin"><span
										class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="https://www.facebook.com/blolabbenin/"><span
										class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://blolab.org/"><span class="fa fa-globe"></span></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-4 pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-2">
						<h2 class="ftco-heading-2 text-center">Géom@d</h2>
						<p> GeomaD est une ONG spécialisée dans plusieurs domaines d'intervention.
							Elle mène des activités pluridisciplinaires dans le développement de la communauté
							et pour atteindre les objectifs du développement. </p>
						<div class="block-23 mb-3">
							<ul>
								<li><a href="#"><span class="icon fa fa-phone"></span>
										<span class="text">+ 229 66 87 60 89</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane"></span><span
											class="text">geomadong@gmail.com</span></a></li>
							</ul>
						</div>
						<ul class="ftco-footer-social list-unstyled text-center">
							<li class="ftco-animate"><a href="https://www.facebook.com/ONGGeomaD/
                                "><span class="fa fa-facebook"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">

				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved | This template
					is made with
					<i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
						target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="/js/jquery.min.js"></script>
	<script src="/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.easing.1.3.js"></script>
	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/js/jquery.stellar.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/jquery.animateNumber.min.js"></script>
	<script src="/js/bootstrap-datepicker.js"></script>
	<script src="/js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="/js/google-map.js"></script>
	<script src="/js/main.js"></script>
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

  	<script>
  		var mymap = L.map('mapid').setView([6.741554, 2.200832], 9);
		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		maxZoom: 18,
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1,
		accessToken: 'pk.eyJ1IjoiYmxvbGFiIiwiYSI6ImNrb2lpMXgxcjAyOW0ybm53c2diaXd3M2gifQ.YlZMG3REt5nEUhUdOIMKNw'
		}).addTo(mymap);
	</script>
    
</body>

</html>