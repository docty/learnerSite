@extends('web.html.index')
@section('maincontent')

    <div class="row">
    	<!-- Title -->
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Forms</h2>
            </div>
        </div>

        <!-- Definition -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Definition</h4>
                <p class="holder-message"><b>Forms:</b> It is special which displays a form on the webpage. It is used to take input from the user. The form is mostly used when registering or logging-in  an account.</p>
                <p class="holder-message">Forms are in different ways. That is, text box, select option, password box, button, radio button and many more. If you are confused on what's going on, don't worry at all. This section is dedicated to take you through.</p>

            
            </div>
        </div>

        <!-- Input Texts  -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Input Text</h4>
                <p class="holder-message">It a  type of html tag specifically designed for taking short text from user</p>
                <h4>Syntax</h4>
                <pre class="prettyprint linenums ">

{{'<form action="#">
   <input type="text" name="username" id="username"/>
</form>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
    <head>
       <title>DoctyTek Site</title>
    </head>
    <body>
       <link href="secondpage.html" />
       <table>
          <th>Name</th>
          <th>Score</th>
              <td>DoctyTek</td>
              <td>85</td>
          </table>
          <form action="#" >
            <input type="text"  name="username" id="username"/>
          </form>
    </body>
</html>'}}
         </pre>
                <p class="holder-message">By default, all input tags have text as it type value. Let us customise it. The type attribute can different values like "password", "email", "number", "telephone" etc. <br> Feel free to try with different values listed above and observe what happens when you start typing in the text box.</p>
            
            </div>
        </div>

         <!-- Input Checkbox  -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Input Checkbox</h4>
                <p class="holder-message">It a  type of html tag specifically designed for checking whether an option is selected or not.</p>
                <h4>Syntax</h4>
                <pre class="prettyprint linenums ">

{{'<form action="#">
   <input type="checkbox" name="mango" value="mango">Mango</input>
</form>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
    <head>
       <title>DoctyTek Site</title>
    </head>
    <body>
       <link href="secondpage.html" />
       <table>
          <th>Name</th>
          <th>Score</th>
              <td>DoctyTek</td>
              <td>85</td>
          </table>
          <form action="#" >
            <input type="text"  name="username" id="username"/>
            <input type="checkbox" name="mango" value="mango">Mango</input>
            <input type="checkbox" name="orange" value="orange">Orange</input>
          </form>
    </body>
</html>'}}
         </pre>
                <p class="holder-message">The value is an extra attribute specifically made for input tags. It reads the displayed value.</p>
            
            </div>
        </div>


         <!-- Input Radio  -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Input Radio</h4>
                <p class="holder-message">It a  type of html tag specifically designed for checking whether an option is selected or not.</p>
                <h4>Syntax</h4>
                <pre class="prettyprint linenums ">

{{'<form action="#">
   <input type="radio" name="male" value="male">Male</input>
</form>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
    <head>
       <title>DoctyTek Site</title>
    </head>
    <body>
       <link href="secondpage.html" />
       <table>
          <th>Name</th>
          <th>Score</th>
              <td>DoctyTek</td>
              <td>85</td>
          </table>
          <form action="#" >
            <input type="text"  name="username" id="username"/>
            <input type="checkbox" name="mango" value="mango">Mango</input>
            <input type="checkbox" name="orange" value="orange">Orange</input>
            <input type="radio" name="gender" value="male">Male</input>
            <input type="radio" name="gender" value="female">Female</input>
          </form>
    </body>
</html>'}}
         </pre>
                <p class="holder-message">The name attribute for the male and female are the same because only one option should be selected at a time.</p>
            
            </div>
        </div>


         <!-- Input Select  -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Select</h4>
                <p class="holder-message">It a  type of html tag specifically designed to give users the chance to choose from a given options.</p>
                <h4>Syntax</h4>
                <pre class="prettyprint linenums ">
{{'<form action="#">
      <select>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="javascript">JAVASCRIPT</option>
        <option value="php">PHP</option>
      </select>
</form>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
    <head>
       <title>DoctyTek Site</title>
    </head>
    <body>
       <link href="secondpage.html" />
       <table>
          <th>Name</th>
          <th>Score</th>
              <td>DoctyTek</td>
              <td>85</td>
          </table>
          <form action="#" >
            <input type="text"  name="username" id="username"/>
            <input type="checkbox" name="mango" value="mango">Mango</input>
            <input type="checkbox" name="orange" value="orange">Orange</input>
            <input type="radio" name="gender" value="male">Male</input>
            <input type="radio" name="gender" value="female">Female</input>
            <select>
               <option value="html">HTML</option>
               <option value="css">CSS</option>
               <option value="javascript">JAVASCRIPT</option>
               <option value="php">PHP</option>
           </select>
          </form>
    </body>
</html>'}}
         </pre>
                
            
            </div>
        </div>


         <!-- Input File  -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Input File</h4>
                <p class="holder-message">It a  type of html tag specifically designed to read files from users  and send it to a server or a different user.</p>
                <h4>Syntax</h4>
                <pre class="prettyprint linenums ">
{{'<form action="#">
      <input type="file" name="filename" />
</form>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
    <head>
       <title>DoctyTek Site</title>
    </head>
    <body>
       <link href="secondpage.html" />
       <table>
          <th>Name</th>
          <th>Score</th>
              <td>DoctyTek</td>
              <td>85</td>
          </table>
          <form action="#" >
            <input type="text"  name="username" id="username"/>
            <input type="checkbox" name="mango" value="mango">Mango</input>
            <input type="checkbox" name="orange" value="orange">Orange</input>
            <input type="radio" name="gender" value="male">Male</input>
            <input type="radio" name="gender" value="female">Female</input>
            <select>
               <option value="html">HTML</option>
               <option value="css">CSS</option>
               <option value="javascript">JAVASCRIPT</option>
               <option value="php">PHP</option>
           </select>
           <input type="file" name="filename" />
          </form>
    </body>
</html>'}}
         </pre>
                
            
            </div>
        </div>



         <!-- Input File  -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Input Submit</h4>
                <p class="holder-message">It a  type of html tag specifically designed to read files from users  and send it to a server or a different user.</p>
                <h4>Syntax</h4>
                <pre class="prettyprint linenums ">
{{'<form action="#">
      <input type="submit" name="submit" />
</form>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
    <head>
       <title>DoctyTek Site</title>
    </head>
    <body>
       <link href="secondpage.html" />
       <table>
          <th>Name</th>
          <th>Score</th>
              <td>DoctyTek</td>
              <td>85</td>
          </table>
          <form action="#" >
            <input type="text"  name="username" id="username"/>
            <input type="checkbox" name="mango" value="mango">Mango</input>
            <input type="checkbox" name="orange" value="orange">Orange</input>
            <input type="radio" name="gender" value="male">Male</input>
            <input type="radio" name="gender" value="female">Female</input>
            <select>
               <option value="html">HTML</option>
               <option value="css">CSS</option>
               <option value="javascript">JAVASCRIPT</option>
               <option value="php">PHP</option>
           </select>
           <input type="file" name="filename" />
           <input type="submit" name="submit" />
          </form>
    </body>
</html>'}}
         </pre>
        <p class="holder-message">The type attribute has three different options to choose from. This is <b>submit, reset, button</b>. Each of these types has a role it plays. The <i>submit</i> is used when submitting a form. The <i>button</i> is used when navigating to different part of the same page or different pages. Finally the <i>reset</i> type is used when resetting the values of the form. <br>Feel free to use the different type values and observe the changes.</p> 
            
            </div>
        </div>

        <!-- End of row -->
    </div>
@endsection