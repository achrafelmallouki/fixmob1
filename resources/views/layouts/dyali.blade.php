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
	



	<div class="body-inner">
	<!-- Header start -->
	<header id="" class="navbar-fixed-top" role="banner"   style="background-color:#55ACEE;">
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


				    <div class="navbar-brand" style="background-color:#55ACEE;">
					    <a href="{{url('/')}}">
						 	<img class="" style="" src="{{asset('../welcomenew/images/fixm.png')}}" alt="logo">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->

				<nav class="collapse navbar-collapse clearfix" role="navigation">
              



               
                <!-- ************************* -->
					<ul class="nav navbar-nav navbar-right">
										
						<li class="dropdown">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							   <img src="{{asset('../img/call.png')}}" width="20" height="20"> &nbsp; (+212) 618049852 
							</a>
                       	</li>
						
                        <li><a href="{{ url('reparation/accessoire')}}">Accessoires</a></li>
	                    


                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                        @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                                </li>
                        @endif
                            
                        @else
                            <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
										<li><a  href="{{ url('/home') }}">
                                            {{ __('Mon compte') }}
                                        </a></li>
										
                                        <li><a  href="{{ route('logout') }}"
                                       	onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        	{{ __('Déconnexion') }}
                                        </a></li>
										
                                    </ul>
									
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            @endguest            
                                  
            			
                        <li class="dropdown">
                       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">MENU <!--<img src="../img/menu2.png" width="20" height="20">--><i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                           	<li><a href="{{ url('reparation/rep')}}">Faire une réparation</a></li>
		                           	<li><a href="{{ url('reparation/accessoire')}}">Accessoires</a></li>
		                           	<li><a href="{{ url('/')}}">Nos Services</a></li>
		                           	<li><a href="{{ url('/')}}">Qui sommes Nous? </a></li>
		                           	<li><a href="{{ url('/')}}">Avis Clients</a></li>
		                           	<li><a href="{{ url('/')}}">Contact Us</a></li>
		                        </ul>
	                    	</div>
							<li><a href="{{ url('/')}}">Contact</a></li>
	                    </li>
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->

<body>
<br/><br/><br/><br/><br/>
<!--<main class="py-4"> 
           
</main>-->
@yield('content')
	

<br/><br/><br/><br/>
<!-- Footer start -->
<section id="copyright" class="copyright angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="footer-social unstyled">
						<li>
							<a title="Twitter" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Facebook" href="{{url('https://www.facebook.com')}}">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="linkedin" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
							</a>
							<a title="Pinterest" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
							</a>
							<a title="Skype" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
							</a>
							<a title="Dribble" href="#">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
							</a>
						</li>
					</ul>
				</div>
			</div><!--/ Row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info">
         			 &copy; Copyright 2019 FixMob - Tous les droits réservés </a>
        			</div>
				</div>
			</div><!--/ Row end -->
		   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
			</div>
		</div><!--/ Container end -->
	</section><!--/ Footer end -->

	
	

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