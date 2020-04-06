@extends('layouts.administration')


@section('content')
<html> 

          <br/><br/>
          <fieldset><legend style='text-align:center;'>
                                    &nbsp;&nbsp;AVIS DES CLIENTS
        </legend></fieldset>
          <br/><br/>  
<div class="row">
               @if (session('success')) 
                <div class=" col-md-6">
                       
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                       
                </div> @endif

            @foreach($listop as $list)
                        
            
            <form action="{{ url('approuver/' .$list->id_opinion) }}" method="post">
                      <input type="hidden" name="_method" value="put">
                       {{csrf_field()}} 
                          
         

              <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                  <center>
                  <div class="caption">

                    <h6 style="text-transform: uppercase; color:green;">Email Client :</h6><h6>{{ $email_client=$list->email_client }}</h6>
                    <h6 style="text-transform: uppercase; color:green;">Message :</h6>
                        
                    <div class="alert alert-info" role="alert">
                        <h6>{{ $libelle_opinion=$list->libelle_opinion }}</h6>
                    </div>
            <p>
                        <input type="submit" class="btn btn-info" 
                                target="_blank" role="button" value="Approuver">
                        
                        <a href="{{ url('') }}" class="btn btn-success" 
                                target="_blank" role="button">Supprimer
                        </a>
            </p>
            </form>
                  
                  </div>
                </div>
              </div>
            @endforeach
</div>


   

@endsection

</html>