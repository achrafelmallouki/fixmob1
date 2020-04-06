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
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../welcomenew/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="../welcomenew/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="../welcomenew/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="../welcomenew/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="../welcomenew/css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="../welcomenew/css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../welcomenew/css/owl.carousel.css">
	<link rel="stylesheet" href="../welcomenew/css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../welcomenew/css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../welcomenew/css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="../welcomenew/css/presets/preset1.css" media="screen" rel="stylesheet" type="text/css">

</head>
<body >



	<div class="body-inner" >
	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header2" role="banner" style ="background-color:gray">
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
					    	<img class="img-responsive" src="../welcomenew/images/logo.png" alt="logo">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
										
						<li class="dropdown">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../img/call.png" width="20" height="20"> &nbsp; (+212) 618049852 <i class="fa fa-angle-down"></i></a>
                       	</li>

                        <li><a href="{{url('reparation/accessoire')}}">Accessoires</a></li>
	                    
	                    <li class="dropdown">
                       		<a href="{{ route('login') }}" class="dropdown-toggle" data-toggle="dropdown">Mon FixMob <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                           	 <li><a href="{{ route('login') }}">S'autentifier</a></li>
	                            	<li><a href="{{ route('register') }}">S'identifier</a></li>
		                        </ul>
	                    	</div>
	                    </li>
            			<li><a href="contact.html">Contact</a></li>
                        <li class="dropdown">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU <img src="../img/menu2.png" width="20" height="20"><i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                           	<li><a href="team.html">Faire une réparation</a></li>
		                           	<li><a href="about2.html">Accessoires</a></li>
		                           	<li><a href="service2.html">Nos Services</a></li>
		                           	<li><a href="service-single.html">Qui sommes Nous? </a></li>
		                           	<li><a href="pricing.html">Avis Clients</a></li>
		                           	<li><a href="404.html">Contact Us</a></li>
		                        </ul>
	                    	</div>
	                    </li>
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->


@yield('content')


@include('layouts.footer')


<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="../welcomenew/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="../welcomenew/js/bootstrap.min.js"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="../welcomenew/js/style-switcher.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="../welcomenew/js/owl.carousel.js"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="../welcomenew/js/jquery.prettyPhoto.js"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="../welcomenew/js/jquery.flexslider.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="../welcomenew/js/cd-hero.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="../welcomenew/js/isotope.js"></script>
	<script type="text/javascript" src="../welcomenew/js/ini.isotope.js"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="../welcomenew/js/wow.min.js"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="../welcomenew/js/smoothscroll.js"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="../welcomenew/js/jquery.easing.1.3.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="../welcomenew/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="../welcomenew/js/waypoints.min.js"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="../welcomenew/js/custom.js"></script>
	</div><!-- Body inner end -->
</body>
</html>