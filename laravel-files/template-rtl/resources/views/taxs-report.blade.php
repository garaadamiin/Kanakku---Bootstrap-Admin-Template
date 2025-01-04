<?php $page="taxs-report";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Taxs Report @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Reports @endslot
@endcomponent
	@section('css')
     <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/datatables/dataTables.bootstrap4.min.css')}}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection 
		<!-- Search Filter -->
		<div id="filter_inputs" class="card filter-card">
			<div class="card-body pb-0">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Slect Date Range</label>
							<select class="select">
								<option>Select</option>
								<option>Today</option>
								<option>This Week</option>
								<option>This Month</option>
								<option>This Quarter</option>
								<option>This Year</option>
								<option>Previous Week</option>
								<option>Previous Month</option>
								<option>Previous Quarter</option>
								<option>Previous Year</option>
							</select>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							<label>From</label>
							<div class="cal-icon">
								<input class="form-control datetimepicker" type="text">
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>To</label>
							<div class="cal-icon">
								<input class="form-control datetimepicker" type="text">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Search Filter -->
		
		<div class="row">
			<div class="col-sm-12">
				<div class="card card-table"> 
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-center table-hover datatable">
								<thead class="thead-light">
									<tr>
										<th>#</th>
										<th>Date</th>
										<th>Economic Zone</th>
										<th>Tax</th>
										<th>Tax Rate</th>
										<th>Net Revenue</th>
										<th>Gross Revenue</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>7 Jan 2021</td>
										<td>Tax Free Customers</td>
										<td>Tax Free</td>
										<td>5%</td>
										<td>$108</td>
										<td>$108</td>
										<td>$0</td>
									</tr>
									<tr>
										<td>1</td>
										<td>28 Feb 2021</td>
										<td>Default</td>
										<td>General Sales Tax</td>
										<td>6%</td>
										<td>$3660</td>
										<td>$3898</td>
										<td>$238</td>
									</tr>
									<tr>
										<td>3</td>
										<td>10 Mar 2021</td>
										<td>Default</td>
										<td>General Sales Tax</td>
										<td>7%</td>
										<td>$4517</td>
										<td>$4889</td>
										<td>$372</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
					
			
@endsection
@section('script')        
   		<!-- Datatable JS -->
		<script src="{{ URL::asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{ URL::asset('assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{ URL::asset('assets/js/pages/datatable.init.js')}}"></script>
        <!-- Select2 JS -->
        <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>   
        <script src="{{ URL::asset('/assets/js/pages/select2.init.js')}}"></script>
        <!-- Datepicker Core JS -->
	   <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
	   <script src="{{ URL::asset('/assets/js/pages/datetimepicker.init.js')}}"></script>
@endsection