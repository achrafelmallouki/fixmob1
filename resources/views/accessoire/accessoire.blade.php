<!DOCTYPE html>
<html lang="fr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>FixMob</title>
    <meta name="description" content="Réparation des telephones et tablettes">	
	<meta name="author" content="Achraf ELMALLOUKI">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	
	<!-- CSS
	================================================== -->
	
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>


<!-- Portfolio start -->
<section id="portfolio" class="portfolio portfolio-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading text-center">
					<span class="icon-pentagon wow bounceIn">
                    <img src="../img/access.png" alt="" width="27" height="27">
                    </span>
					<h2 class="title2">Accessoires
						<span class="title-desc">Découvrez Nos Accessoires</span>
					</h2><br><br>
                    <!-- Button -->
                    <a class="btn btn-success" href="{{ url('reparation/accessoire')}}" role="button" 
                        style="background-color:#F5F5F5 ; 
                                color: Blue; 
                                border: 3px solid black;"> 
                            
                  <b style="font-family: Times New Roman">&nbsp;&nbsp; VOIR TOUS LES ACCESSOIRES &nbsp;&nbsp;</b>
                </a> <!-- button--> <br> <br>
				</div>
			</div> <!-- Title row end -->
            
			<!--Isotope filter start -->
			<div class="row text-center">
				<div class="isotope-nav" data-isotope-nav="isotope">
                
					<ul>
						<li><a href="#" class="active" data-filter="*">Tous</a></li>
						<li><a href="#" data-filter=".protection">PROTECTION ÉCRAN</a></li>
						<li><a href="#" data-filter=".chargeur">CHARGEUR ET BATTERIE</a></li>
						<li><a href="#" data-filter=".carte">CARTE MÉMOIRE</a></li>
						<li><a href="#" data-filter=".cable">CÂBLE ET ADAPTATEUR</a></li>
						
					</ul>
                    
				</div>
			</div>
            
            <!-- Isotope filter end --> 
            <!-- *****************************    PROTECTION   ************************* -->
			<div class="row">
				<div id="isotope" class="isotope">
					<div class="col-sm-3 protection isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="../welcomenew/images/opy.jpg" alt="">
								<figcaption>
								

									<h3>PROTECTION ÉCRAN</h3>
									<a class="link icon-pentagon" href="{{url('reparation/accessoire')}}"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="../welcomenew/images/opy.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>			
							</figure>
						</div>
					</div><!-- Isotope item end -->
            
					<div class="col-sm-3 protection isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="../welcomenew/images/protection2.jpg" alt="">
								<figcaption>
									<h3>PROTECTION ÉCRAN</h3>
									<a class="link icon-pentagon" href="{{url('reparation/accessoire')}}"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="../welcomenew/images/protection2.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>			
							</figure>
						</div>
					</div><!-- Isotope item end -->

            <!-- *****************************    FIN PROTECTION   ************************* -->

            <!-- *****************************    Chargeur   ************************* -->

					<div class="col-sm-3 chargeur isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="../welcomenew/images/batterie.jpg" alt="">
								<figcaption>
									<h3>BATTERIE</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="../welcomenew/images/batterie.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 chargeur isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="../welcomenew/images/chargeur.jpg" alt="">
								<figcaption>
									<h3>CHARGEUR</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="../welcomenew/images/chargeur.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div><!-- Isotope item end -->
					
					<!-- ***********************     End Chargeur       ************************-->

                    <!-- *********************** Cable ********************-->
					<div class="col-sm-3 cable isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="../welcomenew/images/cable.jpg" alt="">
								<figcaption>
									<h3>Câble USB ADATA</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="../welcomenew/images/cable.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div>

                    <div class="col-sm-3 cable isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="../welcomenew/images/adaptateur.jpg" alt="">
								<figcaption>
									<h3>ADAPTATEUR SECTEUR</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="../welcomenew/images/adaptateur.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div>
					
					<!-- ********************    End Câble          ***************************-->

                    <!-- *********************** Carte mém **************************************-->
                    <div class="col-sm-3 carte isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="../welcomenew/images/cartemem.jpg" alt="">
								<figcaption>
									<h3>CARTE MEMOIRE</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="../welcomenew/images/cartemem.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div>
                    <!-- *********************** END Carte mém **************************************-->

				</div><!-- Isotope content end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio end -->




	</div><!-- Body inner end --> <br><br><br><br><br><br><br><br>
</body>
</html>
