@extends('layouts.app')
@push('mainstyles')
    
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/lessons.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/prettify.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/style-responsive.css')}}">
	

@endpush
@section('content')
	@include('Includes.header')
	<div class="page-wrapper">

		<!-- MENU SIDEBAR-->
      @include('web.html.sidebar')
        <!-- END MENU SIDEBAR-->
        <div class="main-content">
       		<div class="page-container">
    			<div class="section__content section__content--p30">
                	<div class="container-fluid">
                    	@yield('maincontent')
                	</div>
            	</div>
			</div>
		</div>
        

	</div>




@endsection

@push('mainscripts')

	<!-- Jquery JS-->
    <!-- Vendor JS       -->
    <script src="{{ asset('js/animsition.min.js') }}" defer></script>
	<script src="{{ asset('js/mainlesson.js') }}" defer></script>
	<script src="{{ asset('js/perfect-scrollbar.js') }}" defer></script>
	<script src="{{ asset('js/run_prettify.js') }}" defer></script>
	
	










@endpush