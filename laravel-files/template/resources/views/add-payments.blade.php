<?php $page="add-payments";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Payments @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Payments @endslot
    @slot('li_3') Add Payments @endslot
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
										<label>Date:</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
									<div class="form-group">
										<label>Customer:</label>
										<select class="select">
											<option>Select Customer</option>
											<option>Brian Johnson</option>
											<option>Marie Canales</option>
											<option>Barbara Moore</option>
											<option>Greg Lynch</option>
											<option>Karlene Chaidez</option>
										</select>
									</div>
									<div class="form-group">
										<label>Address:</label>
										<textarea rows="5" cols="5" class="form-control" placeholder="Enter Address"></textarea>
									</div>
								</div>
								<div class="col-md-6"> 
									<div class="form-group">
										<label>Amount:</label>
										<input type="text" class="form-control">
									</div> 
									<div class="form-group">
										<label>Payment Number:</label>
										<input type="text" class="form-control">
									</div> 
									<div class="form-group">
										<label>Invoice:</label>
										<select class="select">
											<option>Select Invoice</option>
											<option value="Afganistan">List Empty</option> 
										</select>
									</div> 
									<div class="form-group">
										<label>Payment Mode:</label>
										<select class="select">
											<option>Select Payment Mode</option>
											<option value="Afganistan">Cash</option>
											<option value="Albania">Credit</option>
											<option value="Algeria">Cheque</option> 
										</select>
									</div> 
									<div class="text-end mt-4">
										<button type="submit" class="btn btn-primary">Add Payments</button>
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
	 <script src="{{ URL::asset('/assets/libs/moment/moment.min.js')}}"></script>
	 <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
	 <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
  @endsection