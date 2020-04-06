<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
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
</head>
<body class="animsition">
	
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
					<a href="{{url('/')}}" class="logo">
						<img src="{{asset('../welcomenew/images/fixm.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
                            <li></li><li></li><li></li><li></li><li></li>
                            <li></li><li></li><li></li><li></li><li></li>
                            <li></li><li></li><li></li><li></li><li></li>
                            
                            <li>
                            <a href="product.html">Accessoires</a>
							</li>
							<li>
								<a href="index.html">FixMob</a>
								<ul class="sub-menu">
									<li><a href="index.html">S'authentifier</a></li>
									<li><a href="home-02.html">S'identifier</a></li>
									
								</ul>
							</li>

							<li>
								<a href="index.html">Menu</a>
								<ul class="sub-menu">
									<li><a href="index.html">Faire une réparation</a></li>
									<li><a href="home-02.html">Accessoires</a></li>
                                    <li><a href="home-02.html">Avis Client</a></li>
                                    <li><a href="home-02.html">Nos services</a></li>
									
								</ul>
							</li>

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.html">Contact Us</a>
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

		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">

            @foreach($accessoires as $accessoire)
				<div class="col-md-6 col-lg-7 p-b-30">
				
					<div class="slick3 gallery-lb">
								
									<div class="wrap-pic-w pos-relative">
										<img src="{{ asset('storage/' .$accessoire->photo_accessoire) }}" alt="IMG-PRODUCT" width="570px" height="570px">

				<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('storage/' .$accessoire->photo_accessoire) }}">
						<i class="fa fa-expand"></i>
										</a>
									</div>
						
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						

                        <div class="alert alert-success" role="alert">
                                <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                {{$nom=$accessoire->nom_accessoire}} 
                                </h4>
                        </div>

						<span class="mtext-106 cl2">
                        Le prix : {{$prix=$accessoire->prix_accessoire}} DHS
						</span>

                        <br><br><br>
                        
                        <div class="alert alert-warning" role="alert">
                                <span class="mtext-106 cl2">
                                La référence du produit : {{$ref=$accessoire->reference_accessoire}}
                                </span>
                        </div>


						<p class="stext-102 cl3 p-t-23">
						{{$nom=$accessoire->nom_accessoire}} | {{$description=$accessoire->description_accessoire}} 
						</p>
						
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>

					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
                                {{$nom=$accessoire->nom_accessoire}} | {{$description=$accessoire->description_accessoire}} 
								</p>
							</div>
						</div>

						
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Weight
											</span>

											<span class="stext-102 cl6 size-206">
												0.79 kg
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Dimensions
											</span>

											<span class="stext-102 cl6 size-206">
												110 x 33 x 100 cm
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Materials
											</span>

											<span class="stext-102 cl6 size-206">
												60% cotton
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Color
											</span>

											<span class="stext-102 cl6 size-206">
												Black, Blue, Grey, Green, Red, White
											</span>
										</li>

										
									</ul>
								</div>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	@endforeach
</section>



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

</body>
</html>