@extends('layouts.dyali')


@section('content')
<html> 
<style> 
    .form-group{ width: 500px; }
    html { overflow-x: hidden; } 
</style>
          
          <fieldset><center><legend>Séléctionner la marque de votre appareil </legend></center></fieldset>
                    
<div class="row">
            @foreach ($mobiles as $mobile)
              <div class="col-sm-4 col-md-3">
                <div class="thumbnail">
                  <center>
                  <div class="caption">

                    <h3 style="text-transform: uppercase;"> {{$marque=$mobile->marque_mobile}}</h3>


              <h6 style="display : none; text-align: center; text-transform: uppercase;"> 
              Le genre est : {{$genre=$mobile->genre_mobile}} 
              </h6>
              
              <p>
                  <a class="" href="{{ url('reparation/' . $genre .'/'. $marque . '/type') }}" > 
                                   <img width="60px" height="60px" src="{{asset('../img/choisir.png')}}">
                  </a>
              </p>
              
                  
                  </div>
                </div>
              </div>
            @endforeach
</div>
<br/><br/><br/><br/><br/>
<div style="text-align : center ;"> 
    

    <a class="" href="{{ url('reparation/rep') }}" >
                        <img width="60px" height="60px" src="{{asset('../img/retour.png')}}">
    </a>

    
</div>
   

@endsection

</html>