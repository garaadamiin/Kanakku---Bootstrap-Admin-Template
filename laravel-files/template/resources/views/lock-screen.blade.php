<?php $page="lock-screen";?>
@extends('layout.mainlayout-without-nav')
@section('content')		



		<div class="lock-user">
			<img class="rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
			<h4>John Doe</h4>
		</div>
		
		<!-- Form -->
		<form action="index">
			<div class="form-group">
				<label class="form-control-label">Password</label>
				<input class="form-control" type="text">
			</div>
			<div class="form-group mb-0">
				<button class="btn btn-lg btn-block btn-primary w-100" type="submit">Enter</button>
			</div>
		</form>
		<!-- /Form -->
		
		<div class="text-center dont-have">Sign in as a different user? <a href="{{url('login')}}">Login</a></div>
	
@endsection