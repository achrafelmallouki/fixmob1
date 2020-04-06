@extends('layouts.dyali')


@section('content')

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
  
  
  <link rel="stylesheet" type="text/css" href="{{asset('../fixbus/style.css')}}">

<style> 
    .form-group{
        width: 500px;
        
    }
    h5{ text-align: center ;  }
    html { overflow-x: hidden; } 
    h6{display : none;}
    .retour{text-align : center;}


</style>
</head>

<body>

          <fieldset><center><legend>Séléctionner le type de votre appareil </legend></center></fieldset>
                    
<div class="row">
@foreach ($mobiles as $mobile)
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail" >

      <!--<img src="url('{{asset('$photo=$mobile->photo_type')}}')" 
                alt="type" width="80" height="50">-->
                
                
      <img src="{{ asset('storage/' .$mobile->photo_type) }}" alt="photo_type" 
                      width="80" height="50">

                 <center>   
      <div class="caption">
      
        <h3>{{$type=$mobile->type_mobile}}</h3>
        <p></p>

        <h6> La marque est : {{$marque=$mobile->marque_mobile}} </h6>
        <h6> Le genre est : {{$genre=$mobile->genre_mobile}} </h6>
       
        

<p> 
          <a class="" href="{{ url('reparation/'. $genre .'/'. $marque . '/' . $type .'/typerep') }}" > 
                                   <img width="60px" height="60px" src="{{asset('../img/choisir.png')}}">
          </a>
</p>

      </div>
    </div>
  </div>
@endforeach
</div>

<br/><br/><br/><br/><br/>

          <!-- button Retour -->					
        <center>  <a class="" href="{{ url('/reparation/'. $genre .'/marque') }}" >
                        <img width="60px" height="60px" src="{{asset('../img/retour.png')}}">
          </a>
        </center>

   


</body></html>

@endsection