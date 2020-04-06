@extends('layouts.dyali')

@section('content')
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!--<![endif]--><!-- BEGIN HEAD --><head>
	




	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/fonts/gilroy/stylesheet.css?3')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/bootstrap.css?3')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/slick.css?3')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/slick-theme.css?3')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/lightslider.min.css?3')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/material.css?3')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/hamburgers.css?3')}}">
	
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/responsive.css?3')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/animate.min.css?3')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/font-awesome.css?3')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/css/style.css?3')}}">


	<meta name="theme-color" content="#ffffff">
	
<style> 

</style>

<body class="dash bookingpage">

<div class="wrapper">
	<div class="container-fluid">
		<div class="wrapper-overlay"></div>
		<div class="row">
			<div class="multi-container">
				<div class="col-xs-12 col-md-12">

					<div class="step-progress">
						<div class="step-content">	

							<!--- *********************************************Adresse du client ********* -->
							<div id="location" class="step-content-body">
								<div class="row">
									<br>
									<div class="col-xs-12 col-md-12">
										<div class="row" id="overviewScreen2">
											<div class="col-xs-12 col-md-7">
												<div class="col-xs-12 col-md-12" align="center">
													<h3 style="padding: 0px; text-align: center; font-size: 1.5em; font-weight: bold;">Informations du client</h3>
												</div>
												<div style="clear: both;"></div>
												<div class="col-xs-3 col-md-2" align="center">
													<img src="{{asset('../img/info.png')}}" width="40" height="40"><br>
												</div>
												<div class="col-xs-9 col-md-10" align="left" style="padding: 10px; font-size: 14px;">
												<b>Entrez les détails de votre adresse pour la disponibilité dans votre région.</b>
												</div>
												<div class="clearboth"></div>
												<br>
						
						<form action="{{ url('addreparation') }}" method="POST" enctype="">

													<div id="viewErrorMsg"></div>
													<div class="col-xs-12 col-md-12">
														<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
															<div class="input-group" style="background-color: #ffffff; border-style: none;">
																<span class="input-group-addon has-feedback" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;"  class="form-control" placeholder="Nom ">
																
																</span>
																<span class="input-group-addon  has-feedback" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;"  class="form-control" placeholder="Prénom">
																	
																</span>
																
															</div>
														</div>
														<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
															<div class="input-group" style="background-color: #ffffff; border-style: none;">
																<span class="input-group-addon has-feedback" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;"  class="form-control" placeholder="N° Tél ">
																
																</span>
																<span class="input-group-addon  has-feedback" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;"  class="form-control" placeholder="Votre Cin">
																	
																</span>
																
															</div>
														</div>
														
														<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
															<div class="input-group" style="background-color: #ffffff; border-style: none;">
																<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;" class="form-control" placeholder="Adresse">
																</span>
															</div>
														</div>

