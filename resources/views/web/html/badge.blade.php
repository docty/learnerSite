@extends('web.html.index')
@section('maincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">CONGRATULATION </h2>
            </div>
        </div>

        <!-- Definition -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Message </h4>
                <p class="holder-message">You are now a complete web developer in HTML.</p>
                <img src="{{asset('/images/web/badge.jpg')}}" class="holder-image" style="width:50%; border-raduis:30px" > 
                
                <p class="holder-message">Hoping to see in the CSS class, where we design our web page to make it nicer.</p>
            </div>
        </div>


 @endsection