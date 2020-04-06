@extends('layouts.dyali')

@section('content')
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	
	
	
	<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/style.css')}}">
	

    <style> 
    
    h6{display : none;}
    
    </style>


</head>

<body>
<div class="container">
<div class="row justify-content-center">

        <div class="col-md-6">
        @if (session('status'))
        <div class="alert alert-success" role="alert">Bienvenue dans votre espace </div>
        {{ session('status') }}

        @endif
    
        </div>
        <div class="col-md-6"></div>
        <div class="alert alert-info" role="alert">
            <a href="#" class="alert-link" ><center> Bienvenue Dans Votre Espace Mr :<b style="text-transform: uppercase;"> {{ Auth::user()->name }} </b> </center></a>
        </div>
        
            <!--<div class="card">
                <div class="card-header">Message </div>

						<div class="card-body">
								@if (session('status'))
									<div class="alert alert-success" role="alert">
								{{ session('status') }}
                        </div>
                    @endif

                    Bienvenue sur le FixMob !! 

                </div>

        
            </div>-->
        
    </div>
</div>
<div class="col-xs-12 col-md-12">
        		<div class="step-content">
					<div id="issue" class="step-content-body">
            <ul class="list-inline selection" id="issuelist">
                <li>
                        <a class="defect" target="_blank" href="{{ url('/ajoutop') }}">
                                <img src="{{asset('../img/write1.png')}}">
                                            Ajouter un avis 
                        </a>
                </li>
            
            
                <li>
                        <a class="defect" target="_blank" href="{{ url('/contact') }}">
                                <img src="{{asset('../img/contact.png')}}">
                                            Contactez nous !!
                        </a>
                </li>
            
            
                <li>
                        <a class="defect" target="_blank" href="{{url('/demandeaccess')}}">
                                <img src="{{asset('../img/buy.png')}}">
                                            demander des accessoires
                        </a>
                </li>
            
            
                <li>
                        <a class="defect" target="_blank" href="{{url('reparation/rep')}}">
                        <img src="{{asset('../img/phonerep.jpg')}}">
                                            demande de réparation
                        </a>
                </li>
            
            
                <li>
                        <a class="defect" target="_blank" href="">
                        <img src="{{asset('../img/inbox.png')}}">
                                            Voir tes activités
                        </a>
                </li>

                <li>
                        <a class="defect" target="_blank" href="{{url('/store')}}">
                        <img src="{{asset('../img/access.png')}}">
                                            Notre Store
                        </a>
                </li>

                <li>
                        <a class="defect" target="_blank" href="{{url('/reclamation')}}">
                        <img src="{{asset('../img/recl.png')}}">
                                            Faire une réclamation
                        </a>
                </li>
               <!-- <li>
                        <a class="defect" target="_blank" href="{{url('/services')}}">
                        <img src="{{asset('../img/tomo.jpg')}}">
                                            Nos services
                        </a>
                </li>-->
                
            </ul>
					
      
      
</div>
    
</body></html>

@endsection