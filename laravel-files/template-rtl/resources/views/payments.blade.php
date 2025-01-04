<?php $page="payments";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Payments @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Payments @endslot
@endcomponent
@section('css')
     <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{url('assets/libs/datatables/dataTables.bootstrap4.min.css')}}">
     <!-- Select2 CSS -->
     <link rel="stylesheet" href="{{url('assets/libs/select2/select2.min.css')}}">
@endsection 
			<!-- Search Filter -->
			<div id="filter_inputs" class="card filter-card">
				<div class="card-body pb-0">
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label>Customer</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label>Price</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label>Payment Mode</label>
								<select class="select">
									<option>Payment Mode</option>
									<option>Cash</option>
									<option>Cheque</option>
									<option>Card</option>
									<option>Online</option>
								</select>
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
											<th>Reference ID</th>
											<th>Customer</th>
											<th>Amount</th>
											<th>Date</th>
											<th>Payment Method</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a href="javascript:void(0);">#3682303</a></td>
											<td>
												<h2 class="table-avatar">
													<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}" alt="User Image"> Marie Canales</a>
												</h2>
											</td>
											<td>$717</td>
											<td>17 Nov 2020</td>
											<td>Visa <strong>4321</strong></td>
											<td class="text-right">
												<a class="btn btn-sm btn-white me-2" href="javascript:void(0);">
													<i class="fas fa-download me-1"></i> PDF
												</a>
												<a class="btn btn-sm btn-white" href="{{url('view-invoice')}}">
													<i class="far fa-eye me-1"></i> View
												</a>
											</td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">#875642</a></td>
											<td>
												<h2 class="table-avatar">
													<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="User Image"> Greg Lynch</a>
												</h2>
											</td>
											<td>$582</td>
											<td>6 Nov 2020</td>
											<td>Visa <strong>3654</strong></td>
											<td class="text-right">
												<a class="btn btn-sm btn-white me-2" href="javascript:void(0);">
													<i class="fas fa-download me-1"></i> PDF
												</a>
												<a class="btn btn-sm btn-white" href="{{url('view-invoice')}}">
													<i class="far fa-eye me-1"></i> View
												</a>
											</td>
										</tr>
										<tr>
										   <td><a href="javascript:void(0);">#635489</a></td>
											<td>
												<h2 class="table-avatar">
													<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg')}}" alt="User Image"> Karlene Chaidez</a>
												</h2>
											</td>
											<td>$698</td>
											<td>1 Nov 2020</td>
											<td>Visa <strong>8795</strong></td>
											<td class="text-right">
												<a class="btn btn-sm btn-white me-2" href="javascript:void(0);">
													<i class="fas fa-download me-1"></i> PDF
												</a>
												<a class="btn btn-sm btn-white" href="{{url('view-invoice')}}">
													<i class="far fa-eye me-1"></i> View
												</a>
											</td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">#542187</a></td>
											<td>
												<h2 class="table-avatar">
													<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg')}}" alt="User Image"> John Blair</a>
												</h2>
											</td>
											<td>$325</td>
											<td>25 Oct 2020</td>
											<td>Visa <strong>4523</strong></td>
											<td class="text-right">
												<a class="btn btn-sm btn-white me-2" href="javascript:void(0);">
													<i class="fas fa-download me-1"></i> PDF
												</a>
												<a class="btn btn-sm btn-white" href="{{url('view-invoice')}}">
													<i class="far fa-eye me-1"></i> View
												</a>
											</td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">#45268</a></td>
											<td>
												<h2 class="table-avatar">
													<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg')}}" alt="User Image"> Russell Copeland</a>
												</h2>
											</td>
											<td>$120</td>
											<td>11 Oct 2020</td>
											<td>Visa <strong>5689</strong></td>
											<td class="text-right">
												<a class="btn btn-sm btn-white me-2" href="javascript:void(0);">
													<i class="fas fa-download me-1"></i> PDF
												</a>
												<a class="btn btn-sm btn-white" href="{{url('view-invoice')}}">
													<i class="far fa-eye me-1"></i> View
												</a>
											</td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">#158790</a></td>
											<td>
												<h2 class="table-avatar">
													<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image"> Leatha Bailey</a>
												</h2>
											</td>
											<td>$444</td>
											<td>17 Sep 2020</td>
											<td>Visa <strong>9632</strong></td>
											<td class="text-right">
												<a class="btn btn-sm btn-white me-2" href="javascript:void(0);">
													<i class="fas fa-download me-1"></i> PDF
												</a>
												<a class="btn btn-sm btn-white" href="{{url('view-invoice')}}">
													<i class="far fa-eye me-1"></i> View
												</a>
											</td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">#248960</a></td>
											<td>
												<h2 class="table-avatar">
													<a href="{{url('profile')}}"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="User Image"> Joseph Collins</a>
												</h2>
											</td>
											<td>$657</td>
											<td>12 Sep 2020</td>
											<td>Visa <strong>1254</strong></td>
											<td class="text-right">
												<a class="btn btn-sm btn-white me-2" href="javascript:void(0);">
													<i class="fas fa-download me-1"></i> PDF
												</a>
												<a class="btn btn-sm btn-white" href="{{url('view-invoice')}}">
													<i class="far fa-eye me-1"></i> View
												</a>
											</td>
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
@endsection