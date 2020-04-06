@extends('layouts.administration')


@section('content')

<style> 
    /* Majuscule des champs
    .form-control{
        text-transform: uppercase;    
    } */
    
</style>


<br/><br/>

<fieldset><legend style="text-align:center;"><img src="../img/mobile.png" width="35" height="40"> AJOUTER ACCESSOIRE </legend></fieldset>

<div class="container" style="position:center">
    <div class="row">
        <div class="col-md-4">
        <div class="card" Style="position:center;">
        <form action="{{ url('') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}} 
            <!-- POur le genre --> 
            <div class="form-group">
                <label for="">Nom service :  </label>
                <input type="text" class="form-control" name='nom_accessoire'>
            </div>

            <!-- POur la marque  --> 
            <div class="form-group">
                <label for="">Description service : </label>
                <input type="text" class="form-control" name='prix_accessoire'>
            </div>
           

            <div class="form-group">
                <label for="">Photo service : </label>
                <input type="file" class="form-control" name='photo_accessoire'>
            </div>

            <!-- Le button 'Submit' pour l'enregistrement d'un mobile --> 
            <div class="form-group">
                <button type="Submit" class="btn btn-primary" Style="align:center;"> Ajouter </button>
            </div>

        </form> </div>
        </div>
    </div>
</div>

@endsection