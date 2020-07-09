<!DOCTYPE html>
<?php
require 'php/connect.php';

if(isset($_POST['btnlog'])){
	
	$uname=$_POST['usname'];
	$pwd =$_POST['uspass']; 
	
	$sql="SELECT * FROM reg WHERE Uname='".$uname."' AND Pass='".$pwd."' LIMIT 1";
	
	$res=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($res)== 1){
		
		session_start();
		while($row = mysqli_fetch_assoc($res)) {
			
        $_SESSION["user"]=$_POST['usname'];
		$_SESSION["Fname"]=$row['Fname'];
		$_SESSION["Id"]=$row['Regid'];
		$_SESSION["cate"]=$row['SorT'];
		$_SESSION["email"]=$row['Email'];
		$_SESSION["pass"]=$row['Pass'];
		
		if($row["SorT"]=="Student"){header('Location:Student DashboardSettings.php');}
		
		if($row["SorT"]=="Teacher"){header('Location:Teacher DashboardSettings.php');}
		}
		
	}else{
		header('Location:Login.php?Invalid=Plz Enter Correct Username And Password');
	}
	}
?>
<html>
<head>


<style>
#login:hover{
	background-color:#57b846;
	transition-duration:0.4s;
	font-weight:bold;
	cursor:pointer;
}
#t1:hover{
	background-color:#e0e0d1;
}
</style>
<title>Login</title>
<script type="text/javascript">

</script>
</head>
<body style=" background-size:cover;" background="images/back.jpg" >


<center>
<!-- Username and password-->
  <fieldset style = "background-color:rgba(225,255,255,0.7); border-radius:10px; width:800px; height:590px; border:2px solid black; text-align:left;">
<center>
<img onclick="window.location.href='Home.php'" src="images/login/logomid.png" style="margin-top:10px; cursor:pointer;"/>
<h1 style="margin-top:10px;"><b>Login</b></h1></center>
	<div style="margin-left:100px; margin-top:100px; float:left;">
	
	<form method="post" action="Login.php">

    <input  type = "text" name="usname" required placeholder = "Enter Your User Name"
	style="margin-bottom:15px; border:2px solid black; border-radius:5px; height:25px; width:200px; "  />
	 <br/>

    <input type="password"  type = "text" required   name = "uspass" placeholder ="Enter Your Password"
	style="margin-bottom:15px; border:2px solid black; border-radius:5px; height:25px; width:200px;"  />
	 <br/>
	 
	<input id="login"  type="submit" name="btnlog"  value = "Login" style=" font-size:15px; border:2px solid #57b846; margin-top:20px;
	margin-bottom:20px; margin-left:25px; width:150px; height:50px; border-radius:30px;" /><br/>
	
	</form>
	
	<a onclick="window.location.href=''"tabindex="3" style="margin-left:40px; cursor:pointer; text-decoration:underline; color:blue; ">Forgot Password?</a><br/>
	<a onclick="window.location.href='Register.php'" id="forgotPassword" tabindex="3" style="margin-left:70px; cursor:pointer; text-decoration:underline; color:blue; ">Register</a>
	</div>

	<hr color = "black"style="width:0px; height:320px; margin-top:15px; float:left; margin-left:100px; margin-right:100px;">

	<!-- google and facebook-->

	<div style="margin-top:100px;">
	<!--
	<div style=" float:left; margin-left:0px;  margin-right:30px; ">
	
	<input type="radio" name="c1" value="Student" /><a>Student</a>
	</div>

	<div >
	<input type="radio" name="c1" value="Student" /><a>Teacher</a>
	</div>-->
	<image src="images/login/loginfacebook.png" style="width:250px; height:44px; margin-top:15px; margin-left:-35px;"/>
	<br/>
	<image src="images/login/logingoogle.png" style="width:250px; height:44px; margin-top:10px; margin-left:-35px;" />

	</div>
	</fieldset>
	</center>
</body>
</html>
<?php 
if(@$_GET['Invalid']){?>
<script type="text/javascript">
 alert("Plz Enter Correct Username And Password.");
</script>
<?php } ?>

