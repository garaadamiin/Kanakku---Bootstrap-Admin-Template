<?php $page="maps-vector";?>
@extends('layout.mainlayout')
 @section('css')
         <!-- Map CSS -->
        <link rel="stylesheet" href="{{url('assets/libs/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    @endsection 

@section('content')	
@component('components.breadcrumb')                
    @slot('title') Vector Maps @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_3') Vector Maps @endslot
@endcomponent
 
         <!-- World Map -->
         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="card-title">World Map</h5>
                     </div>
                     <div class="card-body">
                         <div id="world_map" style="height: 400px"></div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- /World Map -->
    
         <div class="row">
             <div class="col-lg-6">
                 <!-- USA Map -->
                 <div class="card bg-white">
                     <div class="card-header">
                         <h5 class="card-title">USA Map</h5>
                     </div>
                     <div class="card-body">
                         <div id="usa" style="height: 400px"></div>
                     </div>
                 </div>
                 <!-- /USA Map -->
             </div>
             <div class="col-lg-6">
                 <!-- UK Map -->
                 <div class="card bg-white">
                     <div class="card-header">
                         <h5 class="card-title">UK Map</h5>
                     </div>
                     <div class="card-body">
                         <div id="uk" style="height: 400px"></div>
                     </div>
                 </div>
                 <!-- /UK Map -->
             </div>
         </div>
    
         <div class="row">
             <div class="col-lg-6">
                 <!-- India Map -->
                 <div class="card bg-white">
                     <div class="card-header">
                         <h5 class="card-title">India Map</h5>
                     </div>
                     <div class="card-body">
                         <div id="india" style="height: 400px"></div>
                     </div>
                 </div>
                 <!-- /India Map -->
             </div>
             <div class="col-lg-6">
                 <!-- Russia Map -->
                 <div class="card bg-white">
                     <div class="card-header">
                         <h5 class="card-title">Russia Map</h5>
                     </div>
                     <div class="card-body">
                         <div id="russia" style="height: 400px"></div>
                     </div>
                 </div>
                 <!-- /Russia Map -->
             </div>
         </div>
         
@endsection
@section('script')        
   <!-- Map JS -->
        <script src="{{ URL::asset('assets/libs/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>   
        <script src="{{ URL::asset('assets/libs/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jvectormap/jquery-jvectormap-ru-mill.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jvectormap/jquery-jvectormap-uk_countries-mill.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jvectormap/jquery-jvectormap-in-mill.js')}}"></script>
         <script src="{{ URL::asset('assets/js/pages/vectormap.init.js')}}"></script>
        <!-- Slimscroll JS -->
        <script src="{{ URL::asset('/assets/libs/slimscroll/slimscroll.min.js')}}"></script>
        <script src="{{ URL::asset('/assets/js/pages/slimscroll.init.js')}}"></script>
       
@endsection
