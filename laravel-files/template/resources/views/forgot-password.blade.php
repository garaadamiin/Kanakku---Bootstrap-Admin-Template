<?php $page="forgot-password";?>
@extends('layout.mainlayout-without-nav')
@section('content')

	
			<h1>Forgot Password?</h1>
			<p class="account-subtitle">Enter your email to get a password reset link</p>
			
			<!-- Form -->
			<form action="login">
				<div class="form-group">
					<label class="form-control-label">Email Address</label>
					<input class="form-control" type="text">
				</div>
				<div class="form-group mb-0">
					<button class="btn btn-lg btn-block btn-primary w-100" type="submit">Reset Password</button>
				</div>
			</form>
			<!-- /Form -->
			
			<div class="text-center dont-have">Remember your password? <a href="{{url('login')}}">Login</a></div>
							
        

@endsection