<!doctype html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('../img/iconrep.png')}}">
	

	<title>Taleau de bord</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('../assets/css_dash/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('../assets/css_dash/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('../assets/css_dash/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('../assets/css_dash/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('../assets/css_dash/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<style> 
            body{   overflow-x:hidden;  }
</style>

<body >

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{asset('../assets/img/sidebar-4.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper" >
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    <img src="{{asset('../welcomenew/images/fixm.png')}}" width='' height=''> 
                </a>
            </div>


            <ul class="nav">
                                                
                <li id="" class="active" >
                    <a href="{{url('/dash')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Tableau de bord</p>
                    </a>
                </li>
                <li id="" class="active">
                    <a href="{{url('/notif')}}">
                        <i class="glyphicon glyphicon-bell"></i>
                        <p>Notifications&nbsp;&nbsp;&nbsp;<span class="badge">12</span></p>
                    </a>
                </li>
                <li id="" class="active">
                    <a href="{{url('/reparation/ajoutm')}}">
                        <i class="glyphicon glyphicon-phone"></i>
                        <p>Add un appareil</p>
                    </a>
                </li>
                <li id="" class="active">
                    <a href="{{url('/ajoutaccessoire')}}">
                        <i class="glyphicon glyphicon-headphones"></i>
                        <p>Add un accessoire</p>
                    </a>
                </li>
                <li id="" class="active">
                    <a href="{{url('/demandeaccessoire')}}">
                        <i class="glyphicon glyphicon-gift"></i>
                        <p>D accessoires <span class="badge">10</span></p>
                    </a>
                </li>
                <li id="" class="active">
                    <a href="{{url('/ajouttyperep')}}">
                        <i class="glyphicon glyphicon-wrench"></i>
                        <p>Add Type_réparation</p>
                    </a>
                </li>
                <li id="" class="active">
                    <a href="{{url('/listavis')}}">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        <p> avis clients &nbsp;&nbsp;&nbsp;<span class="badge">14</span></p>
                    </a>
                </li>
                <li id="" class="active">
                    <a href="{{url('/listcontact')}}">
                        <i class="glyphicon glyphicon-heart-empty"></i>
                        <p>Contact  clients <span class="badge">10</span></p>
                    </a>
                </li>
                <li id="" class="active">
                    <a href="{{url('/listreclamation')}}">
                        <i class="glyphicon glyphicon-comment"></i>
                        <p>Réclamation clients</p>
                    </a>
                </li>
                <li id="" class="active">
                    <a href="{{url('/listreparation')}}">
                    <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>

                        <p>ALL TYPE_REPARATION</p>
                    </a>
                </li>
                
                
               <!-- <li id="">
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li id="">
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
               
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>-->
            </ul>
    	</div>
    </div>

    <div class="main-panel" >
        <nav class="navbar navbar-default navbar-fixed" style="background-color:#C9C8C8;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/dash')}}">Tableau de bord</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Tableau de bord</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										Demandes
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>
                   
                   
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="/" target="_blank">
                               <p><i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Acceuil</p>
                            </a>
                        </li>

                       
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>Menu&nbsp;&nbsp;<i class="glyphicon glyphicon-th-list"></i>
                                    
                                    
										
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

                        <li>
                            <a  href="{{ route('logout') }}"
                                       	onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <p> 
                                    <i class="glyphicon glyphicon-off" aria-hidden="true"></i>
                                    Déconnexion 
                                     </p>
                            </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        
                        </li>
                       
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
</body>

@yield('content')


    <!--   Core JS Files   -->
    <script src="{{asset('../assets/js_dash/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('../assets/js_dash/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('../assets/js_dash/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('../assets/js_dash/bootstrap-notify.js')}}"></script>

   
	<script src="{{asset('../assets/js_dash/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('../assets/js_dash/demo.js')}}"></script>
    
   

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'glyphicon glyphicon-lock',
            	message: "Bienvenue à la partie d'Administration !!"

            },{
                type: 'info',
                timer: 4000
            });

    	});
    </script>
    




</html>
