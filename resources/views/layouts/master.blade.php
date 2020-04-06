<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="téléphone, smartphone, tablette, réparation, FixMob">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../img/iconrep.png" />

    <title>FixMob</title>

<link rel="stylesheet" href="{{asset('../assets/css/bootstrap.min.css')}}">
</head>

<body>
<!-- *********************************************** -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="/">
      <!--<img src="../img/iconrep.png" width="50" height="30" alt="logo">--> FixMob
      </a>
        <!--<img src="../img/iconrep.png" width="100" height="80" alt="alt">-->

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    
      <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{url('reparation/accessoire')}}">Accessoires</a></li> 
                  <li><a href="{{url('reparation/qui_nous')}}"> Qui sommes nous ? </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- *********************************************** -->

@yield('content')


@include('layouts.footer')



<script src="{{asset('../assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('../assets/js/jquery.min.js')}}"></script>    
</body>
</html>