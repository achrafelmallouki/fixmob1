<!DOCTYPE html>
<html lang="en">
<head>
	<title>S'identifier </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('../img/iconrep.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css"> 
<!--===============================================================================================-->
</head>
<body>
@extends('layouts.app')

@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(./assets/images/bg-01.jpg);">
					<span class="login100-form-title-1">
                            S&rsquo;identifier
					</span>
				</div>

				<form  method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                @csrf

				<!-- Le champ name de s'identier -->	
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">{{ __('Name') }}</span>
						<input id="name" type="text" style="border:0" placeholder="Entrer un nom"
                                class="form-control @error('name') is-invalid @enderror" 
                                 name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

						<span class="focus-input100"></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					    </div>
                  
                <!-- Le champ Email de s'identifier -->
                <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">{{ __('Adresse Email') }}</span>
                        <input id="email" type="email" style="border:0" placeholder="Entrer ton adresse email"
                            class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email">

						<span class="focus-input100"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
                <!-- Le champ du mot de passe -->
                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">{{ __('Mot de passe') }}</span>
                    <input id="password" type="password" style="border:0" 
                            class="form-control @error('password') is-invalid @enderror" name="password" 
                            required autocomplete="new-password" placeholder="Entrer mot de passe">                    
                    <span class="focus-input100"></span>
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                </div>
                <!-- *******************************************  -->
                

                    <!-- ********************************************** -->

                <!-- Le champ de confirmation du mot de passe -->
                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">{{ __('Confirm mot de passe') }}</span>
                    <input id="password-confirm" type="password" class="form-control" style="border:0"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer le mot de passe">
                    <span class="focus-input100"></span>
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                </div>
					



                <div class="flex-sb-m w-full p-b-30">
                            
                </div>


					<div class="container-login100-form-btn" style="">
                        <button type="submit" class="login100-form-btn" style="position: center;">
                                 {{ __('Register') }}
						</button>         
					</div>
                    
				</form>
			</div>
		</div>
	</div>
@endsection
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
    
</body>
</html>