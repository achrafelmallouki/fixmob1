@extends('layouts.dyali')

@section('content')

<!DOCTYPE html>
<html lang="en">
 <body style="background-color:gray;">

 @foreach($accessoires as $accessoire)

 <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>{{$nom=$accessoire ->nom_accessoire}}</h3>
        <p>{{$nom=$accessoires ->nom_accessoire}}</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

@endforeach

</body>
</html>
@endsection