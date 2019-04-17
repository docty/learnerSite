@extends('web.html.index')
@section('maincontent')
	<div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Introduction</h2>
            </div>
        </div>

        <div class="col-md-12">
            <div class="section holder" >
                <h4>Installation</h4>
                <p class="holder-message">It is enough with the plenty talks. Lets start by setting our environment or computers ready. <br>Majority of online materials and videos prescribe notepad but it will be best if you switch to the modern softwares now. Examples of such softwares are Netbeans, sublime Text, Atom, Notepad++ etc. We shall be using notepad++ for this tutorial since it is the modern form of notepad and is basically used for programming. <br> Open your web browser and type <span style="color:blue">https://notepad-plus-plus.org/download/</span></p>
                
            </div>
        </div>
        <div class="col-md-12">
            <div class="section holder" >
            	<h4>Downloads</h4>
            	<p class="holder-message">Click on the <strong>DOWNLOAD</strong> button to the download the file.</p>
        		<img src="{{asset('/images/web/notepadsetup.jpg')}}" class="holder-image" > 
        		<p class="holder-message">After downloading, double click on the downloaded file to open.</p>
        		<img src="{{asset('/images/web/notepadinstall1.jpg')}}" class="holder-image" > 
        		<p class="holder-message">Select your preferred language and click OK.</p>
        		<img src="{{asset('/images/web/notepadinstall2.jpg')}}" class="holder-image" > 
        		<p class="holder-message">Click on Next.</p>
        		<img src="{{asset('/images/web/notepadinstall3.jpg')}}" class="holder-image" >
        		<p class="holder-message">Click on I Agree.</p> 
        		<img src="{{asset('/images/web/notepadinstall4.jpg')}}" class="holder-image" > 
        		<p class="holder-message">Click on Next.</p>
        		<img src="{{asset('/images/web/notepadinstall5.jpg')}}" class="holder-image" > 
        		<p class="holder-message">Click on Next</p>
        		<img src="{{asset('/images/web/notepadinstall6.jpg')}}" class="holder-image" >
        		<p class="holder-message">Tick on "Create Shortcut on Desktop". <br> Click on Install</p> 
        		<img src="{{asset('/images/web/notepadinstall7.jpg')}}" class="holder-image" >
        		<p class="holder-message">Click on Finish to run the application.</p>
        		<img src="{{asset('/images/web/notepadopen.jpg')}}" class="holder-image" >
        		<p class="holder-message">This is the interface for Notepad++ software</p>  	

    		</div>
		</div>
		        <div class="col-md-12">
        	<button class="btn btn-primary " style="width: 20%" type="button">NEXT</button>
        </div>
    </div>

@endsection