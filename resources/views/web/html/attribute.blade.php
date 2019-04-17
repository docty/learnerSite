@extends('web.html.index')
@section('maincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Attributes </h2>
            </div>
        </div>

        <!-- Definition -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Definition</h4>
                <p class="holder-message"><b>Attribute:</b> It is a special way of adding extra information to the tags. For instance you can add unique key to each tag to identify it.<br> Most website or web applications adopt this method. I hope by now you will be thinking of how to beautify your webpage. It basis lies on this attribute.</p>
                <p class="holder-message">There are four main core attribute for each tag. The rest are based on the type of tags. <br> The core four are :</p>
                	<ul class="holder-message" >
                		<li style="margin-left: 25px">id</li>
                		<li style="margin-left: 25px">class</li>
                		<li style="margin-left: 25px">name</li>
                		<li style="margin-left: 25px">style</li>
                	</ul>
                

            </div>
        </div>

        <!-- ID -->

        <div class="col-md-12">
            <div class="section holder" >
                <h4>Id</h4>
                <p class="holder-message">It is used to uniquely give an identity to that tag. It makes referencing it very simple since your page is likely to contain numerous different or similar tags. It appears within the open tag as seen below. </p>
                 <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<h1 id="message">Hello, World</h1>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
	<head>
	   <title>DoctyTek Site</title>
	</head>
	<body>
	   <h4 id="message">Hello, World</h4>
	   <p id="respond">This is my first paragraph.</p>
	</body>
</html>'}}
		 </pre>
                

            </div>
        </div>

        <!-- Class -->

        <div class="col-md-12">
            <div class="section holder" >
                <h4>Class</h4>
                <p class="holder-message">This is another way of identifying your tags, but multiple tags can have the same class or it can be given different class</p>
                 <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<h1 class="banner">Hello, World</h1>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
	<head>
	   <title>DoctyTek Site</title>
	</head>
	<body>
	   <h4 id="message" class="banner">Hello, World</h4>
	   <p id="respond" class="banner">This is my first paragraph.</p>
	</body>
</html>'}}
		 </pre>
               <p class="holder-message">Id and Class can be used simultaneously. It is a good practice to assign id or class to your tags  when necessary.</p>     

            </div>
        </div>

        <!-- Name -->

        <div class="col-md-12">
            <div class="section holder" >
                <h4>Name</h4>
                <p class="holder-message">It is used to assign a particular name for that tag. <br><strong>Note:</strong> Every attribute within the open tag is not displayed but add extra information to it.</p>
                 <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<h1 name="hello">Hello, World</h1>'}}
                </pre>
                <h4>Example</h4>
                <pre class="prettyprint linenums:50 ">
{{ '<html>
	<head>
	   <title>DoctyTek Site</title>
	</head>
	<body>
	   <h4 id="message" class="banner" name="hello">Hello, World</h4>
	   <p id="respond" class="banner" name="reply">This is my first paragraph.</p>
	</body>
</html>'}}
		 </pre>
               <p class="holder-message">It is not compusory to define all these attributes for a tag. It depends on what and how you want it. It may looks plenty but with constant practice everything will be simple.</p>     

            </div>
        </div>

        <!-- Style -->

        <div class="col-md-12">
            <div class="section holder" >
                <h4>Style</h4>
                <p class="holder-message">This attribute is used to add decoration to the element in the tage. It is normally called sheet styling. We shall dive deep into designing a web later. Anytime you think of styling your page then you have to consider the style attribute.</p>
                 <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<h1 style="color:red">Hello, World</h1>'}}
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
	</body>
</html>'}}
		 </pre>
               <p class="holder-message">Refresh your page with F5 to observe the marvellous changes. Don't worry about other designs, just play around with the given ones by trying different color and with different number for the size with the 'px' at the end.</p>     

            </div>
        </div>
        <!-- End of row -->
    </div>
 @endsection