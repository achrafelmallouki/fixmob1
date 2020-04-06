@extends('layouts.dyali')

@section('content')


<section id="main-container">
		<div class="container">
			
        <div class="alert alert-info" role="alert">
                <center><h3>Demander des accessoires</h3></center>
        </div>

			

			<div class="row">
	    		<div class="col-md-7">
	    			<form id="contact-form" action="{{ url('demandeaccessoire') }}" method="post" role="form">
					{{csrf_field()}} 
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>CIN</label>
								<input class="form-control" name="cin_client" id="name" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email_client" id="email" 
									placeholder="" type="email" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>N° Téléphone</label>
									<input class="form-control" name="tel_client" id="subject" 
									placeholder="" required>
								</div>
							</div>
						</div>
                        <div class="form-group">
							<label>Les références des accessoires</label>
							<textarea class="form-control" name="reference_daccessoire" id="message" placeholder="coller les références ici ..." rows="6" required></textarea>
						</div>
						<div class="form-group">
							<label>Commentaire</label>
							<textarea class="form-control" name="commentaire" id="message" placeholder="" rows="4" required></textarea>
						</div>
						<div class="text-right"><br>
						<button type="Submit" class="btn btn-primary" Style="align:center;"> Envoyer </button>
						</div>
					</form>
	    		</div>
	    	<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3>Contact Détails</h3>
			    		<p>Veuillez entrer les informations ! </p>
			    		<br>
			    		<p><i class="fa fa-home info"></i>  Fès Im 26 Rue Abass Lamsaadi </p>
						<p><i class="fa fa-phone info"></i>  (+212) 618049852 </p>
						<p><i class="fa fa-envelope-o info"></i>  contact@fixmob.com</p>
						<p><i class="fa fa-globe info"></i>  www.fixmob.ma</p>
        <br/><br/><br/>
        <div class="alert alert-info" role="alert">
        Pour copier les références <p align="right"><a href="{{ url('/store')}}" target="_blank">
<button type="" class="btn btn-primary"  style="padding: 10px; width: 120px; margin: 5px;"> Voir Store </button> </a>
</p>        </div>

    				</div>
	    		</div>
	    	</div>

		</div><!--/ container end -->

	</section><!--/ Main container end -->
	
<hr>



@endsection