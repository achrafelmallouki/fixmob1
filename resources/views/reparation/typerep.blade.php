@extends('layouts.dyali')

@section('content')
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	
	
	
<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/style.css')}}">
	

    <style> 
    
    h6{display : none;}
    
    </style>


</head>

<body>

<fieldset><center><legend>Séléctionner votre défaut </legend></center></fieldset>
<div class="col-xs-12 col-md-12">
        		<div class="step-content">
					<div id="issue" class="step-content-body">
								

            <ul class="list-inline selection" id="issuelist">

            @foreach ($list as $lis)

                                <h6> Le genre est  : {{$genre=$lis ->genre_mobile}} </h6>
                                <h6> La marque est : {{$marque=$lis->marque_mobile}} </h6>
                                <h6> Le type est  :  {{$type=$lis->type_mobile}} </h6>
                                <h6> Le type de réparation : {{$typer=$lis->type_typerep}} </h6>
                <li>
                <a class="defect" href="{{url('reparation/' . $genre .'/'. $marque . '/' . $type .'/'. $typer .'/prixrep')}}">
                         <img src="{{asset('../img/repar.png')}}">{{$typer=$lis->type_typerep}}
                </a>
                </li>

            @endforeach
            </ul>
<br><br>
			<!-- button Retour -->					
      <a class="" href="{{ url('/reparation/'. $genre .'/' .$marque .'/type') }}" > 
                    <img width="60px" height="60px" src="{{asset('../img/retour.png')}}">
      </a>
      
</div>
    
</body></html>

@endsection