@foreach($articles as $article)
    <div class="col-md-4 ftco-animate">
        <div class="project-wrap">
            <a href="/actualite/{{ $arcticle->slug }}" class="img" style="background-image: url('{{ $article->imageArticle }}');">
                <span class="price">{{ $article->dateArticle }}</span>
            </a>
            <div class="text p-4">
                <h3 class="heading text-center"><a href="/actualite/{{ $arcticle->slug }}">{{ $article->titleArticle }}</a></h3>
                <p>{{ $article->summaryArticle }}</p>
                <p class="text-center"><a href="/actualite/{{ $arcticle->slug }}" class="btn btn-primary">Lire la suite</a></p>
            </div>
        </div>
    </div>
@endforeach


<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Les derniers</span>
                    <h2 class="mb-4">actualités et événements</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('images/voodoo danse.jpg');">
                            <span class="price">10 janvier 2022</span>
                        </a>
                        <div class="text p-4">
                            <h3 class="heading text-center"><a href="#">Fête nationale du Vodou</a></h3>
                            <p>La fête nationale de vodoun est célébrée chaque année le 10 janvier au Bénin, notamment à
                                Ouidah ou Grand-Popo sur la plage entre le fleuve Mono et le golfe de Guinée.</p>
                            <p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('images/stade.jpg');"
                            data-toggle="tooltip" data-placement="top" title="Photo de Sdansou">
                            <span class="price">10 janvier 2022</span>
                        </a>
                        <div class="text p-4">
                            <h3 class="heading text-center"><a href="#">Rencontre sportive</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quas nam voluptas
                                ipsum illo beatae dolorum vel et sed, quia, ducimus eos dolores placeat amet aspernatur
                                soluta fugiat saepe? Doloremque?</p>
                            <p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('images/cotonou.jpg');">
                            <span class="price">10 janvier 2022</span>
                        </a>
                        <div class="text p-4">
                            <h3 class="heading text-center"><a href="#">Exposition</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quas nam voluptas
                                ipsum illo beatae dolorum vel et sed, quia, ducimus eos dolores placeat amet aspernatur
                                soluta fugiat saepe? Doloremque?</p>
                            <p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate mt-5">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('images/voodoo danse.jpg');">
                            <span class="price">10 janvier 2022</span>
                        </a>
                        <div class="text p-4">
                            <h3 class="heading text-center"><a href="#">Fête nationale du Vodou</a></h3>
                            <p>La fête nationale de vodoun est célébrée chaque année le 10 janvier au Bénin, notamment à
                                Ouidah ou Grand-Popo sur la plage entre le fleuve Mono et le golfe de Guinée.</p>
                            <p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate mt-5">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('images/stade.jpg');"
                            data-toggle="tooltip" data-placement="top" title="Photo de Sdansou">
                            <span class="price">10 janvier 2022</span>
                        </a>
                        <div class="text p-4">
                            <h3 class="heading text-center"><a href="#">Rencontre sportive</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quas nam voluptas
                                ipsum illo beatae dolorum vel et sed, quia, ducimus eos dolores placeat amet aspernatur
                                soluta fugiat saepe? Doloremque?</p>
                            <p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate mt-5">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('images/cotonou.jpg');">
                            <span class="price">10 janvier 2022</span>
                        </a>
                        <div class="text p-4">
                            <h3 class="heading text-center"><a href="#">Exposition</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quas nam voluptas
                                ipsum illo beatae dolorum vel et sed, quia, ducimus eos dolores placeat amet aspernatur
                                soluta fugiat saepe? Doloremque?</p>
                            <p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate mt-5">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('images/voodoo danse.jpg');">
                            <span class="price">10 janvier 2022</span>
                        </a>
                        <div class="text p-4">
                            <h3 class="heading text-center"><a href="#">Fête nationale du Vodou</a></h3>
                            <p>La fête nationale de vodoun est célébrée chaque année le 10 janvier au, notamment à
                                Ouidah ou Grand-Popo sur la plage entre le fleuve Mono et le golfe de Guinée.</p>
                            <p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate mt-5">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('images/stade.jpg');"
                            data-toggle="tooltip" data-placement="top" title="Photo de Sdansou">
                            <span class="price">10 janvier 2022</span>
                        </a>
                        <div class="text p-4">
                            <h3 class="heading text-center"><a href="#">Rencontre sportive</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quas nam voluptas
                                ipsum illo beatae dolorum vel et sed, quia, ducimus eos dolores placeat amet aspernatur
                                soluta fugiat saepe? Doloremque?</p>
                            <p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate mt-5">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url('images/cotonou.jpg');">
                            <span class="price">10 janvier 2022</span>
                        </a>
                        <div class="text p-4">
                            <h3 class="heading text-center"><a href="#">Exposition</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quas nam voluptas
                                ipsum illo beatae dolorum vel et sed, quia, ducimus eos dolores placeat amet aspernatur
                                soluta fugiat saepe? Doloremque?</p>
                            <p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </div>
                </div>
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










    @foreach($sites as site)
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('images/tissus.jpg');"></a>
            <div class="text p-4">
              <h3><a href="#">{{ $site->titleSite }}</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> {{ $site->locationSite }}</p>
              <p>{{ $site->summarySite }}</p>
              <p class="text-center"><a href="#">En savoir plus</a></p>
            </div>
          </div>
        </div>
      </div>
