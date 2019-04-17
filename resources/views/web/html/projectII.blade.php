@extends('web.html.index')
@section('maincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">PROJECT II</h2>
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
                <p class="holder-message">Design a personal website to display basic information about yourself. Let's progress from where we ended from the last project.</p>
            </div>
        </div>

        <!-- Prerequisite -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Prerequisite </h4>
                <p class="holder-message">It is assumed we all the the project I files. If not, please check the <a href="{{route('showfile', 'projectI')}}"> PROECT I </a> link to abrase yourself with it.</p>
                <ol class="holder-message">
                    <li style="margin-left: 25px">Open the "index.html" file from the notepad++ file.</li>
                </ol>
            </div>
        </div>

        <!-- Setting up -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Setting Up </h4>
                <p class="holder-message">Copy and paste the code below right after this <b><i> {{'<img src="docty.jpg" alt="Cannot find any image" style="width:25%; height:50%" />'}}</i> </b></p>
                <pre class="prettyprint linenums:50 ">
{{ '<hr>
<a href="gallery.html" clear="both">View All My Gallery</a>
<h4>My Daily activities</h4>
<table border="1" style="width:80%; height:50%">
  <tr style="background-color:#e4bb7e">
    <th>Day</th>
    <th>Time</th>
    <th>Activities</th>
  </tr>
  <tr>
    <td>Monday</td>
    <td>7:00am - 10:00am</td>
    <td>Coding</td>
  </tr>
    <tr>
    <td>Tuesday</td>
    <td>9:00am - 11:00am</td>
    <td>Playing Instrument</td>
  </tr>
    <tr>
    <td>Wednesday</td>
    <td>7:00am - 9:00am</td>
    <td>Reading</td>
  </tr>
    <tr>
    <td>Thursday</td>
    <td>8:00pm - 11:30pm</td>
    <td>Coding</td>
  </tr>
    <tr>
    <td>Friday</td>
    <td>6:00am - 7:00am</td>
    <td>Jogging</td>
  </tr>
    <tr>
    <td>Saturday</td>
    <td>6:00am - 8:00am</td>
    <td>House Chores</td>
  </tr>
    <tr>
    <td>Sunday</td>
    <td>2:00pm - 4:00pm</td>
    <td>Playing Instrument</td>
  </tr>
</table>

<h2>Contact Me</h2>
<form action="#" style="border: 1px solid lightblue; width:50%">
   <p>Full Name</p> 
   <input type="text" name="name" id="name" placeholder="Enter your full name"/>
   <p>Select your best skills </p>
   <input type="checkbox" name="html" value="html">Html</input>
   <input type="checkbox" name="css" value="css">Css</input>
   <input type="checkbox" name="javascript" value="javascript">Javascript</input>
   <p>Gender</p>
    <input type="radio" name="gender" value="male">Male</input>
    <input type="radio" name="gender" value="female">Female</input>
    <p>Country</p>
    <select>
        <option value="html">America</option>
        <option value="css">South Africa</option>
        <option value="javascript">Ghana</option>
        <option value="php">UK</option>
        <option value="html">Brazil</option>
        <option value="css">Nigeria</option>
        <option value="javascript">Italy</option>
        <option value="php">Germany</option>
    </select><p></p>
    <input type="submit" name="submit" value="Send" />
</form>'}}
         </pre>
         <p class="holder-message"><b>Note:</b>Don't forget to create a new html file and save it as "gallery.html" in the same folder as "PROJECT I".</p>
         <p class="holder-message">Congratulation, you are really advancing in the web development process. Remember, we shall study page styling later. The above code contains some styling properties, but it will make real sense when we dive more into the page design aspect. <br> <b>Well Done</b></p>
            </div>
        </div> 


<!-- Complete Code up -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Complete Code </h4>
                <p class="holder-message">You can copy this whole code and paste everything in your "index.html" file. But you have to clear everything in the "index.html" file first.</p>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
<head> 
    <title>My personal Website</title>
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
<hr>
<a href="gallery.html" clear="both">View All My Gallery</a>
<h4>My Daily activities</h4>
<table border="1" style="width:80%; height:50%">
  <tr style="background-color:#e4bb7e">
    <th>Day</th>
    <th>Time</th>
    <th>Activities</th>
  </tr>
  <tr>
    <td>Monday</td>
    <td>7:00am - 10:00am</td>
    <td>Coding</td>
  </tr>
    <tr>
    <td>Tuesday</td>
    <td>9:00am - 11:00am</td>
    <td>Playing Instrument</td>
  </tr>
    <tr>
    <td>Wednesday</td>
    <td>7:00am - 9:00am</td>
    <td>Reading</td>
  </tr>
    <tr>
    <td>Thursday</td>
    <td>8:00pm - 11:30pm</td>
    <td>Coding</td>
  </tr>
    <tr>
    <td>Friday</td>
    <td>6:00am - 7:00am</td>
    <td>Jogging</td>
  </tr>
    <tr>
    <td>Saturday</td>
    <td>6:00am - 8:00am</td>
    <td>House Chores</td>
  </tr>
    <tr>
    <td>Sunday</td>
    <td>2:00pm - 4:00pm</td>
    <td>Playing Instrument</td>
  </tr>
</table>

<h2>Contact Me</h2>
<form action="#" style="border: 1px solid lightblue; width:50%">
   <p>Full Name</p> 
   <input type="text" name="name" id="name" placeholder="Enter your full name"/>
   <p>Select your best skills </p>
   <input type="checkbox" name="html" value="html">Html</input>
   <input type="checkbox" name="css" value="css">Css</input>
   <input type="checkbox" name="javascript" value="javascript">Javascript</input>
   <p>Gender</p>
    <input type="radio" name="gender" value="male">Male</input>
    <input type="radio" name="gender" value="female">Female</input>
    <p>Country</p>
    <select>
        <option value="html">America</option>
        <option value="css">South Africa</option>
        <option value="javascript">Ghana</option>
        <option value="php">UK</option>
        <option value="html">Brazil</option>
        <option value="css">Nigeria</option>
        <option value="javascript">Italy</option>
        <option value="php">Germany</option>
    </select><p></p>
    <input type="submit" name="submit" value="Send" />
</form>
</body>
</html>'}}
         </pre>
         
            </div>
        </div> 

        <!-- Results -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Results </h4> 
                <img src="{{asset('/images/web/project_II_result.jpg')}}" class="holder-image" >
            </div>
        </div>

        <!-- End of Row -->
    </div>

@endsection