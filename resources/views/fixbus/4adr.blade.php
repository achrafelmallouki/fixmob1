@extends('layouts.dyali')

@section('content')
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!--<![endif]--><!-- BEGIN HEAD --><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<meta property="og:description" content="Fixbus l The ultimate phone repair service #FixBusMyDevice">
	
	<meta property="og:title" content="#FixBusMyDevice">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Succ</title>

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
	<style>
		h6{display:none;}
	</style>


                        
                
<body class="dash bookingpage">





<div id="pushed-content">
								


<div class="wrapper">
	<div class="container-fluid">
		<div class="wrapper-overlay"></div>
		<div class="row">
			<div class="multi-container">
				<div class="col-xs-12 col-md-12">

					<div class="step-progress">
						


						<div class="step-content">
													

							<div id="global-sum" class="step-content-body">
								<br>
								<div class="row">
                                <br>
									<div class="col-xs-12 col-md-12">
										<div class="row" id="overviewScreen2">
											<div class="col-xs-12 col-md-7">
												<div class="col-xs-12 col-md-12" align="center">
													<h3 style="padding: 0px; text-align: center; font-size: 1.5em; font-weight: bold;">Uw adres</h3>
												</div>
												<div style="clear: both;"></div>
												<div class="col-xs-3 col-md-2" align="center">
													<img src="https://fixbus.nl/images/Postcode.svg"><br>
												</div>
												<div class="col-xs-9 col-md-10" align="left" style="padding: 10px; font-size: 14px;">
													Vul je adresgegevens in voor de beschikbaarheid in uw regio.
												</div>
												<div class="clearboth"></div>
												<br>
												<form>
													<div id="viewErrorMsg"></div>
													<div class="col-xs-12 col-md-12">
														<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
															<div class="input-group" style="background-color: #ffffff; border-style: none;">
																<span class="input-group-addon has-feedback" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;" id="postalcode" class="form-control" placeholder="Postcode">
																	<span id="postalCodeOke" class="" aria-hidden="true" style="color: #00aa00;"></span>
																	<span id="postalCodeFailed" class="" aria-hidden="true" style="color: #aa0000;"></span>
																</span>
																<span class="input-group-addon  has-feedback" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;" id="number" class="form-control" placeholder="Huisnummer">
																	<span id="postalHnrOke" class="" aria-hidden="true" style="color: #00aa00;"></span>
																	<span id="postalHnrFailed" class="" aria-hidden="true" style="color: #aa0000;"></span>
																</span>
																<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;" id="addition" class="form-control" placeholder="Toevoeging">
																</span>
															</div>
														</div>
														
														<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
															<div class="input-group" style="background-color: #ffffff; border-style: none;">
																<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;" id="street" class="form-control" placeholder="Straat">
																</span>
															</div>
														</div>
														
														<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
															<div class="input-group" style="background-color: #ffffff; border-style: none;">
																<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<input type="text" style="border-style: none;" id="city" class="form-control" placeholder="Plaats">
																</span>
															</div>
														</div>
														
														<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
															<div class="input-group" style="background-color: #ffffff; border-style: none;">
																<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
																	<textarea style="border-style: none;" id="notes" class="form-control" placeholder="Plaats een opmerking voor de reparateur.." rows="6"></textarea>
																</span>
															</div>
														</div>
													</div>
													<p class="adressresponse"></p>
													<div align="center">
														<button type="button" name="prev" class="btn btn-vorige" style="padding: 10px; width: 120px; margin: 5px;"><i class="fa fa-angle-left"></i> Vorige</button>
														<button id="searchlocation" onclick="void(0);" type="button" class="btn btn-volgende" style="padding: 10px; width: 120px; margin: 5px;">Volgende <i class="fa fa-angle-right"></i></button>
													</div>
												</form>
												<div class="clearboth"></div>
												<br>
												<!-- <img src="https://fixbus.nl/images/fix-bus.png" class="col-md-11" /><br /> -->
											</div>
							

		
				<!-- *************** RECENSIES ********************* -->

																	
												<div>
													<h2 class="linethrough" style="text-align: center; border-bottom: 1px solid #000;"><span style="position:relative;top:14px;background: #F4F4F4;padding: 0 10px;text-transform: uppercase">RECENSIES</span></h2>
													<br>
												</div>
												<br>
												<div align="left" style="font-size: 14px;" class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1">

												
													<div style="clear: both;" class="hidden-xs hidden-sm">
														<div>
															<div style="float: left; width: 125px;">
																<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;"><img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;"><img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;"><img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;"><img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">																															</div>
															<div>
																<b>5 / 5 (131)</b>
															</div>
														</div>
														<br>
													</div>
													<table style="width: 100%;">
													<tbody><tr>
													<td>
													<div>
														<div style="float: left; width: 75px;">
															5 sterren
														</div>
														<div style="float: left; width: 70%;">
															<div class="progress" style="margin-bottom: 5px;">
															 <div class="progress-bar" role="progressbar" aria-valuenow="94.656488549618" aria-valuemin="0" aria-valuemax="100" style="width: 94.656488549618%;">
																<span class="sr-only">60% Complete</span>
															  </div>
															</div>
														</div>
														<div style="spacing-left: 10px;">&nbsp;&nbsp;124</div>
													</div>
													</td>
													</tr>
													<tr>
													<td>
													<div>
														<div style="float: left; width: 75px;">
															4 sterren
														</div>
														<div style="float: left; width: 70%;">
															<div class="progress" style="margin-bottom: 5px;">
															 <div class="progress-bar" role="progressbar" aria-valuenow="3.8167938931298" aria-valuemin="0" aria-valuemax="100" style="width: 3.8167938931298%;">
																<span class="sr-only">60% Complete</span>
															  </div>
															</div>
														</div>
														<div style="spacing-left: 10px;">&nbsp;&nbsp;5</div>
													</div>
													</td>
													</tr>
													<tr>
													<td>
													<div>
														<div style="float: left; width: 75px;">
															3 sterren
														</div>
														<div style="float: left; width: 70%;">
															<div class="progress" style="margin-bottom: 5px;">
															 <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
																<span class="sr-only">60% Complete</span>
															  </div>
															</div>
														</div>
														<div style="spacing-left: 10px;">&nbsp;&nbsp;0</div>
													</div>
													</td>
													</tr>
													<tr>
													<td>
													<div>
														<div style="float: left; width: 75px;">
															2 sterren
														</div>
														<div style="float: left; width: 70%;">
															<div class="progress" style="margin-bottom: 5px;">
															 <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
																<span class="sr-only">60% Complete</span>
															  </div>
															</div>
														</div>
														<div style="spacing-left: 10px;">&nbsp;&nbsp;0</div>
													</div>
													</td>
													</tr>
													<tr>
													<td>
													<div>
														<div style="float: left; width: 75px;">
															1 sterren
														</div>
														<div style="float: left; width: 70%;">
															<div class="progress" style="margin-bottom: 5px;">
															 <div class="progress-bar" role="progressbar" aria-valuenow="1.5267175572519" aria-valuemin="0" aria-valuemax="100" style="width: 1.5267175572519%;">
																<span class="sr-only">60% Complete</span>
															  </div>
															</div>
														</div>
														<div style="spacing-left: 10px;">&nbsp;&nbsp;2</div>
													</div>
													</td>
													</tr>
													</tbody></table>
												</div>
												<!-- /overall rating facebook -->
													
												<div style="clear: both;">
													<br>
												</div>
												<br>
																								<div style="clear: both;" class="hidden-md hidden-lg">
													<div>
														<div class="col-sm-6 col-xs-6" align="left">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																																												</div>
														<div class="col-sm-6 col-xs-6" align="right">
															08-11-2017<br>
															<b></b>
														</div>
													</div>
													<div style="clear: both;"></div>
													<br>
													<div align="left">
														Gisteren de Fixbus gebeld voor een defect scherm iphone 7, vandaag binnen 20 minuten gerepareerd. Gewoon aan huis en een gratis accessoire ontvangen.
