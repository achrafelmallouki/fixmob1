@extends('layouts.dyali')


@section('content')
<style>

th, td{}
table{}
h6{display : none;}
input { text-transform: uppercase; font-weight: bold;}
.achraf{display:none;}

</style>

<fieldset><center><legend> Remplissage du formulaire de réparation </legend></center></fieldset>

<center>

@foreach ($mobiles as $mobile)
        <h6> Le genre est : {{$genre=$mobile->genre_mobile}} </h6>
        <h6> La marque est :{{$marque=$mobile->marque_mobile}} </h6>
        <h6> Le genre est : {{$type=$mobile->type_mobile}} </h6>

        <h6> {{$rslt= $genre . ',' .$marque . ',' . $type }} </h6>
@endforeach

<div class="panel panel-default" style=" width: 600px">
  <!-- Default panel contents -->
  <div class="panel-heading">Informations sur l'appareil </div>
  <div class="panel-body">
    <p>
     <!-- Table -->
  <form action="{{ url('demanderep') }}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}} 
  <table class="table">
                        <h6>  {{$rslt}} </h6>
    <tr>
            <td><label for=""> Le genre de l'appareil :</label></td>
            <td><input type="text" class="from-group" value="{{$genre}}" disabled="disabled" name=''></td>
    </tr>
    
    <tr>
            <td><label for=""> La marque de l'appareil :</label></td>
            <td><input type="text" class="from-group" value="{{$marque}}" disabled="disabled" name=''></td>
    </tr>

    <tr>
            <td><label for=""> Le type de l'appareil :</label></td>
            <td><input type="text" class="from-group" value="{{$type}}" disabled="disabled" name=''></td>
    </tr>
    <tr class="achraf">
                <td><label for=""> genre | marque | Type </label></td>
                <td><input type="text" class="from-group"  value="{{$rslt}}"
                                                name='rslt'></td>
    </tr>

  </table>

    </p>
  </div>
</div>
<!-- *************** PaneL pour le Client ********** --> 

<div class="panel panel-default" style=" width: 600px">
  <div class="panel-heading">Clients </div>
  <div class="panel-body">
    <p>
     <!-- Table -->
                <table class="table">
                <tr>
                        <td><label for=""> Entrer votre prénom : </label></td>
                        <td><input type="text" class="from-group" name='prenom_client'></td>
                </tr>

                <tr>
                        <td><label for=""> Entrer votre nom : </label></td>
                        <td><input type="text" class="from-group" name='nom_client'></td>
                </tr>
                <tr>
                        <td><label for=""> Entrer votre CIN : </label></td>
                        <td><input type="text" class="from-group" name='cin_client'></td>
                </tr>

                <tr>
                        <td><label for=""> Entrer votre adresse : </label></td>
                        <td><input type="text" class="from-group" name='adresse_client'></td>
                </tr>

                <tr>
                        <td><label for=""> Entrer votre numéro de téléphone : </label></td>
                        <td><input type="text" class="from-group" name='tel_client'></td>
                </tr>
                </table>
 
    </p>
  </div>

</div>

<!-- ************************ Panel pour la réparation **************************** --> 

<div class="panel panel-default" style=" width: 600px">
  <div class="panel-heading"> Réparation </div>
  <div class="panel-body">
    <p>
     <!-- Table -->
  <table class="table">
    <tr>
            <td><label for="">  Type de réparation : </label></td>
            <td><input type="text" class="from-group" name='type_reparation'></td>
    </tr>
    
    <tr>
            <td><label for=""> Prix de réparation : </label></td>
            <td><input type="text" class="from-group" name='prix_reparation'></td>
    </tr>
    <tr>
            <td><label for=""> date de réparation : </label></td>
            <td><input type="text" class="from-group" name='date_reparation'></td>
    </tr>
    
    <tr>
    <td colspan='2'>

    <p align="right"> 
        <a href="{{url('reparation/'. $genre .'/'. $marque . '/' . $type .'/success')}}" class="btn btn-success" 
           role="button">Valider</a> 
     </p>

    </td>
    </tr>
  
  </table> 

    </p>
  </div>

</div> </center>
</form>

@endsection