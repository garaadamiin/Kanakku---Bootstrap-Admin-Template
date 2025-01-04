<?php $page="delete-account";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Settings @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Delete Account @endslot
@endcomponent

	<div class="row">
		<div class="col-xl-3 col-md-4">
		
			<!-- Settings Menu -->
			<div class="widget settings-menu">
				<ul>
					<li class="nav-item">
						<a href="{{url('settings')}}" class="nav-link">
							<i class="far fa-user"></i> <span>Profile Settings</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('preferences')}}" class="nav-link">
							<i class="fas fa-cog"></i> <span>Preferences</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('tax-types')}}" class="nav-link">
							<i class="far fa-check-square"></i> <span>Tax Types</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('expense-category')}}" class="nav-link">
							<i class="far fa-list-alt"></i> <span>Expense Category</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('notifications')}}" class="nav-link">
							<i class="far fa-bell"></i> <span>Notifications</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('change-password')}}" class="nav-link">
							<i class="fas fa-unlock-alt"></i> <span>Change Password</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{url('delete-account')}}" class="nav-link active">
							<i class="fas fa-ban"></i> <span>Delete Account</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- /Settings Menu -->
			
		</div>
		
		<div class="col-xl-9 col-md-8">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Delete your account</h5>
				</div>
				<div class="card-body">
				
					<!-- Form -->
					<form>
						<p class="card-text">When you delete your account, you lose access to Kanakku account services, and we permanently delete your personal data.</p>
						<p class="card-text">Are you sure you want to close your account?</p>

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="delete_account">
								<label class="custom-control-label text-danger" for="delete_account">Confirm that I want to delete my account.</label>
							</div>
						</div>

						<div class="text-end">
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
					<!-- /Form -->
					
				</div>
			</div>
		</div>
	</div>

		
@endsection