Mooi gefixt.<br>
														<br>
													</div>
												</div>
												<div style="clear: both;  font-size: 14px;" class="hidden-xs hidden-sm">
													<div style="width: 30%; float: left; text-align: top;">
														<div align="left">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																														<img src="https://fixbus.nl/images/sterVol.svg" style="width: 20px;">
																																													<br>
															08-11-2017<br>
															<br>
															<b></b>
														</div>
													</div>
													<div style="width: 70%; float: left;">
														<div align="left">
															Gisteren de Fixbus gebeld voor een defect scherm iphone 7, vandaag binnen 20 minuten gerepareerd. Gewoon aan huis en een gratis accessoire ontvangen.
Mooi gefixt.<br>
															<br>
														</div>
													</div>
												</div>
												<div style="clear: both;"> </div>
												<br>
													<div style="clear: both;"></div>
												<br>
												<div style="clear: both; border-width: 1px 0px 0px 0px; border-color: #D3D7DD; border-style: solid;"></div><br>

									</div>
					<!-- fiiin des avis -->


							 <!-- Les informations du prix et adresse .... etc. -->
							
											<div class="col-xs-12 col-md-5">
												<div class="repairings">
													<h3 style="margin-top: 0px;">réparation</h3>
													<div class="col-md-1  col-xs-12">
														<div style="border-style: solid; text-align: center; background-color: #55ACEE; color: #ffffff; border-color: #55ACEE; border-radius: 50%; width: 23px; height: 23px;"><b>1</b></div>
													</div>
													<div class="col-md-8  col-xs-8 productinfo">GENRE : 
				MARQUE TYPE<small> | </small><br><span>TYPE_REP</span></div>
													<div class="col-md-3  col-xs-4 productprice alignRight"> PRIX DHS</div>
													<div class="clearboth"></div>
													<br>
													<div class="col-md-1 col-xs-12">
														<div style="border-style: solid; text-align: center; background-color: #898989; color: #ffffff; border-color: #898989; border-radius: 50%; width: 23px; height: 23px;"><b>2</b></div>
													</div>
													<div class="col-md-8 col-xs-8">
														<span class="greyedout">Adresse</span><br>
														<span class="greyedout">Du</span><br>
														<span class="greyedout">Client</span><br>
													</div>

													<div class="col-md-3 col-xs-4 greyedout alignRight">
														<br>
														<br>
														Pas encore
													</div>
													<div class="clearboth"></div>
													<br>
													<div class="col-md-1  col-xs-12">
														<div style="border-style: solid; text-align: center; background-color: #898989; color: #ffffff; border-color: #898989; border-radius: 50%; width: 23px; height: 23px;"><b>3</b></div>
													</div>
													<div class="col-md-8  col-xs-8 greyedout">
														Accessoire
													</div>

													<div class="col-md-3  col-xs-4 greyedout alignRight">
														Pas encore
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
														<b>Coût de réparation  
														<span class="productprice">TYPE DHS</span></b>
													</p>
													<div align="center">

														<button type="button" name="prev" class="btn btn-vorige" 
																			style="padding: 10px; width: 120px; margin: 5px;"> Retour</button>
														<button id="confirmdevice2" class="btn btn-primary" style="padding: 10px; width: 120px; margin: 5px;">Confirmer </button>
													</div>
												</div>
												<br>
				
								<!-- fin infos et prix -->
								



								<!-- Contact us -->
												<br>
												<div class="repairings">
													<h3 style="margin-top: 0px;">Contact US</h3>
													<div class="col-md-2 greyedout alignLeft">
														<i class="fa fa-phone fa-2x" aria-hidden="true" style="margin-top: 5px;"></i>
													</div>
													<div class="col-md-10 greyedout alignLeft">
														<b style="color: #204076;">(+212) 618049852</b><br>
															Joignable du  09.00 - 21.00
													</div>
													<div class="clearboth"></div>
													<br>
													<div class="col-md-2 greyedout alignLeft">
														<i class="fa fa-envelope fa-2x" aria-hidden="true" style="margin-top: 5px;"></i>
													</div>
													<div class="col-md-10 greyedout alignLeft">
														Je kan ons ook e-mailen op<br>
														<b style="color: #204076;"><a href="mailto:service@fixmob.ma" style="text-decoration: none; color: #204076;">service@fixmob.ma</a></b><br>
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
														Numéro du Wathsapp :<br>
														<b style="color: #204076;">06 18049852</b><br>
													</div>
													<div class="clearboth"></div>
												</div>
										<!-- fin du contact -->
												<br>
												
											</div>
										</div>
									</div>
								</div>

								

								

							</div>
							
							

							
							</div>

							

							
		
							</div>

							
						</div>
					</div>


				</div>
			</div>
		</div>
		




</div>



</div>




	
	


<!-- .pushed-content -->

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
<!--<iframe id="LFENvp5-1569322120080" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 350px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; display: none !important; height: 120px !important;"></iframe><iframe id="t0DlvTS-1569322120082" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; pointer-events: auto !important; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 10px 0px !important; height: 60px !important; min-height: 60px !important; max-height: 60px !important; width: 60px !important; min-width: 60px !important; max-width: 60px !important; border-radius: 50% !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center !important; margin: 0px !important; top: auto !important; bottom: 20px !important; right: 20px !important; left: auto !important; display: block !important;"></iframe><iframe id="oVVCoVG-1569322120082" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; display: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; top: auto !important; bottom: 60px !important; right: 15px !important; left: auto !important; width: 21px !important; max-width: 21px !important; min-width: 21px !important; height: 21px !important; max-height: 21px !important; min-height: 21px !important;"></iframe><div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="IeNI8F7-1569322120077" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="RRBLuwA-1569322120078" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="HwM9NxP-1569322120078" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><iframe id="aNO8AMp-1569322120467" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 378px !important; height: 552px !important; display: none !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; bottom: 100px !important; top: auto !important; right: 20px !important; left: auto !important;">
</iframe>-->
</div> 


</body></html>



@endsection
