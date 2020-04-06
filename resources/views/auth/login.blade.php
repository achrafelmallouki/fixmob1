<!DOCTYPE html>
<html lang="en">
<head>
	<title>S'authentifier </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('../img/iconrep.png') }}"/>
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

<!-- Naaavbaar --> 


<!-- Fin Navbar -->
@extends('layouts.app')

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(./img/4.jpg);">
				<!--<div class="login100-form-title" style="background-image: url(./assets/images/bg-01.jpg);">-->
					<span class="login100-form-title-1">
                    {{ __('Login') }}
					</span>
				</div>

				<form  method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">{{ __('Addresse Email') }}</span>
						<input class="input100" type="text" name="email" placeholder="Enter adress email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
                                @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
					</div>

	<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
		<span class="label-input100">{{ __('Mot de passe') }}</span>
		<input class="input100" type="password" name="password" placeholder="Enter password">
		<span class="focus-input100"></span>
             @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
              @enderror

	</div>
        

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="remember" type="checkbox" name="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
							
                            <label class="label-checkbox100" for="remember">
								{{ __('Remember Me') }}
							</label>
						</div>

						<div>
                       

                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
						</div>
					</div>

					<div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Login') }}
						</button>

                        &nbsp;&nbsp;&nbsp;
                    <a class="login100-form-btn" href="{{ route('register') }}">
                                             S&rsquo;identifier</a>           
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