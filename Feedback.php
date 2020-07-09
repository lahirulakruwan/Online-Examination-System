<!Doctype HTML5>
<?php
require 'php/connect.php';
 
if(isset($_POST["feedbtn"])){
	$username = $_POST["username"];
	$usermail = $_POST["email"];
	$rate = ($_POST["rate"]);
	$feedinfo =($_POST["feedinfo"]);
	
$sql1 = "INSERT INTO feedback (username ,email ,rate ,feedinfo)
VALUES ('$username','$usermail', '$rate', '$feedinfo')";

if (mysqli_query($conn, $sql1)) {?>
	<script >
	 alert("message successfully sent");
	</script>
	<?php
	header('Location:Home.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>
<html>
<head>
<style>

</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src ="java/home.js"></script>
<link rel="stylesheet" type="text/css" href="style/Feedback.css">
<title>Feedback.</title>
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
<ul id="menubar" style="">
<li onclick="window.location.href='Home.php'" class="fa fa-home"><a onclick="window.location.href='Home.html'">Home </a></li>
<li onclick="window.location.href='Subjects.php'" class="fa fa-language"><a onclick="window.location.href='Subjects.html'">Subjects</a></li>
<li onclick="window.location.href='Register.php'" class="fa fa-book"><a onclick="window.location.href='Register.html'" >E-Books </a></li>
<li onclick="window.location.href='Register.php'" class="fa fa-desktop"></i><a onclick="window.location.href='Register.html'">Video Tutorials </a></li>
<li onclick="window.location.href='Help.php'" class="fa fa-user-plus"></i><a onclick="window.location.href='Help.html'">Help </a></li>
<li onclick="window.location.href='About Us.php'" class="fa fa-commenting"><a onclick="window.location.href='About Us.html'">About us</a></li>

 </ul>
 <hr size="3px" color="black" style="width:1200px;">
 
   <fieldset style="background-color:white; margin-left:65px; width:850px; height:632px; border-radius:20px; border:2px solid blue; float:left; margin-bottom:10px;">
<legend style="font-size:50px;">Feedback</legend>
<p>Wrie your opinion about our site.if you want changes in the website please let us know.<br>Thankyou!</br> </p>

<form action="Feedback.php" method="post">
<br>User name:<br><input style="border:1px solid black; type="text" name="username" value=""><br>

<br>Email:<br><input type="email" style="border:1px solid black;"  name="email" value=""><br>

<br>Rating:<br><select name="rate"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select><br>

<br>Feedback:<br>
<textarea name="feedinfo" style="border:1px solid black; resize:none;" rows="5" cols="50">
</textarea><br>
<br>
<br><textarea rows="1" cols="5">
</textarea><br>
<br>CApTChA<br>
<input type="Submit" value="Send" name="feedbtn"label style="border:1px solid black; height:30px; width:100px; margin-top:15px; border-radius:10px;" >
<input type="reset" value="cancel"label style="border:1px solid black; height:30px; width:100px; margin-top:15px; border-radius:10px;" >
</form>
</fieldset>

<fieldset style=" background-color:white; width:301px; height:598px; float:left; border-radius:20px; border:2px solid blue; margin-top:34px; margin-right:10px; margin-bottom:10px;">

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
