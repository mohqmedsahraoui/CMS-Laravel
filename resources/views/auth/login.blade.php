@extends('layouts.master')

@section('content')


<form method="POST" action="{{ route('login') }}">
                        @csrf
<div class="limiter">
		<div class="container-login100" id="soltane">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Connexion
					</span>

					<br>
					<br>

					<span class="login100-form-avatar">
						<img src="{{asset('soltane/images/logo2.jpg')}}" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" name="email" placeholder="E-Mail Address" id="email" type="email">
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" placeholder="Password" name="password" id="password" >
                        <span class="focus-input100" ></span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
                        {{ __('Login') }}
						</button>
                    </div>
                    

					<ul class="login-more p-t-190">
						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="/register" class="txt2">
								Sign up
							</a>
						</li>
					</ul>
                    </form>
			</div>
		</div>
	</div>
	

    <div id="dropDownSelect1"></div>

   
    @endsection