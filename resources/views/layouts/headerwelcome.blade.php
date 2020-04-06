<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="téléphone, smartphone, tablette, réparation, FixMob">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../img/iconrep.png" />
    <link rel="stylesheet" href="{{asset('../assets/css/bootstrap.min.css')}}">

    <title>FixMob</title>
</head>

<body>

<nav class="navbar navbar-default">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">
            <img src="../img/iconrep.png" width="35" height="18" alt="logo">      
                    <span class="sr-only">(current)</span></a>
        </li>
        
        <li><a href="#">Link2</a></li>
        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <p>
                      Dro	<b class="caret"></b>
									</p>
                             </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action1</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
      </ul>
      
      <!--<form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('login') }}"> <img src="../img/account.svg" width="20px" height="20px" alt="account">
                       <b>My FixMob</b></a></li>
        <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <p>
										<img src="../img/menu.svg" width="20px" height="20px"> Menu
										<b class="caret"></b>
							</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Faire une réparation</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Contact Us</a></li>
                              </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->

  
</nav>




<!-- ************************* -->
@yield('content')




<script src="{{asset('../assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('../assets/js/jquery.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Library for DropDown Menu -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>