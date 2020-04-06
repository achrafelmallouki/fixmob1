@extends('layouts.administration')


@section('content')

<html >

<style> 
    /* Majuscule des champs
    .form-control{
        text-transform: uppercase;    
    } */
    
</style>


<br/><br/>

<fieldset><legend style="text-align:center;"><img src="{{asset('../img/mobile.png')}}" width="35" height="40"> AJOUTER MOBILE </legend></fieldset>

<div class="container">
    <div class="" Style="position:center;">
    <div class="col-md-4"></div>
        <div class="col-md-4">
        <div class="card" >
        <form action="{{ url('addmobile') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}} 
            <!-- POur le genre --> 
            <div class="form-group">
                <label for="">Genre : </label>
        <div class="row">
            <div class="col-sm-12">
                <select class="form-control" name='genre_mobile'>
                    <option value="TELEPHONE">TELEPHONE</option>
                    <option value="TABLETTE">TABLETTE</option>
                </select>
            </div>
        </div>
                <!--<input type="text" class="form-control" name='genre_mobile'>-->
            </div>

            <!-- POur la marque  --> 
            <div class="form-group">
                <label for="">Marque : </label>
                <input type="text" class="form-control" name='marque_mobile'>
            </div>
           

            <!-- POur le type  --> 
            <div class="form-group">
                <label for="">Type :</label>
                <input type="text" class="form-control" name='type_mobile'>
            </div>

            <div class="form-group">
                <label for="">Photo du type : </label>
                <input type="file" class="form-control" name='photo_type'>
            </div>

            <!-- Le button 'Submit' pour l'enregistrement d'un mobile --> 
        
            <div class="form-group">
                <p align="right">
                    <button type="Submit" class="btn btn-primary" Style="align:center;"> Ajouter </button>
                </p>
            </div>
       
        </form> </div>

        </div>
    </div>
</div>

@endsection