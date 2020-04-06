@extends('layouts.administration')


@section('content')
<html> 

          <br/><br/>
          <fieldset><legend style='text-align:center;'>
                                    &nbsp;&nbsp;MESSAGES DES CLIENTS (Contact)
        </legend></fieldset>
          <br/><br/>  


          
<div class="row">
            @foreach($listcont as $list)


              <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                  <center>
                  <div class="caption">

                    <h6 style="text-transform: uppercase; color:green;">Nom Client :</h6><h6>{{ $nom_client=$list->nom_client }}</h6>
                    <h6 style="text-transform: uppercase; color:green;">Email Client :</h6><h6>{{ $email_client=$list->email_client }}</h6>
                    <h6 style="text-transform: uppercase; color:green;">Objet :</h6><h6>{{ $objet_contact=$list->objet_contact }}</h6>
                   
                    
                    
                    <h6 style="text-transform: uppercase; color:green;">Message :</h6>
                        
                    <div class="alert alert-info" role="alert">
                        <h6>{{ $message=$list->message }}</h6>
                    </div>
            <p>
                        
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