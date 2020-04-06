@extends('layouts.dyali')


@section('content')

<style> 
    .form-group{ width: 500px; }
    .thumbnail {text-align:center; }

    h5{ text-align: center; }
    html { overflow-x: hidden; } 
    legend { text-align:center; }
    h3{text-transform: uppercase; }
</style>

    <fieldset><legend>Séléctionner le genre de votre mobile </legend></fieldset>                 
<center>
<div class="row" style=" width: 1000px">
@foreach($mobiles as $mobile)
<div class="col-sm-6 col-md-6">
  <div class="thumbnail">
     
      <div class="caption">
        <h3>{{ $genre=$mobile->genre_mobile }}</h3> 

        <a class="" href="{{ url('reparation/'. $genre .'/marque') }}" > 
                <?php 
                        if($genre=='TELEPHONE'){
                          echo '<img src="../img/tel.png" alt="Telephone" > ' ;
                        }elseif($genre=='TABLETTE'){
                          echo '<img src="../img/tab.jpg" alt="Tablette" width="300" height="350"> ' ;
                        }
              
                ?> 
        </a>
        
        <p> <br/>

<!--<a href="{{ url('reparation/'.$genre.'/marque') }}" class="btn btn-success" role="button">Choisir</a>-->


<a class="" href="{{ url('reparation/'. $genre .'/marque') }}" > 
              <img width="60px" height="60px" src="{{asset('../img/choisir.png')}}">
</a>
        </p>
      </div>

  </div>
</div>
@endforeach

</div>


@endsection