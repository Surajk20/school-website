<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
#header {
    width:900px;
   float:left;
    padding:5px;    
}
#footer{

background-color:;
    
    width:400px;
    float:left;
    


}
    </style>
  </head>
  <body>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>




  	
  	<div class="container-fluid" style="background-color:grey; color:white; padding:2px;">
  <p style="text-align:center" style="font-size:20px" >Shantigram Vidyamandir,Kalyan </p>
  
  <marquee behavior="scroll" direction="left">.....Learning Today For a Better Tommarow.....A Great Place For Better Education.....Learning, Friendship and Fun For Everyone.....</marquee>

</div>
<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/ground2.jpg" alt="Beautiful campus" title="Beautiful campus" id="wows1_0"/></li>
		<li><img src="data1/images/ground.jpg" alt="cleanliness" title="cleanliness" id="wows1_1"/></li>
		<li><img src="data1/images/bulding.jpg" alt="Happy Place" title="Happy Place" id="wows1_2"/></li>
		<li><a href="http://wowslider.com/vf"><img src="data1/images/program.jpg" alt="full screen slider" title="Excellent Faculty" id="wows1_3"/></a></li>
		<li><img src="data1/images/speech.jpg" alt="Quality Teaching" title="Quality Teaching" id="wows1_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Beautiful campus"><img src="data1/tooltips/ground2.jpg" alt="Beautiful campus"/>1</a>
		<a href="#" title="cleanliness"><img src="data1/tooltips/ground.jpg" alt="cleanliness"/>2</a>
		<a href="#" title="Happy Place"><img src="data1/tooltips/bulding.jpg" alt="Happy Place"/>3</a>
		<a href="#" title="Excellent Faculty"><img src="data1/tooltips/program.jpg" alt="Excellent Faculty"/>4</a>
		<a href="#" title="Quality Teaching"><img src="data1/tooltips/speech.jpg" alt="Quality Teaching"/>5</a>
	</div></div><span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.2</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
  



<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php?option=home">HOME </a></li>
        <li><a href="index.php?option=about">About</a></li>
        <li><a href="index.php?option=courses">Courses</a></li>
        <li><a href="index.php?option=gallery">Gallery</a></li>
        <li><a href="index.php?option=registration">Registration</a></li>
        <li><a href="index.php?option=login">Login</a></li>
        <li><a href="index.php?option=contact">Contact</a></li>
      </ul>
     <p class="navbar-text navbar-right" id="cookie"></p>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script>
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("cookie").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","cookie.php",true);

xmlhttp.send();
</script>
 



<div id="header">
  
 
<?php
$option=$_GET["option"];
if ($option=="about")
{
  include 'file_read.php';
}


if  ($option=="courses")
{
  include 'courses.php';
}

if  ($option=="gallery")
{
  include 'gallery.php';
}

if  ($option=="registration")
{
  include 'registration1.html';
}

if  ($option=="login")
{
  include 'login.html';
}

if  ($option=="contact")
{
  include 'file_read1.php';
}

if  ($option=="home")
{
  include 'home.php';
}

?>
</div>
<script>
var xmlhttp1
  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp1=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp1.onreadystatechange=function() {
    if (xmlhttp1.readyState==4 && xmlhttp1.status==200) {
      document.getElementById("rss").innerHTML=xmlhttp1.responseText;
    }
  }
  xmlhttp1.open("GET","rss_read.php",true);
  xmlhttp1.send();

</script>


<div  id="footer">
  <p style="text-align:center"> <b><i>SCHOOL CURRICULUM</i></b>
  </p>
  <p >
<marquee behavior="scroll" direction="down" id="rss" scrollamount="1"></marquee>
  </p>
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
  </div>

  </body>
</html>