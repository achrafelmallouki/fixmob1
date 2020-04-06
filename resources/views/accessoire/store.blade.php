


<!DOCTYPE html>

<head>
	<title>Accessoires</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../achat/css/main.css')}}">
<!--===============================================================================================-->


<!-- *************************Layouts****************************** -->
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
    

<!-- ***************************fin layouts**************************** -->
</head>
<!-- Header -->
<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Cash on delivery
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1" style="background-color:#55ACEE;">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{ url('/') }}" class="logo">
						<img src="{{asset('../welcomenew/images/fixm.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
                            <li></li><li></li><li></li><li></li><li></li>
                            <li></li><li></li><li></li><li></li><li></li>
                            <li></li><li></li><li></li><li></li><li></li>
                            
                            <li>
                            <a href="{{url('/store')}}">Accessoires</a>
							</li>
							<li>
								<a href="index.html">FixMob</a>
								<ul class="sub-menu">
									<li><a href="{{ route('login') }}">S'authentifier</a></li>
									<li><a href="{{ route('register') }}">S'identifier</a></li>
									
								</ul>
							</li>

							<li>
								<a href="index.html">Menu</a>
								<ul class="sub-menu">
									<li><a href="{{url('reparation/rep')}}">Faire une réparation</a></li>
									<li><a href="{{url('/store')}}">Accessoires</a></li>
                                    <li><a href="{{url('/avis')}}">Avis Client</a></li>
                                    <li><a href="{{url('/fixmob_services')}}">Nos services</a></li>
									
								</ul>
							</li>

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="{{url('/contact')}}">Contact Us</a>
							</li>
						</ul>
					</div>	

					
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile" style="background-color:#55ACEE;">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="{{url('/')}}"><img src="{{asset('../welcomenew/images/fixm.png')}}" alt="IMG-LOGO"></a>
			</div>

			

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile" >
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Cash on delivery
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

					</div>
				</li>
			</ul>

            <ul class="main-menu-m" style="background-color:#55ACEE;">
                           
                        <li>
                            <a href="product.html">Accessoires</a>
						</li>
							<li>
								<a href="index.html">FixMob</a>
								<ul class="sub-menu-m">
									<li><a href="index.html">S'authentifier</a></li>
									<li><a href="home-02.html">S'identifier</a></li>
									
								</ul>
                                <span class="arrow-main-menu-m">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </span>
							</li>

							<li>
								<a href="index.html">Menu</a>
								<ul class="sub-menu-m">
									<li><a href="index.html">Faire une réparation</a></li>
									<li><a href="home-02.html">Accessoires</a></li>
                                    <li><a href="home-02.html">Avis Client</a></li>
                                    <li><a href="home-02.html">Nos services</a></li>
									
								</ul>
                                <span class="arrow-main-menu-m">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </span>
							</li>

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.html">Contact Us</a>
							</li>
						</ul>
			
		</div>

		
	</header>

<br><br><br>

    <fieldset><center><legend>Bienvenue dans notre Store </legend></center></fieldset>


<body class="animsition">
		            <br><br><br><br>
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			
			<div class="row isotope-grid">
<style>
h6{display : none;}
</style>
               
@foreach($accessoires as $accessoire)

<h6>{{$id=$accessoire->id_accessoire}}  </h6> 

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{ asset('storage/' .$accessoire->photo_accessoire) }}" alt="IMG-PRODUCT" width="200" height="200">

							<a href="" target="_blank"
                                    class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								FixMob
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$nom=$accessoire->nom_accessoire}} 
								</a>

								<span class="stext-105 cl3">
                                {{$prix=$accessoire->prix_accessoire}}  dhs
								</span>
                                <strike> {{$prix_ancien=$accessoire->ancienprix_accessoire}} dhs </strike>
                                <span class="stext-105 cl3">
                                Référence : {{$ref_accessoire=$accessoire->reference_accessoire}}
								</span>

                                <a href="{{ url('accessoire/' . $id .'/details') }}" target="_blank"
                                    class="btn btn-success">
									Détails
							    </a>
								
							</div>
							
						</div>
					</div>                    
				</div>
@endforeach

                

                
				

</div></div>
<!-- foooooooooooter -->
<!-- Footer start -->
<br/><br/><br/><br/><br/><br/><br/><br/>
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
		   
		</div><!--/ Container end -->
	</section><!--/ Footer end -->
<!-- End fooooooooooooooooooooter -->

</body>
</html>

<!-- ******************************************************* -->
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


<!-- ******************************************************* -->



<!--===============================================================================================-->	
<script src="{{asset('../achat/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('../achat/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('../achat/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/vendor/slick/slick.min.js')}}"></script>
	<script src="js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/vendor/parallax100/parallax100.js')}}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/sweetalert/sweetalert.min.js')}}"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('../achat/js/main.js')}}"></script>

