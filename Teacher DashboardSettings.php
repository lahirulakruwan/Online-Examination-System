<!Doctype HTML5>
<?php session_start();?>
<!--Update Email-->
<?php 
require 'php/connect.php';

if(isset($_POST['Uemail'])){

$nmail=$_POST['Nmail'];
$apass=$_POST['Apass'];

if($_POST['Apass']==$_SESSION["pass"]){
	
	$sql = "UPDATE reg SET Email='".$nmail."' WHERE Regid='".$_SESSION["Id"]."'";
if (mysqli_query($conn, $sql)) {
	
	header('location:Student DashboardSettings.php');
	
	exit();
	
} else {
    echo "Please Check Password Or Email" . $sql . "<br>" . mysqli_error($conn);
}
}else{
	//header('location:Student DashboardSettings.php?Invalid=Plz Check');
	}
}
mysqli_close($conn);
?> 
<!--Close Account-->
<?php
		require 'php/connect.php';
		
		if(isset($_POST["closeacc"])){
			
		$sql="DELETE  FROM reg Where Regid='$_SESSION[Id]'";
			
			if(mysqli_query($conn,$sql)){
				session_destroy();
				header('Location:Login.php');
			}else{
				
				echo "Not Deleted";
			}
		}
?>
<!--Update Password-->
<?php 
require 'php/connect.php';

	if(isset($_POST['Upassbtn'])){
	
	$oldpass=$_POST['Opass'];
	$newpass=$_POST['Npass'];
	$cnfpass=$_POST['CNpass'];
	
	if($oldpass==$_SESSION["pass"]){
	
	$sql="UPDATE reg SET Pass='".$newpass."' WHERE Regid='".$_SESSION["Id"]."'";
	
	if(mysqli_query($conn,$sql)){
		
	echo "Password Changed.";
		
	}else{echo "Passwords Not Changed";}
	}
	

}

?>

<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style/Teacher DashboardSettings.css">
<title>Teacher.Settings</title>
</head>


<body style=" background-size:cover;" background="images/back.jpg">

<!--Header-->
<div id="header" style="background-image:url(images/home/hedder.png);">

<div style="float:left;" id="logo">
<img style="width:408px; height:118px; float:left; margin-top:10px; margin-left:10px;" src="images/home/logo ss.png"/>
</div>

<div id="rls" style="display:none;">
<button id="reg" onclick="window.location.href='Register.php'">Register</button>

<button id="log" onclick="window.location.href='login.php'">Logout</button>
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

<h3><center><?php echo "$_SESSION[user]";?></br>Teacher</center></h3>

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


<!--Settings-->
<fieldset id="settings">
	<legend id="legend1"><i class="fa fa-cogs"></i> Settings</legend>
	
	<center>
