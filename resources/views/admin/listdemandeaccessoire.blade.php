

@extends('layouts.administration')


@section('content')

<div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Panel heading</div>
                                        <div class="panel-body">
                                            <p>...</p>
                                        </div>

                                <!-- Table -->
                                <table class="table">
                             @foreach($listaccessoires as $listaccessoire)   
                                    <tr>
                                                <td>{{ $tel=$listaccessoire->tel_client }}</td>
                                                <td><{{ $cin=$listaccessoire->cin_client }}</td>
                                                <td><{{ $email=$listaccessoire->email_client }}</td>
                                                <td>{{ $tel=$listaccessoire->reference_daccessoire }}</td>
                                    </tr>
                                    <tr>
                                                <td>{{ $tel=$listaccessoire->tel_client }}</td>
                                                <td><{{ $cin=$listaccessoire->cin_client }}</td>
                                                <td><{{ $email=$listaccessoire->email_client }}</td>
                                                <td>{{ $tel=$listaccessoire->reference_daccessoire }}</td>
                                    </tr>
                            @endforeach
                                </table>
</div>


@endsection