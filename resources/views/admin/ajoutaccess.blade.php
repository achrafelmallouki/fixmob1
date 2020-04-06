@extends('layouts.administration')


@section('content')

<html>

<br/><br/>

<fieldset><legend style="text-align:center;"><img src="{{asset('../img/mobile.png')}}" width="35" height="40"> AJOUTER ACCESSOIRE </legend></fieldset>

<div class="container" style="">
    <div class="row">
          
    <div class="col-md-2"></div>     
                                        
                                                                 
        <div class="col-md-6">
                                        @if (session('success'))
                                        
                                            <div class="alert alert-success" style="text-align:center;">
                                                {{ session('success') }}
                                            </div>
                                        
                                        @endif  
        <div class="card" Style="position:center;">
        <form action="{{ url('addaccessoire') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}} 
            <!-- POur le nom --> 
            <div class="form-group">
                <label for="">Nom accessoire :  </label>
                <input type="text" class="form-control" name='nom_accessoire' required>
            </div>

            <!-- POur le prix  --> 
            <div class="form-group">
                <label for="">Prix accessoire : </label>
                <input type="text" class="form-control" name='prix_accessoire' required>
            </div>
            <div class="form-group">
                <label for=""> Ancien Prix accessoire : </label>
                <input type="text" class="form-control" name='ancienprix_accessoire' required>
            </div>
            <div class="form-group">
                <label for="">Numéro de référence de l'accessoire :  </label>
                <input type="text" class="form-control" name='reference_accessoire' required>
            </div>
            <!-- POur la description  --> 
            <div class="form-group">
                
            <label for="description">Description accessoire :</label>
            <textarea  name="description_accessoire" class="form-control"
                        rows="5" cols="33" placeholder="Description" required></textarea>
            
            </div>

            <!-- Pour la photo -->
            <div class="form-group">
                <label for="">Photo accessoire : </label>
                <input type="file" class="form-control" name='photo_accessoire' required>
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

</html>
@endsection