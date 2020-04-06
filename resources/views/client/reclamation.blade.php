@extends('layouts.dyali')

@section('content')


<section id="main-container">
		<div class="container">
			
        <div class="alert alert-warning" role="alert">
                <center><h3>Réclamation</h3></center>
        </div>

			

			<div class="row">
	    		<div class="col-md-7">

				@if (session('reclamation'))
					<div class="alert alert-success">
						{{ session('reclamation') }}
					</div>
				@endif

	    			<form id="contact-form" action="{{ url('addreclamation') }}" method="post" role="form">
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
									placeholder="" type="email_client" required>
								</div>
							</div>
                            <div class="col-md-4">
								<div class="form-group">
									<label>N° de téléphone</label>
									<input class="form-control" name="tel_client" id="email" 
									placeholder="" type="tel_client" required>
								</div>
							</div>
							
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" name="libelle_reclamation" id="message" placeholder="" rows="10" required></textarea>
						</div>
						<div class="text-right"><br>
						<button type="Submit" class="btn btn-primary" Style="align:center;"> Envoyer </button>
						</div>
					</form>
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3>Réclamation Détails</h3>
			    		<p>Veuillez entrer les informations ! </p>
			    		<br>
			    		<p><i class="fa fa-home info"></i>  Fès Im 26 Rue Abass Lamsaadi </p>
						<p><i class="fa fa-phone info"></i>  (+212) 618049852 </p>
						<p><i class="fa fa-envelope-o info"></i>  contact@fixmob.com</p>
						<p><i class="fa fa-globe info"></i>  www.fixmob.ma</p>
    				</div>
	    		</div>
	    	</div>

		</div><!--/ container end -->

	</section><!--/ Main container end -->
	






@endsection