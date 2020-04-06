@extends('layouts.biz')


@section('content')

<style> 
    /* Majuscule des champs
    .form-control{
        text-transform: uppercase;    
    } */
    
</style>

<br/><br/>

<fieldset><legend style="text-align:center;"><img src="{{asset('../img/mobile.png')}}" width="35" height="40"> Donnez un avis !! </legend></fieldset>

<div class="container" style="">
    <div class="row">
        <div class="col-md-4">
        <div class="card" Style="position:center;">
        <form action="{{ url('addavis') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}} 

        <!-- POur le nom --> 
            <div class="form-group">
                <label for="">Email :  </label>
                <input type="text" class="form-control" name='nom_accessoire'>
            </div>
             
            <div class="form-group">
            <label for="description">Votre avis  :</label>
            <textarea  name="description_accessoire" class="form-control"
                        rows="5" cols="33" placeholder="Description"></textarea>
            
            </div>

           

            <!-- Le button 'Submit' pour l'enregistrement d'un mobile --> 
            <div class="form-group" >
            <p align="right">
                <button type="Submit" class="btn btn-primary" Style="align:center;"> Ajouter </button>
            </p>
            </div>

        </form> </div>

        </div>
    </div>
</div>

@endsection