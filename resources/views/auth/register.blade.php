@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('register') }}">
                        @csrf
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Inscription
					</span>
					<span class="login100-form-avatar">
						<img src="{{asset('soltane/images/logo2.jpg')}}" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Entrez votre username">
						<input class="input100" name="name" id="name" placeholder="Username" type="text" >
                        <span class="focus-input100" ></span>
                        
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Entrez votre email">
						<input class="input100" type="email" name="email" id="email" placeholder="Email" >
                        <span class="focus-input100" ></span>
                    </div>
                    
					<div class="wrap-input100 validate-input m-b-50" data-validate="Entrez votre mot de passe">
						<input class="input100" type="password" name="password" id="password" placeholder="Password" >
                        <span class="focus-input100" ></span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Confirmez votre mot de passe">
						<input class="input100" type="password" name="password_confirmation" id="password-confirm" required autocomplete="new-password" placeholder="Confirm Password" >
                        <span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
                        {{ __('Register') }}
						</button>
					</div>


					<ul class="login-more p-t-190">
						<li>
							<span class="txt1">
								Vous avez deja un compte ?
							</span>

							<a href="/login" class="txt2">
								Se connecter
							</a>
						</li>
					</ul>
                    </form>
			</div>
		</div>
	</div>
	

    <div id="dropDownSelect1"></div>
   
    @endsection