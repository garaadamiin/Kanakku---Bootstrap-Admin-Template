<?php $page="login";?>
@extends('layout.mainlayout-without-nav')
@section('content')		


			<h1>Login</h1>
			<p class="account-subtitle">Access to our dashboard</p>
			<form method="POST" action="{{ route('login.custom') }}">
			@csrf
				<div class="form-group">
					<label class="form-control-label">Email Address</label>
					<input type="text" placeholder="Email" id="Email" class="form-control" name="email" value="admin@dreamguys.co.in">
					<div class="text-danger pt-2">
                	@error('0')
            			{{$message}}
                	@enderror
                	@error('email')
            			{{$message}}
                	@enderror
            	</div>
				</div>
				<div class="form-group">
					<label class="form-control-label">Password</label>
					<div class="pass-group">
						<input type="password" placeholder="Password" id="password" class="form-control pass-input " name="password" value="123456">
						<span class="fas fa-eye-slash toggle-password"></span>
						<div class="text-danger pt-2">
                        	@error('password')
                    			{{$message}}
                        	@enderror
                    	</div>
					</div>
				</div>
				<div class="form-group Password-icon">
					<div class="row">
						<div class="col-6">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="cb1">
								<label class="custom-control-label" for="cb1">Remember me</label>
							</div>
						</div>
						<div class="col-6 text-end">
							<a class="forgot-link" href="{{url('forgot-password')}}">Forgot Password ?</a>
						</div>
					</div>
				</div>
				<button class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>
				<div class="login-or">
					<span class="or-line"></span>
					<span class="span-or">or</span>
				</div>
				<!-- Social Login -->
				<div class="social-login mb-3">
					<span>Login with</span>
					<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
				</div>
				<!-- /Social Login -->
				<div class="text-center dont-have">Don't have an account yet? <a href="{{url('register')}}">Register</a></div>
			</form>
						
		
@endsection