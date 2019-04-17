@extends('web.html.index')
@section('maincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">LINKS </h2>
            </div>
        </div>

        <!-- Definition -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Definition </h4>
                <p class="holder-message"><b>Link:</b> It is a tag used to link multiple pages together.</p>
            </div>
        </div>

        <div class="col-md-12">
            <div class="section holder" >
                
                <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<a href="secondpage.html">Second Page </a>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
	<head>
	   <title>DoctyTek Site</title>
	</head>
	<body>
	   <a href="secondpage.html">Second Page </a>
	</body>
</html>'}}
		 </pre>
         <p class="holder-message"><b>Note:</b> The "secondpage.html" is a different page on it own. <br> To create the "secondpage.html" ; <br>Go to "File" from the Notepad++ application. <br>Click on the "New" from the dropdown list<br>Save the file using the "File" menu <br> Click on "Save As" <br> Type "secondpage.html" without the double quote. <br> Make sure you are working with the same folder or use the "PROJECT I" folder we created. <br> Click on "Save" button to save it.</p>
            </div>
        </div>

        <button class="btn btn-primary offset-10">NEXT</button>
        <!-- End Of Row -->
    </div>
 @endsection