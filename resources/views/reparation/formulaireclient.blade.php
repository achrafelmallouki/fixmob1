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

<script language="javascript">
	jquery(document).ready(function(){
		jquery("#confirmer1").click(function(){
			if(jquery("#confirmer2").is(":enabled")){
				jquery("#confirmer2").prop("disabled",true);
			}else{
				jquery("#confirmer2").prop("disabled",false);
			}
		});
	});
</script>
	
<style> 
		h6{display:none;}
		.achraf{display:none;}
</style>


@foreach($mobiles as $mobile)
                        <h6> Le genre est : {{$genre=$mobile->genre_mobile}} </h6>
                        <h6> La marque est : {{$marque=$mobile->marque_mobile}} </h6>
                        <h6> Le type est : {{$type=$mobile->type_mobile}} </h6>
                        <h6> Le type de réparation est : {{$typerep=$mobile->type_typerep}} </h6>
                        <h6> Le prix de réparation est : {{$prixrep=$mobile->prix_typerep}} </h6>

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
						
<form action="{{ url('addreparationall') }}" method="POST" id="">
{{csrf_field()}} 

						<h6> Le genre est : {{$genre=$mobile->genre_mobile}} </h6>
                        <h6> La marque est : {{$marque=$mobile->marque_mobile}} </h6>
                        <h6> Le type est : {{$type=$mobile->type_mobile}} </h6>
                        <h6> Le type de réparation est : {{$typerep=$mobile->type_typerep}} </h6>
                        <h6> Le prix de réparation est : {{$prixrep=$mobile->prix_typerep}} </h6>
					
							<!-- genre marque type -->
							<table class="achraf">
								<tr>
										<td><input type="text" class="from-group" value="{{$genre}}" name='genre_mobile'></td>
										<td><input type="text" class="from-group" value="{{$marque}}" name='marque_mobile'></td>
										<td><input type="text" class="from-group" value="{{$type}}" name='type_mobile'></td>
										
										
								</tr>   
								<tr>
									<td><input type="text" class="from-group" value="{{$prixrep}}" name='prix_typerep'></td>
									<td><input type="text" class="from-group" value="{{$typerep}}" name='type_reparation'></td>
								</tr>
							</table>

	
	<div class="col-xs-12 col-md-12">
		<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
			<div class="input-group" style="background-color: #ffffff; border-style: none;">
				<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<input type="text" style="border-style: none;"  class="form-control" placeholder="Nom " name="nom_client" required>  <!-- nom client -->
				
				</span>
				<span class="input-group-addon  has-feedback" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<input type="text" style="border-style: none;"  class="form-control" placeholder="Prénom" name="prenom_client" required>  <!-- prenom client-->
					
				</span>
				
			</div>
		</div>
		<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
			<div class="input-group" style="background-color: #ffffff; border-style: none;">
				<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<input type="text" style="border-style: none;"  class="form-control" placeholder="N° Tél" name="tel_client" required> <!-- Téléphone Client -->
				
				</span>
				<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<input type="text" style="border-style: none;"  class="form-control" placeholder="Votre Cin" name="cin_client" required> <!-- Cin Client -->
					
				</span>
				
			</div>
		</div>
		
		<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
			<div class="input-group" style="background-color: #ffffff; border-style: none;">
				<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<input type="text" style="border-style: none;" class="form-control" placeholder="Adresse" name="adresse_client"required>  <!-- adresse client -->
				</span>
			</div>
		</div>

<!-- Date de réparation --> 
		<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
			<div class="input-group" style="background-color: #ffffff; border-style: none;">
				<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<input type="Date" style="border-style: none;"  class="form-control" name="date_reparation" required >  <!-- date de réparation -->
					
				</span>														
			</div>
		</div>
	<!-- ****************** Radios ****************** -->

			<fieldset>
			<legend>Choisir l'horaire: </legend>

						<div>
						<input type="radio" id="matin" name="time_reparation" value="matin"
								checked>
						<label for="matin">08:00 : 12:00</label>
						</div>

						<div>
						<input type="radio" id="soir" name="time_reparation" value="soir">
						<label for="soir">14:00 : 20:00</label>
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
	
	<div align="center">
	<a href="{{url('reparation/' . $genre .'/'. $marque . '/' . $type .'/'. $typerep .'/prixrep')}}">
		<button type="button" name="prev" class="btn btn-vorige" style="padding: 10px; width: 120px; margin: 5px;"> Retour</button></a>
	
		<button id="confirmer1" type="submit" class="btn btn-primary" style="padding: 10px; width: 120px; margin: 5px;">Confirmer </button>
	</div>

<!-- fiiin de formulaire de réparation -->
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

                                                    


													<div class="col-md-8  col-xs-8 productinfo">{{$genre=$mobile->genre_mobile}} : {{$marque=$mobile->marque_mobile}} {{$type=$mobile->type_mobile}}
                                                            <small> | </small><br><span>{{$typerep=$mobile->type_typerep}}</span></div>
                                                    <div class="col-md-3  col-xs-4 productprice alignRight">{{$prixrep=$mobile->prix_typerep}} DHS</div>
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
														Plus des informations !!
													</div>

													<div class="col-md-3  col-xs-4 greyedout alignRight">
														
													</div>
													<div class="clearboth"></div>
													<br>
													<p class="voldoen" style="border-color: #BABABA;">
														<b>Coût de réparation Total :
														<span class="productprice">{{$prixrep=$mobile->prix_typerep}} DHS</span></b>
													</p>
													<div align="center">
                                                    <a href="{{url('reparation/' . $genre .'/'. $marque . '/' . $type .'/'. $typerep .'/prixrep')}}">
														<button type="button" name="prev" class="btn btn-vorige" style="padding: 10px; width: 120px; margin: 5px;"> Retour</button> </a>
                                                    
													<a href="{{url('reparation/' . $genre .'/'. $marque . '/' . $type .'/'. $typerep .'/prixrep')}}">
														<button id="confirmer2" type="submit" class="btn btn-primary" style="padding: 10px; width: 120px; margin: 5px;" >Confirmer</button></a>
													</div><br>
												</div>
												<br>
</form>
<!--   Fiiiin de Réparation ******************************************************** -->
												<!-- Contact US ********************************* -->
												<div class="repairings">
													<h3 style="margin-top: 0px;">Contact US</h3>
													<div class="col-md-2 greyedout alignLeft">
														<i class="fa fa-phone fa-2x" aria-hidden="true" style="margin-top: 5px;"></i>
													</div>
													<div class="col-md-10 greyedout alignLeft">
														<b style="color: #204076;">(+212) 613363416</b><br>
														Joignable entre 09:00 - 21:00
													</div>
													<div class="clearboth"></div>
													<br>
													<div class="col-md-2 greyedout alignLeft">
														<i class="fa fa-envelope fa-2x" aria-hidden="true" style="margin-top: 5px;"></i>
													</div>
													<div class="col-md-10 greyedout alignLeft">
														Envoyer à nous les emails <br>
														<b style="color: #204076;"><a href="mailto:service@fixmob.ma" style="text-decoration: none; color: #204076;">service@fixmob.ma</a></b><br>
													</div>
													
													<br>
													
													
													<div class="clearboth"></div>
													<br>
													<div class="col-md-2 greyedout alignLeft">
														<i class="fa fa-whatsapp fa-2x" aria-hidden="true" style="margin-top: 5px;"></i>
													</div>
													<div class="col-md-10 greyedout alignLeft">
														Trouver nous sur Whatsapp <br>
														<b style="color: #204076;">06 13363416</b><br>
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


@endforeach

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
	



</body></html>
@endsection