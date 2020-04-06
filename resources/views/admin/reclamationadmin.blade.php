@extends('layouts.administration')


@section('content')
<html> 

          <br/><br/>
          <fieldset><legend style='text-align:center;'>
                                    &nbsp;&nbsp;RECLAMATIONS DES CLIENTS
        </legend></fieldset>
          <br/><br/>  
<div class="row">
            @foreach($listrec as $list)
              <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                  <center>
                  <div class="caption">

                    <h6 style="text-transform: uppercase; color:green;">Cin Client :</h6><h6>{{ $cin_client=$list->cin_client }}</h6>
                    <h6 style="text-transform: uppercase; color:green;">Tel Client :</h6><h6>{{ $tel_client=$list->tel_client }}</h6>
                    <h6 style="text-transform: uppercase; color:green;">Email Client :</h6><h6>{{ $email_client=$list->email_client }}</h6>
                    <h6 style="text-transform: uppercase; color:green;">Message :</h6>
                        
                    <div class="alert alert-info" role="alert">
                        <h6>{{ $libelle_reclamation=$list->libelle_reclamation }}</h6>
                    </div>
            <p>
                        <a href="{{ url('') }}" class="btn btn-info" 
                                target="_blank" role="button">Appeler
                        </a>
                        <a href="{{ url('') }}" class="btn btn-success" 
                                target="_blank" role="button">Supprimer
                        </a>
            </p>
              
                  
                  </div>
                </div>
              </div>
            @endforeach
</div>


   

@endsection

</html>