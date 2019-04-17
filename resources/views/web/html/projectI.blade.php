@extends('web.html.index')
@section('maincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">PROJECT I</h2>
            </div>
        </div>

        <!-- Definition -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Congratulation </h4>
                <p class="holder-message">After a series of tutorial, let's us build a real project based on what we have learned so far. <br>Taking project enhances your developing skills</p>
            </div>
        </div>

        <!-- Task -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Task </h4>
                <p class="holder-message">Design a personal website to display basic information about yourself.</p>
            </div>
        </div>

        <!-- Prerequisite -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Prerequisite </h4>
                <p class="holder-message">After a series of tutorial, let's us build a real project based on what we have learned so far. <br>Taking project enhances your developing skills</p>
                <ol class="holder-message">
                    <li style="margin-left: 25px">Create a new folder on the desktop and name it as "Project I".</li>
                    <li style="margin-left:25px">Open the notepad++ application and create a new page by pressing "Ctrl + N" from the keyboard.</li>
                    <li style="margin-left:25px">Select "File" from the menu bar which is located at the top left and click on "Save As" command.</li>
                    <li style="margin-left:25px">Select Desktop on the left panel and select the folder created. That is "Project I"</li>
                    <li style="margin-left:25px">Type a name for the file in the File name box. Let's use "index.html" to make our work similar.</li>
                    <li style="margin-left:25px">Select "Hyper Text Markup Language file from the drop box " at the Save as type.</li>
                    <li style="margin-left:25px">Save an image in the "Project I" folder. we named the image file as "docty.jpg". You can use a different name for the image but has to be the same as the one in the <b>img</b> tag.</li>
                </ol>
                <img src="{{asset('/images/web/project_I_setup.jpg')}}" class="holder-image" >
            </div>
        </div>

        <!-- Setting up -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Setting Up </h4>
                <p class="holder-message">Type the code below in the notepad file we just created. We used a new tag called <b>div</b>. It is used to group different elements together</p>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
    <head>
       <title>My Personal Site</title>
    </head>
    <body style="background-color:#f8f9f3">

        <h1 style="text-align:center">Docty Tek</h1>

        <div style="background-color:#e4bb7e">
            <h2>Introduction</h2>
            <p style="font-size: 20px">My name is Henry Asiedu. Am a Ghanaian. I am a web developer. I like reading and listening to music when am bored.</p>
            <p style="font-size: 20px">As far as food is very essential, i don\'t joke when eating.</p>
        </div>

        <div style="background-color:#e4bb7e">
            <h2>Programming Skills</h2>
            <ul type="square" style="font-size:20px; color:#523a15">
                <li>HTML </li>
                <li>CSS </li>
                <li>JAVASCRIPT </li>
                <li>PHP </li>
            </ul>
        </div>

        <img src="docty.jpg" alt="Cannot find any image" style="width:25%; height:50%" />
    </body>
</html>'}}
         </pre>
         <p class="holder-message">Congratulation once again. We have created our first web project. This is awesome. The most important thing is, can we interpret each line of code? If your answer is "yes", Hurray!!!!. <br> You are now a web developer. Go out there and declare to your friends that you are now a web developer.</p>
         <p class="holder-message">Thou, somethings were new to us example the style values but worry no more, we shall go through the page styling using css in later section.<br> Refresh the page with F5 to observe the new awesome changes. <br> <b>Well Done</b></p>
            </div>
        </div> 

        <!-- Results -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Results </h4> 
                <img src="{{asset('/images/web/project_I_result.jpg')}}" class="holder-image" >
            </div>
        </div>

        <!-- End of Row -->
    </div>

@endsection