<html>
<head>
<title>Human Nutrition</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<header>
	<h1>Welcome To Human Nutrition Analysis System</h1>

 <style type="text/css">
    #search{
  margin-top: -50px;
  width: 15%;
  float: right;
  height: 40px;
}
    #child{
      position: absolute;
      display: none;
      background-color: #efefef;
     float: right;
     margin-left: 70%;
      width: 15%;
      margin-top: -10px;
    }
    #pa{
      margin-left: 50%;      
      color: black;
      font-size: 15.4px;
    }
  </style>
<div id="parent">
<input type="text" placeholder="search here" name="search" id="search" onkeyup="return search1(this)" onfocusout="return out(this);">
</div>
<div id="child"></div>
</div>
<button type="submit" name="button"><a href="indexx.php">Logout</a> </button>        
<div class="main">
  <ul>
<li><a href="home1.php" >HOME</a></li>
<li><a href="meals.php">MEALS</a></li>
<li><a href="diagnosis.php" >DIAGNOSIS</a></li>
<li><a href="connect1.php" >CONNECT</a></li>
<li><a href="help.html" >HELP</a></li>
<li><a href="#footer" >ABOUT US</a></li>
</ul>
</div>
      </header>
<body>
 <div class="slider">
    <figure>
      <img src="images/image9.jpg">
      <img src="images/grapefruit.jpg">
      <img src="images/image3.jpg">
      <img src="images/image5.jpg">
      <img src="images/image14.jpg">
    </figure>
  </div>

<nav class="navA">
    <br><br><br>
    <h2 style="color: black;">Foods File</h2>
    <ol>
    <li><a href="fruits.php">Fruits</a></li>
    <li><a href="vege.php">Vegetables</a></li>
    <li><a href="leaf.php">Leafy Vegetables</a></li>
    <li><a href="beve.php">Beverages</a></li>
    <li><a href="flesh.php">Flesh Foods</a></li>
    </ol>
</nav>


<footer id="footer"> 
  <div>
  <div style="float: left;">
<h2 style="color: blue;font-size: 25px;">About Us:</h2>
<p style="color: black;font-weight: bold;font-size: 20px;">
This system will assist people to have ideas on how<br>
to live a nutritional healthy lifestyle and how to adopt<br>
good eating habits inorder to evade ailments emanating<br>
from bad eating habits.<br> </p>
</div>

    <div style="float: right;"> 
   <h3 style="color: blue;font-size: 25px;">Contact Us:</h3>
    <p style="color: black;font-weight: bold;font-size: 20px;">
   Human Nutrition Analysis System<br>
   P.O BOX 110-10510<br>
   Nairobi<br>
   +254(0)202402211<br>
   Email:nutrition@analysis.ac.ke</p>
    </div>
  <div style="float: right;margin-right: 200px;color: blue;font-size: 25px;">
      <p>
     <b> Find us:</b><br><br>
              <a href="http://twitter.com"><img src="images/twiter.jpg" alt="Twiter"  height="40px" width="40px" /></a>
          <a href="http://facebook.com"><img src="images/facebook.jpg" alt="Facebook"   height="40px" width="40px" /></a>
          <a href="http://instagram.com"><img src="images/instagram.jpg" alt="Instagram"   height="40px" width="40px" /></a>
          <a href="http://whatsapp.com"><img src="images/whatsapp.jpg" alt="Whatsapp"   height="40px" width="40px" /></a>
      </p>
  </div>
  <p id="copy" style="color: maroon; font-size: 18px;">Copyright &copy;<?php echo date('Y');?>  Human Nutrition Analysis System.All Rights Reserved.
</p>
</div>
</footer>
<script type="text/javascript">
  var child=document.getElementById("child");
  var search=document.getElementById("search").value;
  var ar=new Array();
  var str="";
ar.push(str+" meals");
ar.push(str+" about");
ar.push (str+" connect");
ar.push(str+" fruits");
ar.push(str+" vegetables");
ar.push(str+" leafy_vegetables");
ar.push(str+" flesh foods");
ar.push(str+" beverages");
ar.push(str+" help");
ar.push(str+" diagnosis");
var ar2=new Array();
function search1(){
  ar2=[];
  var child=document.getElementById("child");
  var search=document.getElementById("search").value;
  child.innerHTML="";
for (var i = 0; i < ar.length; i++) {
  if (ar[i].includes(search)) {
    ar2.push(ar[i])
  }
}
for (var i = 0; i < ar2.length; i++) {
  var p=document.createElement("p");
  p.innerHTML=ar2[i];
  p.setAttribute("onclick","return loadpage(this);");
  p.setAttribute("id","pa");
  child.appendChild(p);
}
if (ar2.length==0) {
  var p=document.createElement("p");
  p.innerHTML="No item matches you search";
  p.setAttribute("onclick","return loadpage(this);");
  p.setAttribute("id","pa");
  child.appendChild(p);
}
child.style.display="block";
}

function loadpage(){
  for (var i = 0; i < ar2.length; i++) {
    if (ar2[i].includes("about")) {
      window.location.replace("home.php");
    }
    else if (ar2[i].includes("connect")) {
      window.location.replace("connect.php");
    }
    else if (ar2[i].includes("fruits")) {
       window.location.replace("fruits1.php");
    }
    else if (ar2[i].includes("leafy_vegetables")) {
       window.location.replace("leaf1.php");
    }
    else if (ar2[i].includes("vegetables")) {
       window.location.replace("vege1.php");
    }
    else if (ar2[i].includes("flesh foods")) {
       window.location.replace("flesh1.php");
    }
    else if (ar2[i].includes("beverages")) {
       window.location.replace("beve1.php");
    }
    else if (ar2[i].includes("diagnosis")) {
       window.location.replace("diagnosis1.php");
    }
    else if (ar2[i].includes("help")) {
       window.location.replace("help.php");
    }
    else if (ar2[i].includes("meals")) {
       window.location.replace("meals1.php");
    }
  }
}
function out(){
}
</script>
</body>
</html>