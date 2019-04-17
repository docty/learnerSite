@extends('web.html.index')
@section('maincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Image</h2>
            </div>
        </div>

        <!-- Definition -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Definition</h4>
                <p class="holder-message"><b>Image:</b> As the name suggest, it is used to insert image into a webpage. Images beautify the webpage and make the page awesome for users.</p>
            </div>
        </div>


        <!-- ID -->

        <div class="col-md-12">
            <div class="section holder" >
                <p class="holder-message">The image should be in the same folder where this file is saved. Just observed how the image tag has been defined. The <b>src</b> attribute specifies the location of the image file and the <b>alt</b> specifies when the image file is not found. <br> Other attributes such as the id, class, style can be added too.</p>
                 <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<img src="image.jpg" alt="No Image Please"/>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
	<head>
	   <title>DoctyTek Site</title>
	</head>
	<body>
	   <h4 id="message" class="banner" name="hello" style="color:red">Hello, World</h4>
	   <p id="respond" class="banner" name="reply" style="font-size:25px">This is my first paragraph.</p>
	   <img src="image.jpg" alt="No Image Please"/>
	</body>
</html>'}}
		 </pre>
                <p class="holder-message">It could be that the image didn't align perfectly or occupied large space or less space. Worry not, we shall correct them in later section when we dive into styling the page. <b>The file location is very important else the <mark>alt</mark> attribute will display.</b></p>

            </div>
        </div>
        <!-End of row -->
    </div>
@endsection