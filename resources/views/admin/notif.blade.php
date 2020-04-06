@extends('layouts.administration')


@section('content')
<html> 

          <br/><br/>
          <fieldset><legend style='text-align:center;'>
<span class="glyphicon glyphicon-bell" aria-hidden="true"></span>&nbsp;&nbsp;NOTIFICATIONS 
        </legend></fieldset>
          <br/><br/>  
<div class="row">
        @foreach($reparations as $reparation)
              <div class="col-sm-4 col-md-3">
                <div class="thumbnail">
                  <center>
                  <div class="caption">

                    <h6 style="text-transform: uppercase; color:green;">Type réparation :</h6><h6>{{ $type_rep=$reparation->type_reparation }}</h6>
                    <h6 style="text-transform: uppercase; color:green;">Date réparation :</h6><h6>{{ $date_rep=$reparation->date_reparation }}</h6>
                    <h6 style="text-transform: uppercase; color:green;">Time réparation :</h6><h6>{{ $time_rep=$reparation->time_reparation }}</h6>
                    <h6 style="text-transform: uppercase; color:green;">Prix réparation :</h6><h6>{{ $prix_rep=$reparation->prix_reparation }}</h6>
                    <h6 style="text-transform: uppercase; color:green;"> 
                        Appareil:</h6><h6>{{ $genre_mobile=$reparation->genre_mobile }} | {{ $marque_mobile=$reparation->marque_mobile }} | {{ $type_mobile=$reparation->type_mobile }}
                    </h6>
                    <h6 style="text-transform: uppercase; color:green;">Cin Client:</h6><h6>{{ $cin=$reparation->cin_client }}</h6>
              
            <p>
                        <a href="{{ url('reparation/'.$cin.'/client') }}" class="btn btn-info" 
                                target="_blank" role="button">Détails
                        </a>
                        <a href="{{ url('reparation/'.$cin.'/client') }}" class="btn btn-success" 
                                target="_blank" role="button">Valider
                        </a>
            </p>
              
                  
                  </div>
                </div>
              </div>
            @endforeach
</div>


   

@endsection

</html>