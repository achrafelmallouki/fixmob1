@extends('layouts.dyali')


@section('content')
<br/> <br/><br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/> <br/><br/><br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        
                <p align='center'>
                        <div class="panel panel-success" style=" width: 600px; position: absolute;
                                top: 30%; left: 50%; transform: translateX(-50%) translateY(-50%);">

                        <div class="panel-heading">Success</div>
                        <div class="panel-body">
                                Votre de demande a été faite avec succès !! 

                @foreach($mobiles as $mobile)
                        <h6> Le genre est : {{$genre=$mobile->genre_mobile}} </h6>
                        <h3> La marque est : {{$marque=$mobile->marque_mobile}} </h3>
                        <h3> Le type est : {{$type=$mobile->type_mobile}} </h3>
                        <h3> Le type de réparation est : {{$typerep=$mobile->type_typerep}} </h3>

                        <h3> Le prix de réparation est : {{$prixrep=$mobile->prix_typerep}} </h3>
                        
                @endforeach
                <p align="center"> 
                
                        <a href="{{url('reparation/rep')}}" class="btn btn-success" role="button">
                                
                                                &nbsp;Faire une réparation</a> 
                        <a href="{{url('reparation/rep')}}" class="btn btn-success" role="button">
                                
                                                &nbsp;Générer la facture</a> 
                        
                </p>
               

                </div>
                </div>        
                </p>

@endsection
<!-- ********************************* -->

