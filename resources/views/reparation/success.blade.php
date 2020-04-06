@extends('layouts.dyali')


@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('../fixbus/style.css')}}">
<body>

<div class="col-md-12 text-center">
      <div class="panel panel-success">
          <div class="panel-heading">Success</div>
          <div class="panel-body">
                      Vos demandes ont été envoyés avec success !!
      </div>
</div>
<br>

</div>
<br><br>
<div class="col-xs-12 col-md-12">
        		<div class="step-content">
					<div id="issue" class="step-content-body">
								

            <ul class="list-inline selection" id="issuelist">

           
                <li>
                <a class="defect" href="{{route('register')}}" target="_blank">
                      <b>Créer un Compte FixMob</b>
                </a>
                </li>
               
            
            </ul> 
            
</div>




</body>
@endsection

