<!Doctype HTML5>
<?php session_start();?>
<html>
<head>
<style>
.search{
            margin-left:150px;
			width:100px;
			height:30px;
            font-weight:bold;
            transition-duration:0.4s;
            background-color:white;
            border-radius:10px;
		   border:2px solid;
       }
	   
.search:hover{
                  
               background-color:#008CBA;
               color:white;
       }	   

</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style/Student Dashboard .Purchase E-Books.css">
<title>Purchase E-Books</title>
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
<li onclick="window.location.href='Home.html'" class="fa fa-home"><a onclick="window.location.href='Home.html'">Home </a></li>
<li onclick="window.location.href='Subjects.html'" class="fa fa-language"><a onclick="window.location.href='Subjects.html'">Subjects</a></li>
<li onclick="window.location.href='Register.html'" class="fa fa-book"><a onclick="window.location.href='Register.html'" >E-Books </a></li>
<li onclick="window.location.href='Register.html'" class="fa fa-desktop"></i><a onclick="window.location.href='Register.html'">Video Tutorials </a></li>
<li onclick="window.location.href='Help.html'" class="fa fa-user-plus"></i><a onclick="window.location.href='Help.html'">Help </a></li>
<li onclick="window.location.href='About Us.html'" class="fa fa-commenting"><a onclick="window.location.href='About Us.html'">About us</a></li>
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
	<legend id="legend1"><i class="fa fa-book"></i> Purchase E-Books</legend>
<hr style="border:1px solid black;">
<label style="font-size:25px; margin-left:20px;" ><b>Category</b></label> 
<select id="list" style="width:100px;height:30px;">
<option value="phd">Phd</option>
<option value="bsc">Bsc</option>
<option value="a/l">A/L</option>
<option value="o/l">O/L</option>
<option value="msc">Msc</option>
<option value="hnd">HND</option>
 </select>

<label style="margin-left:100px;margin-top:-2px;font-size:25px"><b>Subject</b></label>
<select id="list" style="width:100px;height:30px;">
<option value="robotics">Robotics</option>
<option value="buddhism">Buddhism</option>
<option value="sinhala">Sinhala</option>
<option value="maths">Maths</option>
 </select>
<input type="button" value="Search" style="margin-left:150px;width:100px;height:30px;"  class="search">
  <hr style="border:1px solid black;">
  
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