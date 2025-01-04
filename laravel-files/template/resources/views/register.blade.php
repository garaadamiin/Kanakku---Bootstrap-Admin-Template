<?php $page="register";?>
@extends('layout.mainlayout-without-nav')
@section('content')		


		<h1>Register</h1>
		<p class="account-subtitle">Access to our dashboard</p>
		<!-- Form -->
		<form action="{{ route('register.custom') }}" method="POST">
		@csrf
			<div class="form-group">
				<label class="form-control-label">Name</label><span class="text-danger ms-1">*</span>
				<input type="text" placeholder="Name" id="name" class="form-control"
        	name="name" value="{{old('name')}}">
             	<div class="text-danger pt-2">
                 	@error('name')
            			{{$message}}
                	@enderror
            	</div>
			</div>
			<div class="form-group">
				<label class="form-control-label">Email Address</label><span class="text-danger ms-1">*</span>
				<input type="text" placeholder="Email" id="email_address" class="form-control"
            name="email" value="">
               <div class="text-danger pt-2">
                   @error('email')
                		{{$message}}
                    @enderror
                </div>
			</div>
			<div class="form-group">
				<label class="form-control-label">Password</label><span class="text-danger ms-1">*</span>
				<div class="pass-group">
					<input type="password" placeholder="Password" id="password" class="form-control pass-input"
            name="password" value="{{old('password')}}">
					<span class="fas fa-eye-slash toggle-password"></span>
					<div class="text-danger pt-2">
                    	@error('password')
                			{{$message}}
                    	@enderror
                	</div>
				</div>
			</div>
			<div class="form-group mb-0">
				<button class="btn btn-lg btn-block btn-primary w-100" type="submit">Register</button>
			</div>
		</form>
		<!-- /Form -->
		
		<div class="login-or">
			<span class="or-line"></span>
			<span class="span-or">or</span>
		</div>
		<!-- Social Login -->
		<div class="social-login">
			<span>Register with</span>
			<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
		</div>
		<!-- /Social Login -->
		<div class="text-center dont-have">Already have an account? <a href="{{url('login')}}">Login</a></div>
							
@endsection