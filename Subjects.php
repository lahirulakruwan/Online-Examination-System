<!Doctype HTML5>
<?php session_start();?>
<html>
<head>
<style>
.field{
 
       border: 2px solid;
	   width:960px;
	   height:900px;
	   float:left;
	   margin-left:300px;
	   margin-top:-12px;
	   margin-right: 10px;
	   padding:0px;
	   border-radius:10px;
       } 
	   
	   .legend{
                  margin-left: 10px;
         } 

	   .field1{
	   
	   background-color:; 
	   width:120px;
	   height:130px;
	   margin-left:10px; 
	   margin-top:10px;
	   margin-right:-12px; 
	   padding:0px;
	   border-radius:10px;
	   border:2px solid;
	      }	 
		 
		.button{
		
		  background-color:white;
		  font-weight:bold;
		  font-size:18px;
		  border:2px solid;
		  width:200px;
		  height:30px;
		  margin-left:10px;
		  margin-top:-10px;
		  margin-right:0px;
		  padding:0px;
		  border-radius:10px;
		  margin-bottom:20px;
		  transition-duration: 0.4s;
		} 
		 .button:hover {
          background-color: #008CBA;
          color: white
           }
		 
	 .field2{
		 
		 float:left;
		 width:190px;
		 height:300px;
		 border:2px solid;
		 border-radius:10px;
		 margin-left:25px;
		 margin-top:10px;
		 
		 }
		 
	   .style{
	   
	      background-color:gray;
		  width:250px;
		  height:30px;
		  margin-left:0px; 
		  margin-top:0px;
		  margin-right:0px;
		  padding:0px;
		  border-radius:5px 5px 0px 0px;
	  
	     }	 
		 
		 	 
	 .field3{
	
	   background-color:; 
	   width:120px;
	   height:130px;
	   margin-left:350px; 
	   margin-top:-130px;
	   margin-right:-12px; 
	   padding:0px;
	   border-radius:10px;
	   border:2px solid;
	    
		 }
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style/Subjects.css">
<title>Subjects</title>
</head>


<body style=" background-size:cover;" background="images/back.jpg">

<!--Header-->
<div id="header" style="background-image:url(images/home/hedder.png);">

<div style="float:left;" id="logo">
<img style="width:408px; height:118px; float:left; margin-top:10px; margin-left:10px;" src="images/home/logo ss.png"/>
</div>

<div id="rls">
<button id="reg" onclick="window.location.href='Register.html'">Register</button>
<button id="log" onclick="window.location.href='login.html'">Login</button>
</div><br/><br/><br/><br/>
<div id="search">
<input type="text" id="box" placeholder=" Search"/>
<button id="seab" class="fa fa-search"></button>
</div>
	
</div>
<br/>
<!--Menu Bar-->
<ul id="menubar">
<li onclick="window.location.href='Home.php'" class="fa fa-home"><a onclick="window.location.href='Home.html'">Home </a></li>
<li onclick="window.location.href='Subjects.php'" class="fa fa-language"><a onclick="window.location.href='Subjects.html'">Subjects</a></li>
<li onclick="window.location.href='Register.php'" class="fa fa-book"><a onclick="window.location.href='Register.html'" >E-Books </a></li>
<li onclick="window.location.href='Register.php'" class="fa fa-desktop"></i><a onclick="window.location.href='Register.html'">Video Tutorials </a></li>
<li onclick="window.location.href='Help.php'" class="fa fa-user-plus"></i><a onclick="window.location.href='Help.html'">Help </a></li>
<li onclick="window.location.href='About Us.php'" class="fa fa-commenting"><a onclick="window.location.href='About Us.html'">About us</a></li>

 </ul>
</div>
<hr size="3px" color="black" style="width:1200px;">
<br/>

<!--Adding Section-->
<fieldset id="Settings">
	<legend id="legend1"><i class="fa fa-language"></i>Subjects</legend>
<fieldset style = "border: 2px solid; width:240px; height:350px; margin-left:20px;margin-top:10px;border-radius:10px;">
 <h3 style="background-color:gray; width:248px; height:30px; margin-left:-12px; margin-top:-5px; margin-right:-12px; padding:0px; border-radius:5px 5px 0px 0px;"><center>Category</center></i></h3>
<input type = "button" value ="0/l" class="button">
<input type = "button" value ="A/l" class="button">
<input type = "button" value ="Bsc" class="button">
<input type = "button" value ="Msc"  class ="button">
<input type = "button" value ="Phd"  class ="button"> 
<input type = "button" value ="HND"  class = "button">
 </fieldset>
 
 <fieldset style = "border: 2px solid; width:630px; height:600px; margin-left:295px; margin-top:-372px; border-radius:10px; margin-right:10px;">
  <fieldset class = "field1">
   <h3 class="style"><center>Mathematics</center></h3>
  </fieldset>
  <fieldset class = "field3">
  <h3 class="style"><center>Physics</center></h3>
 </fieldset>
  <fieldset class = "field1">
   <h3 class="style"><center>Chemistry</center></h3>
   </fieldset>
   <fieldset class = "field3">
  <h3 class="style"><center>Biology</center></h3>
  </fieldset>
  <fieldset class = "field1">
   <h3 class="style"><center>Science For Technology</center></h3>
   </fieldset>
   <fieldset class = "field3">
  <h3 class="style"><center>Ict</center></h3>
  </fieldset>
   <fieldset class = "field1">
   <h3 class="style"><center>Sinhala</center></h3>
   </fieldset>
    <fieldset class = "field3">
  <h3 class="style"><center>Buddhist Culture</center></h3>
  </fieldset>
  
 
  
  </fieldset>
 </fieldset>
 
 
 </fieldset>
<!--latest registeration-->
 <div id="latest">
	<h3>Latest Registrations</h3>
</div>
<div id="marquee">
	<marquee><h3>of this, the background image cannot be altered. What background pro
	perties can I use to aof this, the background image cannot be altered. What back
	ground properties can I use to aof this, the background image cannot be altered. What ba
	ckground properties can I use to a</h3></marquee>
</div>
  <br/>
  <hr size="3px" color="black" style="float:left; width:1200px; margin-left:65px;">
  
	<!--footer--> 
  <!--Payment--> 
 <div id="footer">
	<fieldset id="payment">
	<legend>We Accept :</legend>
	<img id="pay1" src="images/home/paypal.png"/>
	<img id="pay1" src="images/home/visa.png"/>
	<img id="pay1" src="images/home/master.png"/>
	<img id="pay1" src="images/home/bank.png"/>
	<img id="pay1" src="images/home/cheque.png"/>
	</fieldset>
	<div id="fmenu" style="float:left; border:0px solid black; height:75px; margin-left:120px;">
	<h3 style=""><a>Site Feedback.</a> | <a>Support.</a> |<a> FAQ.</a> |<a> Contact Us.</a></h3>
	</div>
	 <!--Social--> 
	<fieldset id="social">
	<legend>Our Social :</legend>
	<img id="pay2" src="images/home/facebook.png"/>
	<img id="pay2" src="images/home/gmail.png"/>
	<img id="pay2" src="images/home/youtube.png"/>
	<img id="pay2" src="images/home/twitter.png"/>
	<img id="pay2" src="images/home/insta.png"/>
	
	</fieldset>

  </div>


</body>

</html>