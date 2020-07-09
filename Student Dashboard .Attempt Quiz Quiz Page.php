<!Doctype HTML5>
<?php session_start();?>
<html>
<head>
<style>
.button1 {
    background-color: white; 
    color: black; 
    transition-duration: 0.4s;
	border:2px solid;
	width:200px;
	height:30px;
	margin-left:100px;
	margin-top:20px;
	margin-right:0px;
	border-radius:5px 0px 0px 5px;
	margin-bottom:20px;
	font-weight:bold;
            }

    .button1:hover {
          background-color: #008CBA;
          color: white
           }

    .button2{
	         transition-duration: 0.4s;
	         border:2px solid;
			 width:200px;
			 height:30px;
			 margin-left:-20px;
			 margin-top:20px;
			 margin-right:0px;
			 padding:0px;
			 border-radius:0px 5px 5px 0px;
			 margin-bottom:20px;
			 font-weight:bold;
	         border:2px solid;
			 background-color:white;
	        }
		   
		.button2:hover {
             background-color: #008CBA;
             color: white
           }   
		
   .button3{		
           transition-duration: 0.4s;
		   width:30px;
		   height:30px;
		   border-radius:10px;
		   background-color:white;
		   margin-left:20px;
		   margin-top:0px;
		   font-weight:bold;
		    border:2px solid;
		   }
		   
		   
	.button3:hover {
             background-color: #008CBA;
             color: white;
           }   	   
 
    
    .button4{
	         font-weight:bold;
	        transition-duration: 0.4s;
	        background-color:white;
			width:100px;
			height:40px;
			margin-left:340px;
			margin-right:0px;
			padding:0px;
			border-radius:10px;
			margin-top:30px;
	         border:2px solid;
      	     }
     
     	   
	.button4:hover {
             background-color: #008CBA;
             color: white;
           }   	   
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style/Student Dashboard .Attempt Quiz Search.css">
<title>Attempt Quiz/Quiz Page</title>
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

<!--Dashboard-->
<div id="dash">

<h2 id="Dashboard">Dashboard</h2>

<hr/ style="margin-top:0px; height:3px; background-color:black; width:150px;">

<center><img id="studentico" src="images/ID.png"></center>

<h3><center><?php echo "$_SESSION[user]";?></br>Student</center></h3>

<hr/ style="margin-top:2px; height:3px; background-color:black; width:150px;">

<button onclick="window.location.href='Student Dashboard .Attempt Quiz Search.php'" class="fa fa-edit" id="attemptquiz"> Attempt Quiz</button>

<button onclick="window.location.href='Student Dashboard .Purchase E-Books.php'" class="fa fa-book" id="attemptquiz"> Purchase E-books </button>

<button onclick="window.location.href='Student Dashboard.Watch Tutorials.php'" class="fa fa-youtube-play" id="attemptquiz"> Watch Turorials</button>

<button onclick="window.location.href='Student Dashboard .My Result.php'" class="fa fa-graduation-cap" id="attemptquiz"> My Result</button>

<button onclick="window.location.href='Student Dashboard.Message Center.php'" class="fa fa-maxcdn" id="attemptquiz"> Message Center</button>

<button onclick="window.location.href='Student DashboardSettings.php'" class="fa fa-cogs" id="attemptquiz"> Settings</button>
<form method="get" action="php/logout.php">
<button name="logout" class="fa fa-sign-out" id="attemptquiz" style="margin-top:50px">Logout</button>
</form>

</div>
<!--Adding Section-->
<fieldset id="Settings">
	<legend id="legend1"><i class="fa fa-edit"></i> Attempt Quiz</legend>
	<div style="margin-left:175px;">
	<input type = "button" onclick="window.location.href='Student Dashboard .Attempt Quiz Search.php'"  class ="button1"  value ="Search">
 <input type = "button" onclick="window.location.href='Student Dashboard .Attempt Quiz Quiz Page.php'" class = "button2"  value ="Quiz Page"> 
   <fieldset style = "border:2px solid;width:620px;height:470px;margin-left:15px; margin-top:1px; margin-right:0px; padding:0px;border-radius:10px;"> 
  <hr style= " width:580px;border:2px solid;margin-left:1px; margin-top:20px; margin-right:0px;">
  <hr style= "width:0px;height:40px;border:2px solid;float:left;margin-left:30px; margin-top:0px; margin-right:0px;">
  <h3 style = "margin-left:40px; margin-top:15px; margin-right:0px; padding:0px;">Category:A/L</h3> 
  <hr style= "width:0px;height:40px;border:2px solid;float:left;margin-left:120px; margin-top:-50px; margin-right:0px;">
  <h3 style = "margin-left:170px; margin-top:-40px; margin-right:0px; padding:0px;">Subject:History</h3>
  <hr style= "width:0px;height:40px;border:2px solid;float:left;margin-left:150px; margin-top:-50px; margin-right:0px;">
  <h3 style = "margin-left:320px; margin-top:-40px; margin-right:0px; padding:0px;">Teacher:Kasuni</h3>
  <hr style= "width:0px;height:40px;border:2px solid;float:left;margin-left:150px; margin-top:-50px; margin-right:0px;">
  <h4 style = "margin-left:490px; margin-top:-50px; margin-right:0px; padding:0px;">Number of Question:10</h4>
  <hr style= "width:0px;height:40px;border:2px solid;float:left;margin-left:580px; margin-top:-60px; margin-right:0px;">
    <hr style= " width:590px;border:2px solid;margin-left:10px; margin-top:10px; margin-right:0px;">
	<fieldset style = "border:2px solid;width:550px;height:30px;margin-left:40px; margin-top:3px; margin-right:0px; padding:3px;border-radius:10px;">
	<input type = "button" value ="1" class="button3" style="margin-left:100px;">
	<input type = "button" value ="2" class="button3">
	<input type = "button" value ="3" class ="button3">
	<input type = "button" value ="4" class ="button3">
	<input type = "button" value ="5" class ="button3">
	<b><h3 style = "margin-left:3px; margin-top:-30px;">Quiz bar:</h3></b>
	
	<fieldset style = "height:200px; height:200px; border:2px solid;margin-top:40px;margin-left:5px;border-radius:10px;">
	</fieldset>
	<input type = "button" value ="Submit" class="button4" > 
	<input type = "button" value ="Quit"    class="button4" style="float:right;margin-left:120px;margin-top:-40px;">
	 <fieldset style = "height:30px; width:150px; border:2px solid;margin-top:-60px;margin-left:5px; border:2px solid;border-radius:10px;">
	 <legend><b>Time Countdown</b></legend>
	  <center><h3  style="margin-top:-5px;">07:18</h3></center>
	 </fieldset>
	   
	 </fieldset>
	  </fieldset>
	<div>
	
	
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