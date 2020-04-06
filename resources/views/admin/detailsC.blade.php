@extends('layouts.dyali')


@section('content')
<style> 
    .form-group{ width: 500px; }
    .thumbnail {text-align:center; }

    h5{ text-align: center; }
    html { overflow-x: hidden; } 
    legend { text-align:center; }
    h3{text-transform: uppercase; }
</style>

<br/><br/>

          <fieldset><legend style='text-align:center;'>&nbsp;&nbsp;Détails Client  </legend></fieldset>

<br/><br/>

<div class="row">
<!-- @foreach($clientsD as $client)
******************* 


        <center>        <div class="col-sm-6 col-md-6">
                
                    
                    <div class="">
                        <h3>{{ $cin=$client->cin_client }}</h3>  
                        <h3>{{ $nom=$client->nom_client }}</h3>  
                        <h3>{{ $prenom=$client->prenom_client }}</h3> 
                        <h3>{{ $tel=$client->tel_client }}</h3> 
                        
                        <p>
                                <a href="{{ url('reparation/'.$cin.'/client') }}" class="btn btn-success" 
                                                    role="button">ccc</a>
                        </p>
                    </div>
                </div> </center>
                
@endforeach-->

@foreach($clientsD as $client)
              <div class="col-sm-4 col-md-3">
                <div class="thumbnail">
                  
                  <div class="caption">
        <div class="alert alert-success" role="alert">
          <h6 style="text-transform: uppercase; color:green;"><u>Tél Client :</u></h6><h6>{{ $tel=$client->tel_client }}</h6>
        </div> 
                    <h6 style="text-transform: uppercase; color:green;"><u>Nom Client :</u></h6><h6>{{ $nom=$client->nom_client }}</h6>
                    <h6 style="text-transform: uppercase; color:green;"><u>Prénom Client :</u></h6><h6>{{ $prenom=$client->prenom_client }}</h6>
                    <h6 style="text-transform: uppercase; color:green;"><u>Adresse Client :</u></h6><h6>{{ $adresse=$client->adresse_client }}</h6>
                    <h6 style="text-transform: uppercase; color:green;"><u>CIN Client :</u></h6><h6>{{ $cin=$client->cin_client }}</h6>
              
            <p>
                        <a href="{{ url('reparation/'.$cin.'/client') }}" class="btn btn-default" 
                                target="_blank" role="button">message 1
                        </a>
                        <a href="{{ url('reparation/'.$cin.'/client') }}" class="btn btn-warning" 
                                target="_blank" role="button">message 2
                        </a>
                        <a href="{{ url('reparation/'.$cin.'/client') }}" class="btn btn-success" 
                                target="_blank" role="button">message 3
                        </a>
                        
            </p>
              
                  
                  </div>
                </div>
              </div>
            @endforeach
            
</div>



@endsection