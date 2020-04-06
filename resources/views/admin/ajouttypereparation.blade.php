@extends('layouts.administration')


@section('content')

<style> 
    /* Majuscule des champs
    .form-control{
        text-transform: uppercase;    
    } */
    
</style>


<br/><br/>

<fieldset><legend style="text-align:center;"><img src="../img/mobile.png" width="35" height="40"> AJOUTER UNE REPARATION </legend></fieldset>

<div class="container">
    <div class="" Style="position:center;">
    <div class="col-md-3"></div>
        <div class="col-md-6">
        <div class="card" >
        <form action="{{ url('addrep') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}} 

        <!-- POur le genre --> 
        <div class="form-group">
                <label for="">Type de réparation : </label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name='genre_mobile'>
                                <option value="TELEPHONE">TELEPHONE</option>
                                <option value="TABLETTE">TABLETTE</option>
                            </select>
                        </div>
                    </div>
        </div>
          
        <!-- POur le marque  --> 
        <div class="form-group">
                <label for="">marque appareil : </label>
        <div class="row">
            <div class="col-sm-12">
                <select class="form-control" name='marque_mobile'>
                @foreach ($mobiles as $mobile)
                    <option value="{{$marque=$mobile->marque_mobile}}">{{$marque=$mobile->marque_mobile}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <!-- POur le genre  --> 
        <div class="form-group">
                <label for="">Type appareil : </label>
        <div class="row">
            <div class="col-sm-12">
                <select class="form-control" name='type_mobile'>
                @foreach ($mobiles as $mobile)
                    <option value="{{$type=$mobile->type_mobile}}">{{$type=$mobile->type_mobile}}</option>
                @endforeach
                </select>
            </div>
        </div>


            <!-- POur le genre --> 
            <div class="form-group">
                <label for="">Type de réparation : </label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name='type_typerep'>
                                <option value="BATTERIE">BATTERIE</option>
                                <option value="PORT DE CHARGE">PORT DE CHARGE</option>
                                <option value="MICRO">MICRO</option>
                                <option value="AFFICHEUR">AFFICHEUR</option>
                                <option value="CAMERA">CAMERA</option>
                                <option value="EMPREINTE">EMPREINTE BUTTON</option>
                                <option value="BUTTONS">BUTTONS</option>
                            </select>
                        </div>
                    </div>
            </div>

            <!-- POur la marque  --> 
            <div class="form-group">
                <label for="">PRIX REPARATION : </label>
                <input type="text" class="form-control" name='prix_typerep'>
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