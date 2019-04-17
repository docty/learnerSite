@extends('web.html.index')
@section('maincontent')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">List</h2>
            </div>
        </div>

        <!-- Definition -->
        <div class="col-md-12">
            <div class="section holder" >
                <h4>Definition</h4>
                <p class="holder-message"><b>List:</b> It is used to list items in the webpage. The listed items can be bulletted or numbered base on choice</p>
                <p class="holder-message">There are basically two ways of defining the list either the numbered style or bulletted style. <br> <b>ul</b> is for bulleting  <br> <b>ol</b> is for numbering style. </p>
            </div>
        </div>

        <!-- UL -->

        <div class="col-md-12">
            <div class="section holder" >
                <h4>ul</h4>
                <p class="holder-message">It stands for unordered list. The <b>ul</b> serves a container for the list. To list the items; use the <b>li</b> attribute. </p>
                 <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<ul>
    <li>Html</li>
    <li>Css</li>
    <li>Javascript</li>
</ul>'}}
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
       <ul>
           <li>Html</li>
           <li>Css</li>
           <li>Javascript</li>
       </ul>
    </body>
</html>'}}
         </pre>
                <p class="holder-message">By default, the bullleted type is <b>disc</b>. We can set a customise type with values like <b>square, disc, circle</b></p>
                <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<ul type="square">
    <li>Html</li>
    <li>Css</li>
    <li>Javascript</li>
</ul>'}}
                </pre>
                <p class="holder-message">Feel free to practice with each type to observe the difference. Best programming skills are achieved through constant practice with different ways. So don't just read them but pratice them.</p>
            </div>
        </div>


        <!-- OL -->

        <div class="col-md-12">
            <div class="section holder" >
                <h4>ol</h4>
                <p class="holder-message">It stands for ordered list. The <b>ol</b> serves a container for the list. To list the items; use the <b>li</b> attribute. </p>
                 <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<ol>
    <li>Html</li>
    <li>Css</li>
    <li>Javascript</li>
</ol>'}}
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
       <ul>
           <li>Html</li>
           <li>Css</li>
           <li>Javascript</li>
       </ul>
       <ol>
            <li>Html</li>
            <li>Css</li>
            <li>Javascript</li>
       </ol>
    </body>
</html>'}}
         </pre>
                <p class="holder-message">By default, the numbered type is <b>numeric</b>. We can set a customise type with values like <b>a, A, 1, i, I, circle</b></p>
                <h4>Syntax</h4>
                
                <pre class="prettyprint linenums ">
{{'<ul type="a">
    <li>Html</li>
    <li>Css</li>
    <li>Javascript</li>
</ul>'}}
                </pre>
                <p class="holder-message">Feel free to practice with each type to observe the difference. Refresh the webpage with the F5 key each time changes are made.</p>
            </div>
        </div>

        <!-- End of row -->
    </div>

@endsection