<div id="profile">
	<h2 style="text-align:left; margin-left:5px; line-height:40px; float:left;">Full Name :
	<?php 
	
	echo "$_SESSION[Fname]";
	?>
	<br/> Category :
	<?php 
	echo "$_SESSION[cate]";
	?>
	<br/> Teacher ID :
	<?php 
	echo "$_SESSION[Id]";
	?>
	</h2>
	<div style="width:100px; margin-left:800px;">
	<img src="images/student.ico" style="width:100px; margin-left:0px; margin-top:10px;" /><br>
	<h4 style="text-align:center; margin-right:0px; line-height:1px;"> Profile Pic</h4>
	</div>
	</div>
	</center>
	
	<!--Deposit-->
	<div id="deposit" style=" folat:left; height:490px; width:500px; border-radius:10px; border:2px solid black; margin-left:10px; margin-top:5px; padding:0px;">
	<h2 style="background-color:gray; border-radius:10px 10px 0px 0px; margin-top:1px; padding:0px; height:50px; line-height:45px;"><center>Deposit Money</center></h2>
	<!--<hr style="width:0px; height:350px; color:black; size:3px; float:left; margin-left:520px; margin-top :0px; ">-->
	
	<center><div id="balance" style="border-radius:10px; border:2px solid black; height:100px; width:400px;">
	<img src="images/home/dollar.png" style="height:100px; width:100px; float:left; margin-top:0px; margin-left:5px;"/>
	<h1 style="float:left; margin-left:120px; line-height:5px;">Earnings</h1>
	<h1 style="float:left; margin-left:150px; line-height:3px; ">73$</h1>
	</div>
	</center>
		<!--Payment-->
		<fieldset id="payment" style="border-radius:10px; border:2px solid black; height:270px; width:398px; margin-left:50; margin-top:10px;">
	<legend style="font-size:24px; margin-left:20px;">Payment</legend>
		<center>
		<h3 style="line-height: 3px;">--Amount--<h4>
		<input style="line-height:3px;" type="text" placeholder="Enter Amount"/>
		<br/>
		
		<div style="float:left; margin-left:150px; margin-top:10px;">
		
		<input style="" type="radio" name="gender" value="Paypal"><a>Paypal.</a><br/>
		<input style="" type="radio" name="gender" value="Visa/Master"><a>Visa/Master.</a><br/>
		<input style="" type="radio" name="gender" value="Bank Wire"><a>Bank Wire.</a><br/>
		
		</div>
		<br/>
		<p>
		..............................................................................
		</p>
		<button style="width:150; height:50; border:2px solid black; border-radius:10px; font-size:15px; background-color:black; color:white;"><i class="fa fa-money"></i> Withdraw</button>
		</center>
	</fieldset>
	</div>
	<!--Close Account-->
	
	<div style="border-radius:10px; border:2px solid black; width:950px; height:120px; margin:10px;">
	<h2 style="background-color:gray; border-radius:10px 10px 0px 0px; margin-top:1px; padding:0px; height:40px; line-height:40px;"><center>Close Account</center></h2>
	
	<form method="post" action="Teacher DashboardSettings.php">
	<input type="text" style="position:absolute; left:715px; top:1045px;" placeholder=" Enter Password Here.">
	<input type="submit" value="Close Account" name="closeacc" id="b" style=" position:absolute; left:725px; top:1070px; border:2px solid white; border-radius:10px; width:130px; height:40px; background-color:black; color:white;">
	</form>
	
	</div>
	</fieldset>
	
	<!--Update Password-->
	<div id="changeemail" style=" position:absolute; right:0; top:490px; right:86px; folat:left; height:240px; width:405px; border-radius:10px; border:2px solid black; margin-left:10px; margin-top:5px; padding:0px;">
	<h2 style="background-color:gray; border-radius:10px 10px 0px 0px; margin-top:1px; padding:0px; height:50px; line-height:45px;"><center>Change E-mail</center></h2>
	<center>
	<form method="post" action="Student DashboardSettings.php" >
	<h4 name="Omail"><?php echo "$_SESSION[email]";?><h4>
	<input required  type="email" name="Nmail" id="box" placeholder="Enter New E-Mail Here."/>
	<input required  type="text" name="Apass" id="box" placeholder=" Enter Password Here." style="margin-top:10px;"/><br/>
	<button id="a" name="Uemail" style="margin-top:10px; border:2px solid white; border-radius:10px; width:120px; height:40px; background-color:black; color:white;"><i class="fa fa-refresh"> Update E-Mail</i></button>
	
	</form>
	</center>
	</div>
	<!--Change Password-->
	<div id="changepassword" style=" position:absolute; right:0; top:740px; right:86px; folat:left; height:240px; width:405px; border-radius:10px; border:2px solid black; margin-left:10px; margin-top:5px; padding:0px;">
	<h2 style="background-color:gray; border-radius:10px 10px 0px 0px; margin-top:1px; padding:0px; height:50px; line-height:45px;"><center>Change Password</center></h2>
	<center>
	
	<form method="post" action="Student DashboardSettings.php">
	<input required name="Opass" type="password" id="box" placeholder="Enter Old New E-Mail Here."/>
	<input required name="Npass" type="password" id="box" placeholder=" Enter New Password Here." style="margin-top:10px;"/><br/>
	<input required name="CNpass" type="password" id="box" placeholder=" Re-Enter New Password Here." style="margin-top:10px;"/><br/>
	<button name="Upassbtn" id="b" style="margin-top:10px; border:2px solid white; border-radius:10px; width:130px; height:40px; background-color:black; color:white;"><i class="fa fa-refresh"> Update Password</i></button>
	</form>
	</center>
	</div>
	
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
