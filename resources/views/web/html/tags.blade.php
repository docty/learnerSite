@extends('web.html.index')
@section('maincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Basic Tags</h2>
            </div>
        </div>
        <!-- Definition -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Definition</h4>
                <p class="holder-message"><b>Tag:</b> It is a special way of telling the browser how the information should be displayed. Every information to be displayed should be a defined tag. That's is < >  and {{ '</ >'}}.</p>

            </div>
        </div>
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Heading</h4>
                <p class="holder-message">It is used when defining a header for the page. There are six different headings. That's <strong>h1, h2, h3, h4, h5, h6</strong>. Feel free to practice with the other types and identify the difference.</p>
                <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<h1>Hello, World</h1>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
	<head>
	   <title>DoctyTek Site</title>
	</head>
	<body>
	   <h4>Hello, World</h4>
	  
	</body>
</html>'}}
		 </pre>
            </div>
        </div>

        <!-- paragraph -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Paragraph</h4>
                <p class="holder-message">It is mostly used when defining a paragraph for the page. Compare the difference between the paragraph and heading. It seems the heading is more bold than the paragraph.</p>
                <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<p>This is my first paragraph.</p>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
    <head>
       <title>DoctyTek Site</title>
    </head>
    <body>
       <h4>Hello, World</h4>
      <p>This is my first paragraph.</p>
    </body>
</html>'}}
         </pre>
         <p class="holder-message"><strong>Dont forget to open your web browser and refresh the page or press F5 to refresh the page.</strong> The information is now updated. </p>
            </div>
        </div>

        <!-- Horizontal Line -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Horizontal Line</h4>
                <p class="holder-message">Let assume you want to divide your page in horizontal section the this tag is used. It creates a horizontal line between two elements.<br><strong>Note:</strong> It has no closed tag because it takes no value.<br> Lets add a new paragragh to visualise the effect well</p>
                <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<hr>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
    <head>
       <title>DoctyTek Site</title>
    </head>
    <body>
       <h4>Hello, World</h4>
      <p>This is my first paragraph.</p>
      <hr>
      <p>This is my second paragraph.</p>
    </body>
</html>'}}
         </pre>
         </div>
        </div>


    </div>
@endsection
