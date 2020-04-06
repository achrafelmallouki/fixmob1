<!DOCTYPE html>
<html lang="fr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>FixMob | Réparation des téléphones et tablettes</title>
    <meta name="description" content="Réparation des téléphones et tablettes">	
	<meta name="author" content="Achraf ELMALLOUKI">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="{{asset('../img/iconrep.png')}}" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('../welcomenew/css/bootstrap.min.css')}}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{asset('../welcomenew/css/style.css')}}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{asset('../welcomenew/css/responsive.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{asset('../welcomenew/css/font-awesome.min.css')}}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{asset('../welcomenew/css/animate.css')}}">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="{{asset('../welcomenew/css/prettyPhoto.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('../welcomenew/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('../welcomenew/css/owl.theme.css')}}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{asset('../welcomenew/css/flexslider.css')}}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{asset('../welcomenew/css/cd-hero.css')}}">
	<!-- Style Swicther -->
	<link id="style-switch" href="{{asset('../welcomenew/css/presets/preset1.css')}}" media="screen" 
																			rel="stylesheet" type="text/css">

</head>
	
<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h4>Réparer votre téléphone</h4>
		<a class="btn btn-sm btn-primary close-styler pull-right" href="{{ url('reparation/rep')}}">Réparer</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">
	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header2" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				    
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>


				    <div class="navbar-brand">
					    <a href="{{url('/')}}">
						 	<img class="" style="" src="{{asset('../welcomenew/images/fixm.png')}}" alt="logo">
							<!--<p style="font-weight: bold; color:white; letter-spacing: 3px; top: 140px;">
							<k style="font-weight: bold; color:white; font-size: 20px;">F</k>ix &nbsp;
							<o style="font-weight: bold; color:white; font-size: 20px;">M</o>ob
							</p>-->
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->

				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
										
						<li class="dropdown">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							   <img src="../img/call.png" width="20" height="20"> &nbsp; (+212) 618049852 
							</a>
                       	</li>
						
                        <li><a href="{{ url('/store')}}">Accessoires</a></li>
	                    
	                    <li class="dropdown">
                       		<a href="{{ route('login') }}" class="dropdown-toggle" data-toggle="dropdown">Mon FixMob <i class="fa fa-angle-down">
						</i></a>
						
                       		<div class="dropdown-menu">
								<ul>
										<li><a href="{{ route('login') }}">S'autentifier</a></li>
										<li><a href="{{ route('register') }}">S'identifier</a></li>
		                        </ul>
	                    	</div>
	                    </li>
            			
                        <li class="dropdown">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU <!--<img src="../img/menu2.png" width="20" height="20">--><i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                           	<li><a href="{{ url('reparation/rep')}}">Faire une réparation</a></li>
		                           	<li><a href="{{ url('reparation/accessoire')}}">Accessoires</a></li>
		                           	<li><a href="{{ url('/')}}">Nos Services</a></li>
		                           	<li><a href="{{ url('/')}}">Qui sommes Nous? </a></li>
		                           	<li><a href="{{ url('/')}}">Avis Clients</a></li>
		                           	<li><a href="{{ url('/contact')}}">Contact Us</a></li>
		                        </ul>
	                    	</div>
							<li><a href="{{ url('/contact')}}">Contact</a></li>
	                    </li>
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->

	<!-- Slider start -->
	<section id="home" class="no-padding">	

    	<div id="main-slide" class="ts-flex-slider">

			<div class="flexSlideshow flexslider">
				<ul class="slides">
					<li>
						<div class="overlay2">
							<img class="" src="{{asset('../welcomenew/images/slider/bg22.png')}}" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
	                    		<h2 class="animated2">
	                        		Réparer votre mobile
	                        	</h2>
	                            <h3 class="animated3">
	                            	Aujourd'hui, la réparation dans le FixMob, où vous voulez !! 
	                            </h3>
	                            <p class="animated4">
								
								<a style="font-family: Times New Roman" target="_blank" href="{{ url('reparation/rep')}}" class="slider btn btn-primary white">
																		&nbsp;&nbsp;Demande de réparation &nbsp;&nbsp;</a></p>
	                        </div>
	                    </div>
					</li>
					<li>
						<div class="overlay2">
							<img class="" src="{{asset('../welcomenew/images/slider/bg2.jpg')}}" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
	                            <h2 class="animated4">
	                                Garantie
	                            </h2>
	                            <h3 class="animated5">
								Les réparateurs formés n'utilisent que des pièces de la plus haute qualité avec une garantie de 12 mois
	                            </h3>		
	                            <p class="animated6"><a style="font-family: Times New Roman" target="_blank" href="{{ url('reparation/rep')}}" class="slider btn btn-primary white">
																		&nbsp;&nbsp;Demande de réparation &nbsp;&nbsp;</a></p>	     
	                        </div>
	                    </div>
					</li>
					<li>
						<div class="overlay2">
							<img class="" src="{{asset('../welcomenew/images/slider/bg1.jpg')}}" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
	                            <h2 class="animated7">
	                                Sécurisation des données
	                            </h2>
	                            <h3 class="animated8">
	                            	Nos techniciens sont sensibilisés aux respect de la vie privée des clients et ne se permettront jamais de fouiller dans leurs appareils.
	                            </h3>		
	                            <div class="">
	                                <a class="animated4 slider btn btn-primary btn-min-block white" target="_blank" href="{{ url('reparation/rep')}}" style="font-family: Times New Roman" >&nbsp;&nbsp;Demande de réparation &nbsp;&nbsp;</a>
									
	                            </div>     
	                        </div>
	                    </div>
					</li>
					<li>
						<div class="overlay2">
							<img class="" src="{{asset('../welcomenew/images/slider/bg5.jpg')}}" alt="slider">
						</div>
						<div class="flex-caption slider-content">
	                        <div class="col-md-12 text-center">
	                            <h2 class="animated7">
	                                Satisfaction des clients 
	                            </h2>
	                            <h3 class="animated8">
	                            	La réparation des appareils mobiles nécessite des soins et une précision militaire
	                            </h3>		
	                            <div class="">
	                                <a class="animated4 slider btn btn-primary btn-min-block white" target="_blank" href="{{ url('reparation/rep')}}" style="font-family: Times New Roman" >&nbsp;&nbsp;Demande de réparation &nbsp;&nbsp;</a>
									
	                            </div>     
	                        </div>
	                    </div>
					</li>
				</ul>
			</div>
		</div><!--/ Main slider end -->    	
    </section> <!--/ Slider end -->


	@include('accessoire.services')
	@include('accessoire.techn')
	
	@include('accessoire.accessoire')
	@include('accessoire.avis') <br> <br> <br> <br>
	@include('layouts.footer')

<!-- Fin après nos services -->


	<!-- Testimonial start
	<section class="testimonial parallax parallax3">
		<div class="parallax-overlay"></div>
	  	<div class="container">
		    <div class="row">
			    <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
			        <div class="item">
			          	<div class="testimonial-thumb">
			            	<img src="../img/busn.png" alt="business" width="20" height="20">
			          	</div>
			          	<div class="testimonial-content">
				            <p class="testimonial-text">
										Business FixMob
				            </p>
			            	<h3 class="name">En tant que client professionnel, <br/>
			<span>vous bénéficiez de nombreux avantages avec Fixbus. Les téléphones intelligents et les tablettes sont presque indispensables dans la vie quotidienne en danger. Être accessible pour les clients, les fournisseurs et les employés est important pour chaque entrepreneur. FixMob répare votre appareil et votre tablette, où que vous soyez aux Pays-Bas, pour que vous puissiez être contacté à tout moment pour vos clients, fournisseurs et employés</span>
							</h3>
			          	</div>
			        </div>
					
			        
			        
			    </div>
		    </div>
	  	</div>
	</section>-->


	
	

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/jquery.js')}}"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/bootstrap.min.js')}}"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/style-switcher.js')}}"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/owl.carousel.js')}}"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/jquery.prettyPhoto.js')}}"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/jquery.flexslider.js')}}"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/cd-hero.js')}}"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/isotope.js')}}"></script>
	<script type="text/javascript" src="{{asset('../welcomenew/js/ini.isotope.js')}}"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/wow.min.js')}}"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/smoothscroll.js')}}"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/jquery.easing.1.3.js')}}"></script>
	<!-- Counter -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/jquery.counterup.min.js')}}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/waypoints.min.js')}}"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="{{asset('../welcomenew/js/custom.js')}}"></script>
	</div><!-- Body inner end -->
</body>
</html>