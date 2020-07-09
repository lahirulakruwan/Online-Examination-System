<!Doctype HTML5>
<?php session_start();?>
<?php
require 'php/connect.php';

if(isset($_POST["send"])){

	$msgto = $_POST["userid"];
	$msgsub = $_POST["subject"];
	$msginfo = $_POST["info"];

	$sql = "INSERT INTO msg (msgto,subject,msginfo)
VALUES ('$msgto', '$msgsub','$msginfo')";

if (mysqli_query($conn, $sql)) {
	echo '<script language="javascript">';
	echo 'alert("message successfully sent")';
	echo '</script>';
	
	header('location:Student DashboardSettings.php');
	 exit();
	
} else {
    echo "Error: " . $sql . mysqli_error($conn);
}
}
mysqli_close($conn);
?>	
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style/Teacher Dashboard .Message Center.css">
<title>Message Center</title>
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

<button onclick="window.location.href='Teacher Dashboard.Add Quiz.php'" class="fa fa-plus-square" id="attemptquiz"> Add Quiz</button>

<button onclick="window.location.href='Teacher Dashboard.SellEbooks.php'" class="fa fa-book" id="attemptquiz"> Sell E-books </button>

<button onclick="window.location.href='Teacher Dashboard.Add Tutorials.php'" class="fa fa-youtube-play" id="attemptquiz"> Add Turorials</button>

<button onclick="window.location.href='Teacher Dashboard.Students Details.php'" class="fa fa-users" id="attemptquiz"> Students Details</button>

<button onclick="window.location.href='Teacher Dashboard .Result.php'" class="fa fa-graduation-cap" id="attemptquiz"> Result</button>

<button onclick="window.location.href='Teacher Dashboard .Message Center.php'" class="fa fa-maxcdn" id="attemptquiz"> Message Center</button>

<button onclick="window.location.href='Teacher DashboardSettings.php'" class="fa fa-cogs" id="attemptquiz"> Settings</button>

<form method="get" action="php/logout.php">
<button name="logout" class="fa fa-sign-out" id="attemptquiz" style="margin-top:50px">Logout</button>
</form>
</div>
<!--Adding Section-->
<fieldset id="settings">
	<legend id="legend1"><i class="fa fa-maxcdn"></i> Message Center</legend>

	<fieldset style = "border: 2px solid; width:400px; height:600px;float:left; margin-left:55px; margin-top:20px; margin-right:20px; padding:0px;border-radius:10px;">
    <h3 style = "background-color:gray; width:400px;height:30px;margin-left:0px; margin-top:0px; margin-right:0px; padding:0px;border-radius:5px 5px 0px 0px;"><i>&nbsp;Inbox</i></h3>
	</fieldset>
	
	 <hr style= "width:0px;height:620px;border:2px solid blue; float:left;  margin-top:20px">
	
	<fieldset style = "border:2px solid; width:400px; height:600px;float:left;margin-left:20px; margin-top:20px; margin-right:30px; padding:0px;border-radius:10px;">
    <h3 style="background-color:gray; width:400px;height:30px;margin-left:0px; margin-top:0px; margin-right:0px; padding:0px;border-radius:5px 5px 0px 0px;"><i>&nbsp;Send</i></h3>
	 
	 <form action="Student Dashboard.Message Center.php" method="post">

<h2 style="margin-left:10px;"><b>To:<input required type="text" name="userid" placeholder = "Enter student/Teacher Id" 
	 style ="border:2px solid; width:200px; height:30px;float:right;border-radius:10px; margin-right:40px;"> </b></h2>
	  
<h2 style="margin-left:10px;"><b>Subject:<input required type="text" name="subject" placeholder = "Enter subject here"
	  style ="border:2px solid; width:200px; height:30px; float:right;border-radius:10px; margin-right:40px; "> </b></h2>

<textarea required name="info" placeholder = "Enter Message here"  style=" resize:none; width:300px; height:300px; margin-left:20px;margin-right:3px;"></textarea>
	  
<input onclick="success();" type = "submit" name="send" value ="Send" style=" background-color:;width:120px;height:30px;margin-left:20px; margin-top:40px; margin-right:0px; padding:0px;border-radius:10px">
	   
<input type = "reset" value ="Clear" style=" background-color:;width:120px;height:30px;margin-left:20px; margin-top:40px; margin-right:0px; padding:0px;border-radius:10px">
</form>
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
