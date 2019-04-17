@extends('layouts.app')
@push('mainstyles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
@endpush
@section('content')
	@include('Includes.header')
	@include('Includes.intro_section')
@endsection
@push('mainscripts')
    <script src="{{ asset('js/jquery-migrate.min.js') }}" defer></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
	<script src="{{ asset('js/easing.min.js') }}" defer></script>
	<script src="{{ asset('js/wow.min.js') }}" defer></script>
	<script src="{{ asset('js/hoverIntent.js') }}" defer></script>
	<script src="{{ asset('js/superfish.min.js') }}" defer></script> 
	<script src="{{ asset('js/magnific-popup.min.js') }}" defer></script>
	<script src="{{ asset('js/contactform.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endpush