<!-- Date de réparation --> 
														<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
															<div class="input-group" style="background-color: #ffffff; border-style: none;">
																<span class="input-group-addon has-feedback" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="Date" style="border-style: none;"  class="form-control" >
																	
																</span>														
															</div>
														</div>
													<!-- ****************** Radios ****************** -->

															<fieldset >
															<legend>Choisir l'horaire: </legend>

																		<div>
																		<input type="radio" id="huey" name="drone" value="huey"
																				checked>
																		<label for="huey">08:00 : 12:00</label>
																		</div>

																		<div>
																		<input type="radio" id="dewey" name="drone" value="dewey">
																		<label for="dewey">14:00 : 20:00</label>
																		</div>

															</fieldset>

													<!--fin date de réparation -->

   												
														<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
															<div class="input-group" style="background-color: #ffffff; border-style: none;">
																<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<textarea style="border-style: none;" id="notes" class="form-control" placeholder="Plus des détails.." rows="6"></textarea>
																</span>
															</div>
														</div>
													</div>
													<p class="adressresponse"></p>
													<div align="center">
														<button type="button" name="prev" class="btn btn-vorige" style="padding: 10px; width: 120px; margin: 5px;"> Retour</button>
														<button id="searchlocation" onclick="void(0);" type="button" class="btn btn-primary" style="padding: 10px; width: 120px; margin: 5px;">Confirmer </button>
													</div>
												</form>
												<div class="clearboth"></div>
												<br>
											</div>
							<!-- ******************************** Fin de Adresse Client *********************************************** -->
											<div class="col-xs-12 col-md-5">
												<div class="repairings">
													<h3 style="margin-top: 0px;">Réparation</h3>
													<div class="col-md-1  col-xs-12">
														<div style="border-style: solid; text-align: center; background-color: #55ACEE; color: #ffffff; border-color: #55ACEE; border-radius: 50%; width: 23px; height: 23px;"><b>1</b></div>
													</div>
													<div class="col-md-8  col-xs-8 productinfo">Samsung - Galaxy S6 Edge<small> Mosgroen</small><br><span>Compleet scherm reparatie</span></div>
													<div class="col-md-3  col-xs-4 productprice alignRight">€ 269.00</div>
													<div class="clearboth"></div>
													<br>
													<div class="col-md-1 col-xs-12">
														<div style="border-style: solid; text-align: center; background-color: #55ACEE; color: #ffffff; border-color: #55ACEE; border-radius: 50%; width: 23px; height: 23px;"><b>2</b></div>
													</div>
													<div class="col-md-8 col-xs-8">
														<span class="address">Informations du client </span><br>
														
													</div>
													
													
													<div class="clearboth"></div>
													<br>

													<div class="col-md-1  col-xs-12">
														<div style="border-style: solid; text-align: center; background-color: #898989; color: #ffffff; border-color: #898989; border-radius: 50%; width: 23px; height: 23px;"><b>3</b></div>
													</div>
													<div class="col-md-8  col-xs-8 greyedout">
														Accessoire
													</div>

													
													<div class="clearboth"></div>
													<br>
													<div class="col-md-1  col-xs-12">
														<div style="border-style: solid; text-align: center; background-color: #898989; color: #ffffff; border-color: #898989; border-radius: 50%; width: 23px; height: 23px;"><b>4</b></div>
													</div>
													<div class="col-md-8 greyedout  col-xs-8">
														Hoe ben je te bereiken?
													</div>

													<div class="col-md-3  col-xs-4 greyedout alignRight">
														
													</div>
													<div class="clearboth"></div>
													<br>
													<p class="voldoen" style="border-color: #BABABA;">
														<b>Coût de réparation Total :
														<span class="productprice">2 dhs</span></b>
													</p>
													<div align="center">
														<button type="button" name="prev" class="btn btn-vorige" style="padding: 10px; width: 120px; margin: 5px;"> Retour</button>
														<button id="searchlocation2" onclick="void(0);" type="button" class="btn btn-primary" style="padding: 10px; width: 120px; margin: 5px;">Confirmer</button>
													</div><br>
												</div>
												<br>
<!--   Fiiiin de Réparation ******************************************************** -->
												<!-- Contact US ********************************* -->
												<div class="repairings">
													<h3 style="margin-top: 0px;">Neem contact op</h3>
													<div class="col-md-2 greyedout alignLeft">
														<i class="fa fa-phone fa-2x" aria-hidden="true" style="margin-top: 5px;"></i>
													</div>
													<div class="col-md-10 greyedout alignLeft">
														<b style="color: #204076;">0800 - 1567 (Gratis)</b><br>
														Vandaag geopend tussen 09.00 - 21.00
													</div>
													<div class="clearboth"></div>
													<br>
													<div class="col-md-2 greyedout alignLeft">
														<i class="fa fa-envelope fa-2x" aria-hidden="true" style="margin-top: 5px;"></i>
													</div>
													<div class="col-md-10 greyedout alignLeft">
														Je kan ons ook e-mailen op<br>
														<b style="color: #204076;"><a href="mailto:service@fixbus.nl" style="text-decoration: none; color: #204076;">service@fixbus.nl</a></b><br>
													</div>
													<div class="clearboth"></div>
													<br>
													<div class="col-md-2 greyedout alignLeft">
														<i class="fa fa-comments fa-2x" aria-hidden="true" style="margin-top: 5px;"></i>
													</div>
													<div class="col-md-10 greyedout alignLeft">
														Chat met ons door te klikken op het chat icoon onder aan deze pagina.
													</div>
													<div class="clearboth"></div>
													<br>
													<div class="col-md-2 greyedout alignLeft">
														<i class="fa fa-whatsapp fa-2x" aria-hidden="true" style="margin-top: 5px;"></i>
													</div>
													<div class="col-md-10 greyedout alignLeft">
														Stuur ons een Whatsapp naar<br>
														<b style="color: #204076;">06 155 7777 0</b><br>
													</div>
													<div class="clearboth"></div>
												</div>
												<br>
												
											</div>
										</div>
									</div>
								</div>
							</div>
</div>



<script type="text/javascript" src="{{asset('../fixbus/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/jquery.vide.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/jquery.mobile.custom.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/pushy.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/phone-anim.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/lightslider.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/jquery.hideseek.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/points.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/booking.js?8')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/core.js')}}"></script>
	<script type="text/javascript" src="{{asset('../fixbus/js/faq.js')}}"></script>
	



<div id="G6Rxgoj-1569322120077" class="" style="display: block !important;">


</body></html>
@endsection