@endforeach

<section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('images/tissus.jpg');"></a>
            <div class="text p-4">
              <h3><a href="#">Marché Dantokpa</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Bd Saint-Michel, Cotonou</p>
              <p>Plus grand marché à ciel ouvert de l'Afrique de l'Ouest. La renommée du marché est sous-régionale voire
                internationale.</p>
              <p class="text-center"><a href="#">En savoir plus</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('images/porte.jpg');"></a>
            <div class="text p-4">
              <h3><a href="#">Porte du Non-Retour</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Ouidah</p>
              <p>Arc mémorial qui commémore la déportation des esclaves noirs pour les Amériques lors de la traite
                négrière.</p>
              <p class="text-center"><a href="#">En savoir plus</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('images/dock.jpg');"></a>
            <div class="text p-4">
              <h3><a href="#">Bab's Dock</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Houndodji, Cococodji</p>
              <p>Magnifique petit restaurant, au bord d’une lagune. On y accède en bateau en passant par une jungle
                de mangrove.</p>
              <p class="text-center"><a href="#">En savoir plus</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate mt-5">
          <div class="project-wrap">
            <a href="ganvie" class="img" style="background-image: url('images/cite-lacustre.jpg');"></a>
            <div class="text p-4">
              <h3><a href="ganvie">Ganvié</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Lac Nokoué</p>
              <p>Cité lacustre du sud du Bénin inscrite depuis 1996 sur la liste indicative de l'UNESCO.</p>
              <p class="text-center"><a href="ganvie">En savoir plus</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate mt-5">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('images/temple.jpg');"></a>
            <div class="text p-4">
              <h3><a href="#">Temple des Pythons</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Ouidah</p>
              <p>Sanctuaire vaudou consacré au culte du python, protecteur et serviteur de la ville de Ouidah.
              </p>
              <p class="text-center"><a href="#">En savoir plus</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate mt-5">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('images/peche.jpg');"></a>
            <div class="text p-4">
              <h3><a href="#">Lac Ahémé</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Lac Ahémé</p>
              <p>Les villages riverains abritent une population vivant de la pêche et de l'agriculture.</p>
              <p class="text-center"><a href="#">En savoir plus</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate mt-5">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('images/savane.jpg');"></a>
            <div class="text p-4">
              <h3><a href="#">Parc National de la Pendjari</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Atacora</p>
              <p>Le parc national de la Pendjari est le plus beau et le plus important parc faunique d'Afrique de
                l'Ouest. Il fait partie du complexe W-Arly-Pendjarie, réserve de biosphère de l'Unesco.</p>
              <p class="text-center"><a href="#">En savoir plus</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate mt-5">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('images/abomey.jpg');"></a>
            <div class="text p-4">
              <h3><a href="#">Musée historique d'Abomey</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Abomey</p>
              <p>Le Musée historique d'Abomey (capitale du royaume de Dahomey de 1625 à 1894) est un ensemble de
                palais royaux inscrits au patrimoine mondial de l'humanité par l'UNESCO.</p>
              <p class="text-center"><a href="#">En savoir plus</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate mt-5">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url('images/mosquee.jpg');" data-toggle="tooltip"
              data-placement="top" title="Photo de Gildaskiki"></a>
            <div class="text p-4">
              <h3><a href="#">Grande Mosquée de Porto-Novo</a></h3>
              <p class="location"><span class="fa fa-map-marker"></span> Porto-Novo</p>
              <p>D'un style afro-brésilien, cette mosquée est également le reflet de la transformation urbaine,
                économique et social de Porto-Novo après l'abolition de l'esclavage.</p>
              <p class="text-center"><a href="#">En savoir plus</a></p>
            </div>
          </div>
        </div>
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

  <div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('images/tissus.jpg');"></a>
						<div class="text p-4">
							<h3><a href="#">Marché Dantokpa</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Bd Saint-Michel, Cotonou</p>
							<p>Plus grand marché à ciel ouvert de l'Afrique de l'Ouest. La renommée du marché est
								sous-régionale voire
								internationale.</p>
							<p class="text-center"><a href="#">En savoir plus</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('images/porte.jpg');"></a>
						<div class="text p-4">
							<h3><a href="#">Porte du Non-Retour</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Ouidah</p>
							<p>Arc mémorial qui commémore la déportation des esclaves noirs pour les Amériques lors de
								la traite
								négrière.</p>
							<p class="text-center"><a href="#">En savoir plus</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('images/dock.jpg');"></a>
						<div class="text p-4">
							<h3><a href="#">Bab's Dock</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> Houndodji, Cococodji</p>
							<p>Magnifique petit restaurant, au bord d’une lagune. On y accède en bateau en passant par
								une jungle
								de mangrove.</p>
							<p class="text-center"><a href="#">En savoir plus</a></p>
						</div>
					</div>
				</div>


        <div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('images/voodoo danse.jpg');">
							<span class="price">10 janvier 2022</span>
						</a>
						<div class="text p-4">
							<h3 class="heading text-center"><a href="#">Fête nationale du Vodou</a></h3>
							<p>La fête nationale de vodoun est célébrée chaque année le 10 janvier au Bénin, notamment à
								Ouidah ou Grand-Popo sur la plage entre le fleuve Mono et le golfe de Guinée.</p>
							<p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('images/stade.jpg');"
							data-toggle="tooltip" data-placement="top" title="Photo de Sdansou">
							<span class="price">10 janvier 2022</span>
						</a>
						<div class="text p-4">
							<h3 class="heading text-center"><a href="#">Rencontre sportive</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quas nam voluptas
								ipsum illo beatae dolorum vel et sed, quia, ducimus eos dolores placeat amet aspernatur
								soluta fugiat saepe? Doloremque?</p>
							<p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url('images/cotonou.jpg');">
							<span class="price">10 janvier 2022</span>
						</a>
						<div class="text p-4">
							<h3 class="heading text-center"><a href="#">Exposition</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quas nam voluptas
								ipsum illo beatae dolorum vel et sed, quia, ducimus eos dolores placeat amet aspernatur
								soluta fugiat saepe? Doloremque?</p>
							<p class="text-center"><a href="#" class="btn btn-primary">Lire la suite</a></p>
						</div>
					</div>
				</div>