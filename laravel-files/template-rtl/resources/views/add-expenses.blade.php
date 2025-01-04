<?php $page="add-expenses";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Expenses @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Expenses @endslot
    @slot('li_3') Add Expenses @endslot
@endcomponent 	

	@section('css')
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
    @endsection 
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="#">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Category:</label>
									<select class="select">
										<option>Select Category</option>
										<option>Advertising</option>
										<option>Marketing</option>
										<option>Software</option>
										<option>Travel</option>
									</select>
								</div>
								<div class="form-group">
									<label>Note:</label>
									<textarea rows="5" cols="5" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Date:</label>
									<div class="cal-icon">
										<input class="form-control datetimepicker" type="text">
									</div>
								</div>
								<div class="form-group">
									<label>Customer:</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Amount:</label>
									<input type="text" class="form-control">
								</div>
								<div class="text-end mt-4">
									<button type="submit" class="btn btn-primary">Add Expenses</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
				
        @endsection

     @section('script')        
	     <!-- Select2 JS -->
	     <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
	     <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
	     <!-- Datepicker Core JS -->
		 <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
		 <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
    @endsection