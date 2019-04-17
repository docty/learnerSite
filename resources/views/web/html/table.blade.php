@extends('web.html.index')
@section('maincontent')

    <div class="row">
    	<!-- Title -->
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Tables</h2>
            </div>
        </div>

        <!-- Definition -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Definition</h4>
                <p class="holder-message"><b>Tables:</b> It is a tag used to defined tables for the webpage.</p>

            </div>
        </div>

        <!-- Example -->
        <div class="col-md-12">
            <div class="section holder" >
            	<h4>Syntax</h4>
                <pre class="prettyprint linenums ">
{{'<table border="1">
  <tr>
    <th>Name</th>
    <th>Score</th>
  </tr>
  <tr>
    <td>DoctyTek</td>
    <td>85</td>
  </tr>
</table>'}}
                </pre>
                <p class="holder-message">The border attribute means that the table should be in a border. Change the value from 1 to 0 and observe the changes.</p>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
	<head>
	   <title>DoctyTek Site</title>
	</head>
	<body>
	   <link href="secondpage.html" />
	   <table border="1">
             <tr>
  	         <th>Name</th>
	           <th>Score</th>
    	       </tr>
             <tr>
                 <td>DoctyTek</td>
                 <td>85</td>
             </tr>
          </table>
	</body>
</html>'}}
		 </pre>
            </div>
        </div>



        <!-- End of row -->
    </div>
@endsection
