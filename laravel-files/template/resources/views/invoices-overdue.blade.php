	<?php $page="invoices-overdue";?>
	@extends('layout.mainlayout')
	@section('content')	
	@section('css')
		<!-- Select2 CSS -->
        <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
		<!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
		<!-- DataTables CSS -->
    	<link rel="stylesheet" href="{{url('assets/libs/datatables/dataTables.bootstrap4.min.css')}}">
	@endsection 
		<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Invoices</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('index')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="{{url('invoices')}}">Invoice</a></li>
									<li class="breadcrumb-item active">Invoices Overdue</li>
								</ul>
							</div>
							<div class="col-auto">
								<a href="{{url('invoices')}}" class="invoices-links active">
									<i data-feather="list"></i>
								</a>
								<a href="{{url('invoice-grid')}}" class="invoices-links">
									<i data-feather="grid"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
			   
					<!-- Report Filter -->
					<div class="card report-card">
						<div class="card-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<ul class="app-listing">
										<li>
											<div class="multipleSelection">
												<div class="selectBox">
													<p class="mb-0"><i data-feather="user-plus" class="me-1 select-icon"></i> Select User</p>
													<span class="down-icon"><i data-feather="chevron-down"></i></span>
												</div>						  
												<div id="checkBoxes">
													<form action="#">
														<p class="checkbox-title">Customer Search</p>
														<div class="form-custom">
															<input type="text" class="form-control bg-grey" placeholder="Enter Customer Name">
														</div>
														<div class="selectBox-cont">
															<label class="custom_check w-100">
																<input type="checkbox" name="username">
																<span class="checkmark"></span>  Brian Johnson
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="username">
																<span class="checkmark"></span>  Russell Copeland
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="username">
																<span class="checkmark"></span>  Greg Lynch
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="username">
																<span class="checkmark"></span> John Blair
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="username">
																<span class="checkmark"></span> Barbara Moore
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="username">
																<span class="checkmark"></span> Hendry Evan
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="username">
																<span class="checkmark"></span> Richard Miles
															</label>
														</div>
														<button type="submit" class="btn w-100 btn-primary">Apply</button>
														<button type="reset" class="btn w-100 btn-grey">Reset</button>
													</form>
												</div>
											</div>
										</li>
										<li>
											<div class="multipleSelection">
												<div class="selectBox">
													<p class="mb-0"><i data-feather="calendar" class="me-1 select-icon"></i> Select Date</p>
													<span class="down-icon"><i data-feather="chevron-down"></i></span>
												</div>						  
												<div id="checkBoxes">
													<form action="#">
														<p class="checkbox-title">Date Filter</p>
														<div class="selectBox-cont selectBox-cont-one h-auto">
															<div class="date-picker">
																<div class="form-custom cal-icon">
																	<input class="form-control datetimepicker" type="text" placeholder="Form">
																</div>
															</div>
															<div class="date-picker pe-0">
																<div class="form-custom cal-icon">
																	<input class="form-control datetimepicker" type="text" placeholder="To">
																</div>
															</div>
															<div class="date-list">
																<ul>
																	<li><a href="#" class="btn date-btn">Today</a></li>
																	<li><a href="#" class="btn date-btn">Yesterday</a></li>
																	<li><a href="#" class="btn date-btn">Last 7 days</a></li>
																	<li><a href="#" class="btn date-btn">This month</a></li>
																	<li><a href="#" class="btn date-btn">Last month</a></li>
																</ul>
															</div>
														</div>
													</form>
												</div>
											</div>
										</li>
										<li>
											<div class="multipleSelection">
												<div class="selectBox">
													<p class="mb-0"><i data-feather="book-open" class="me-1 select-icon"></i> Select Status</p>
													<span class="down-icon"><i data-feather="chevron-down"></i></span>
												</div>						  
												<div id="checkBoxes">
													<form action="#">
														<p class="checkbox-title">By Status</p>
														<div class="selectBox-cont">
															<label class="custom_check w-100">
																<input type="checkbox" name="name">
																<span class="checkmark"></span> All Invoices
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="name">
																<span class="checkmark"></span> Paid
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="name" checked>
																<span class="checkmark"></span> Overdue
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="name">
																<span class="checkmark"></span> Draft
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="name">
																<span class="checkmark"></span> Recurring
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="name">
																<span class="checkmark"></span> Cancelled
															</label>
														</div>
														<button type="submit" class="btn w-100 btn-primary">Apply</button>
														<button type="reset" class="btn w-100 btn-grey">Reset</button>
													</form>
												</div>
											</div>
										</li>
										<li>
											<div class="multipleSelection">
												<div class="selectBox">
													<p class="mb-0"><i data-feather="bookmark" class="me-1 select-icon"></i> By Category</p>
													<span class="down-icon"><i data-feather="chevron-down"></i></span>
												</div>						  
												<div id="checkBoxes">
													<form action="#">
														<p class="checkbox-title">Category</p>
														<div class="form-custom">
															<input type="text" class="form-control bg-grey" placeholder="Enter Category Name">
														</div>
														<div class="selectBox-cont">
															<label class="custom_check w-100">
																<input type="checkbox" name="category">
																<span class="checkmark"></span> Advertising
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="category">
																<span class="checkmark"></span> Food
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="category">
																<span class="checkmark"></span> Marketing
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="category">
																<span class="checkmark"></span> Repairs
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="category">
																<span class="checkmark"></span> Software
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="category">
																<span class="checkmark"></span> Stationary
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" name="category">
																<span class="checkmark"></span> Travel
															</label>
														</div>
														<button type="submit" class="btn w-100 btn-primary">Apply</button>
														<button type="reset" class="btn w-100 btn-grey">Reset</button>
													</form>
												</div>
											</div>
										</li>
										<li>
											<div class="report-btn">
												<a href="#" class="btn">
													<img src="{{ URL::asset('assets/img/icons/invoices-icon5.svg')}}" alt="" class="me-2"> Generate report
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /Report Filter -->

					<div class="card invoices-tabs-card">
						<div class="card-body card-body pt-0 pb-0">
							<div class="invoices-main-tabs">
								<div class="row align-items-center">
									<div class="col-lg-8 col-md-8">
										<div class="invoices-tabs">
											<ul>
												<li><a href="{{url('invoices')}}">All Invoice</a></li>
												<li><a href="{{url('invoices-paid')}}">Paid</a></li>	
												<li><a href="{{url('invoices-overdue')}}" class="active">Overdue</a></li>		
												<li><a href="{{url('invoices-draft')}}">Draft</a></li>	
												<li><a href="{{url('invoices-recurring')}}">Recurring</a></li>
												<li><a href="{{url('invoices-cancelled')}}">Cancelled</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-4 col-md-4">
										<div class="invoices-settings-btn">
											<a href="{{url('invoices-settings')}}" class="invoices-settings-icon">
												<i data-feather="settings"></i>
											</a>
											<a href="{{url('add-invoice')}}" class="btn">
												<i data-feather="plus-circle"></i> New Invoice
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="inovices-widget-header">
										<span class="inovices-widget-icon">
											<img src="{{ URL::asset('assets/img/icons/invoices-icon1.svg')}}" alt="">
										</span>
										<div class="inovices-dash-count">
											<div class="inovices-amount">$8,78,797</div>
										</div>
									</div>
									<p class="inovices-all">All Invoices <span>50</span></p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="inovices-widget-header">
										<span class="inovices-widget-icon">
											<img src="{{ URL::asset('assets/img/icons/invoices-icon2.svg')}}" alt="">
										</span>
										<div class="inovices-dash-count">
											<div class="inovices-amount">$4,5884</div>
										</div>
									</div>
									<p class="inovices-all">Paid Invoices <span>60</span></p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="inovices-widget-header">
										<span class="inovices-widget-icon">
											<img src="{{ URL::asset('assets/img/icons/invoices-icon3.svg')}}" alt="">
										</span>
										<div class="inovices-dash-count">
											<div class="inovices-amount">$2,05,545</div>
										</div>
									</div>
									<p class="inovices-all">Unpaid Invoices <span>70</span></p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="inovices-widget-header">
										<span class="inovices-widget-icon">
											<img src="{{ URL::asset('assets/img/icons/invoices-icon4.svg')}}" alt="">
										</span>
										<div class="inovices-dash-count">
											<div class="inovices-amount">$8,8,797</div>
										</div>
									</div>
									<p class="inovices-all">Cancelled Invoices <span>80</span></p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="card card-table"> 
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-stripped table-hover datatable">
											<thead class="thead-light">
												<tr>
												   <th>Invoice ID</th>
												   <th>Invoice to</th>
												   <th>Amount</th>
												   <th>Created on</th>
												   <th>Last date</th>
												   <th>Status</th>
												   <th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="{{url('view-invoice')}}" class="invoice-link">IN093439#@09</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-04.jpg')}}" alt="User Image"> Barbara Moore</a>
														</h2>
													</td>
													<td class="text-primary">$1,54,220</td>
													<td>16 Mar 2022</td>
													<td>23 Mar 2022</td>
													<td><span class="badge bg-danger-light">Overdue 7 days</span></td>
													<td class="text-end">
														<a href="{{url('edit-invoice')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a class="btn btn-sm btn-white text-danger" href="#" data-bs-toggle="modal" data-bs-target="#delete_paid"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="{{url('view-invoice')}}" class="invoice-link">IN093439#@10</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-06.jpg')}}" alt="User Image"> Karlene Chaidez</a>
														</h2>
													</td>
													<td class="text-primary">$1,222</td>
													<td>14 Mar 2022</td>
													<td>18 Mar 2022</td>
													<td><span class="badge bg-danger-light">Overdue 4 days</span></td>
													<td class="text-end">
														<a href="{{url('edit-invoice')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a class="btn btn-sm btn-white text-danger" href="#" data-bs-toggle="modal" data-bs-target="#delete_paid"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="{{url('view-invoice')}}" class="invoice-link">IN093439#@11</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-08.jpg')}}" alt="User Image"> Russell Copeland</a>
														</h2>
													</td>
													<td class="text-primary">$3,470</td>
													<td>7 Mar 2022</td>
													<td>10 Mar 2022</td>
													<td><span class="badge bg-danger-light">Overdue 3 days</span></td>
													<td class="text-end">
														<a href="{{url('edit-invoice')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a class="btn btn-sm btn-white text-danger" href="#" data-bs-toggle="modal" data-bs-target="#delete_paid"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="{{url('view-invoice')}}" class="invoice-link">IN093439#@12</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"> Joseph Collins</a>
														</h2>
													</td>
													<td class="text-primary">$8,265</td>
													<td>24 Mar 2022</td>
													<td>30 Mar 2022</td>
													<td><span class="badge bg-danger-light">Overdue 6 days</span></td>
													<td class="text-end">
														<a href="{{url('edit-invoice')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a class="btn btn-sm btn-white text-danger" href="#" data-bs-toggle="modal" data-bs-target="#delete_paid"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<label class="custom_check">
															<input type="checkbox" name="invoice">
															<span class="checkmark"></span> 
														</label>
														<a href="{{url('view-invoice')}}" class="invoice-link">IN093439#@13</a>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-11.jpg')}}" alt="User Image"> Jennifer Floyd</a>
														</h2>
													</td>
													<td class="text-primary">$5,200</td>
													<td>17 Mar 2022</td>
													<td>20 Mar 2022</td>
													<td><span class="badge bg-danger-light">Overdue 3 days</span></td>
													<td class="text-end">
														<a href="{{url('edit-invoice')}}" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a class="btn btn-sm btn-white text-danger" href="#" data-bs-toggle="modal" data-bs-target="#delete_paid"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		    <!-- Delete Paid Modal -->
			<div class="modal custom-modal fade" id="delete_paid" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Delete Invoice Overdue</h3>
								<p>Are you sure want to delete?</p>
							</div>
							<div class="modal-btn delete-action">
								<div class="row">
									<div class="col-6">
										<a href="javascript:void(0);" class="btn btn-primary paid-continue-btn">Delete</a>
									</div>
									<div class="col-6">
										<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Paid Modal -->
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