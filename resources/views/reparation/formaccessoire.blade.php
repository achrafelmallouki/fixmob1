@extends('layouts.dyali')

@section('content')
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" style="" >

<head>
	
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
		h6{display:none;}
		.achraf{display:none;}
</style>

</head>
                        

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
													<h3 style="padding: 0px; text-align: center; font-size: 1.5em; font-weight: bold;">Demander des accessoires </h3>
												</div>
												<div style="clear: both;"></div>
												<div class="col-xs-3 col-md-2" align="center">
													<img src="{{asset('../img/info.png')}}" width="40" height="40"><br>
												</div>
												<div class="col-xs-9 col-md-10" align="left" style="padding: 10px; font-size: 14px;">
												<b>Entrez les références des accessoires choisis et vos informations correctes !!</b>
												</div>
												<div class="clearboth"></div>
												<br>


                         <div class="col-xs-2 col-md-2"> </div>
                <div class="col-xs-8 col-md-8" style="text-align:center;">
                            <div class="alert alert-info" role="alert" > Si vous n'êtes pas besoin des accessoires ! Cliquer ici !!
                    <br>
					<a href="{{ url('reparation/success')}}">
					<button  class="btn btn-primary" style="padding: 10px; width: 120px; margin: 5px;"> Continue</button>
                    </a>                 
                            </div>
                </div>
						
<form action="{{ url('demandeaccessoire') }}" method="POST" id="">
{{csrf_field()}} 
	
	<div class="col-xs-12 col-md-12">
		<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
			<div class="input-group" style="background-color: #ffffff; border-style: none;">
				<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<input type="text" style="border-style: none;"  class="form-control" placeholder="CIN " name="cin_client" required>  <!-- cin client -->
				</span>
                <span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<input type="text" style="border-style: none;"  class="form-control" placeholder="EMAIL " name="email_client" required>  <!-- email client -->
				</span>
				<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
				<input type="text" style="border-style: none;"  class="form-control" placeholder="N° Téléphone " name="tel_client" required>  <!-- email client -->
				</span>
				
			</div>
		</div>
		
	<div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
			<div class="input-group" style="background-color: #ffffff; border-style: none;">
				<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<textarea style="border-style: none;" id="notes" class="form-control" name="reference_daccessoire" placeholder="Coller les références des accessoires ici .." required rows="6"></textarea>
				</span>
			</div>
	</div>
		
	
    <div class="form-group" style="border-width: 1px; border-style: solid; border-color: #BABABA; background-color: #ffffff; border-radius: 4px; padding: 2px;">    
			<div class="input-group" style="background-color: #ffffff; border-style: none;">
				<span class="input-group-addon" style="padding: 0px; background-color: #ffffff; border-width: 0px;">
					<textarea style="border-style: none;" id="notes" class="form-control" name="commentaire" placeholder="Plus des détails.." rows="6"></textarea>
				</span>
			</div>
	</div>
	
	<div align="center">
		<button type="button" name="prev" class="btn btn-vorige" style="padding: 10px; width: 120px; margin: 5px;"> Retour</button>
	
		<button  type="submit" class="btn btn-primary" style="padding: 10px; width: 120px; margin: 5px;">Confirmer </button>
	</div>
</div>
</form>
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

                                                    <div class="col-md-8  col-xs-8 productinfo">Informations sur l'appareil
                                                           <br><span></span></div>
                                                    <div class="col-md-3  col-xs-4 productprice alignRight"></div>
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
														<div style="border-style: solid; text-align: center; background-color: #55ACEE; color: #ffffff; border-color: #55ACEE; border-radius: 50%; width: 23px; height: 23px;"><b>3</b></div>
													</div>

                                                    <div class="col-md-8  col-xs-8 productinfo">Accessoires
                                                    </div>

													
                                                    <div class="clearboth"></div>
													<br>											
													

													<div class="col-md-3  col-xs-4 greyedout alignRight">
														
													</div>
													<div class="clearboth"></div>
													<br>
                                                    <div align="center">

<br> <br>
<div class="alert alert-info" role="alert"> Copier les références depuis le store !! <br>
<a href="{{ url('/store')}}" target="_blank">
<button type="" class="btn btn-primary"  style="padding: 10px; width: 120px; margin: 5px;"> Voir Store </button> </a>

</div>
</div>
													<!--<p class="voldoen" style="border-color: #BABABA;">
													  	<b>Coût de réparation Total :
														<span class="productprice">prixrep DHS</span></b>
													</p>--> 
												</div>
												<br>

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

<div>
<!-- Voir Tous les accessoires -->

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
	



</body></html>
@endsection