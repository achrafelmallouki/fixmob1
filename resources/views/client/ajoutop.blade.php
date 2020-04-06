@extends('layouts.dyali')

@section('content')


<section id="main-container">
		<div class="container">
			
        <div class="alert alert-info" role="alert">
                <center><h3>Ajouter un avis</h3></center>
        </div>

			

			<div class="row">
	    		<div class="col-md-7">
										@if (session('success')
                                            <div class="alert alert-success" style="text-align:center;">
                                                {{ session('success') }}
                                            </div>
                                        @endif
	    			<form id="contact-form" action="{{ url('addop') }}" method="post" role="form">
					{{csrf_field()}} 
						<div class="row">
                        <h6 style="display:none;">{{ $em = Auth::user()->email }}</h6>
							
						<h6 style="display:none;">	<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email_client" id="email" value="{{ $em }}" >
								</div>
							</div> </h6>
							
						</div>
						<div class="form-group">
							<label>Votre Avis :</label>
							<textarea class="form-control" name="libelle_opinion" id="message" placeholder="Ecrire un avis, à propos de nous !" rows="10" required></textarea>
						</div>
						<div class="text-right"><br>
						<button type="Submit" class="btn btn-primary" Style="align:center;"> Envoyer </button>
						</div>
					</form>
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3></h3>
			    		
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