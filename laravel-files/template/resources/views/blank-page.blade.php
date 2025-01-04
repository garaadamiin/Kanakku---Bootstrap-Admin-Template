<?php $page="blank-page";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')                
    @slot('title') Blank Page @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Blank Page @endslot
@endcomponent 	
		
		<div class="row">
			<div class="col-sm-12">
				Contents here
			</div>			
		</div>
				
@endsection