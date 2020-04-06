@extends('layouts.biz')


@section('content')

<style>

                h6{display : none;}
                input { text-transform: uppercase; font-weight: bold;}
                .achraf{display:none;}

</style>

<fieldset><center><legend> Formulaire de réparation </legend></center></fieldset>

<center>




<!-- *************** PaneL pour le Client ********** --> 
<form action="{{ url('test') }}" method="POST" enctype="">
      
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
            <td><label for=""> Genre marque type : </label></td>
            <td><input type="text" class="from-group" name='genre_marque_type'></td>
    </tr>
    
    <tr>
    <td colspan='2'>

    <p align="right"> 
        <a href="{{url('reparation/rep')}}" class="btn btn-success" 
           role="button">Valider</a> 
     </p

    </td>
    </tr>
  
  </table> 

    </p>
  </div>

</div> </center>
</form>

@endsection