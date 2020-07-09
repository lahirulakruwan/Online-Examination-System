<?php
require 'php/connect.php';

if(isset($_POST["regbtn"])){
	
	$fullname = $_POST["fname"];
	$username = $_POST["usname"];
	$usermail = $_POST["mail"];
	$password = ($_POST["pass"]);
	$cpassword =($_POST["cpass"]);
	$SorT = $_POST["c1"];
	
if($password==$cpassword){
	
$sql = "INSERT INTO reg (Fname,Email,Uname,Pass,CPass,SorT)
VALUES ('$fullname','$usermail', '$username', '$password','$cpassword','$SorT')";
	
if (mysqli_query($conn, $sql)) {
	require 'Login.php';
	exit;
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}
mysqli_close($conn);

?>
<html>
<head>
<style>
#reg:hover{
	background-color:#57b846;
	transition-duration:0.4s;
	font-weight:bold;
	cursor:pointer;
}
#t1:hover{
	background-color:#e0e0d1;
}
</style>
<title>Register</title>
</head>
<body style=" background-size:cover;" background="images/back.jpg">




<center>
<!-- Username and password-->
  <fieldset style = " background-color:rgba(225,255,255,0.7); border-radius:10px; width:800px; height:590px; border:2px solid black; text-align:left; ">
	<center>
<img onclick="window.location.href='Home.php'" src="images/login/logomid.png" style="margin-top:10px; cursor:pointer;"/>
<h1 style="margin-top:10px;"><b>Register</b></h1></center>
<form action="Register.php" method="post" name="formreg" onsubmit="return validateForm();">
	<div style="margin-left:100px; margin-top:25px; float:left;">
	
    <input  id="fname" type = "text"  class = "" name="fname" placeholder = "Enter Your Full Name" 
	style="margin-bottom:15px; border:2px solid black; border-radius:5px; height:25px; width:200px; "  />
	 <br/>
	 
	 <input id="email" type = "email"  class = "" name="mail" placeholder = "Enter Your Email" 
	style="margin-bottom:15px; border:2px solid black; border-radius:5px; height:25px; width:200px; "  />
	 <br/>
	 
    <input id="uname" type = "text"  class = "" name = "usname" placeholder ="Enter A User Name" 
	style="margin-bottom:15px; border:2px solid black; border-radius:5px; height:25px; width:200px;"  />
	 <br/>
   
   <input type="password"  id="tpass"  type = "text"  class = "select" name="pass" placeholder = "Enter A Password" 
	style="margin-bottom:15px; border:2px solid black; border-radius:5px; height:25px; width:200px; "  />
	 <br/>
	 
    <input type="password" id="tcpass"  type = "text"  class = "select" name = "cpass" placeholder ="Re - Enter Your Password" 
	style="margin-bottom:15px; border:2px solid black; border-radius:5px; height:25px; width:200px;"  />
	 <br/>
	
	<div style="float:left; margin-left:10px;  margin-right:30px; ">
	<input type="radio" id="c1" name="c1" value="Student" /><a>Student</a>
	</div>
	
	<div >
	<input type="radio" id="c2" name="c1" value="Teacher" /><a>Teacher</a>
	</div>
	
	<input id="reg" onclick="" type="submit"  name="regbtn" value = "Register" style=" font-size:15px; border:2px solid #57b846; margin-top:20px; 
	margin-bottom:20px; margin-left:25px; width:150px; height:50px; border-radius:30px;" ><br/>
	
	</form>
	<a onclick="window.location.href='Login.php'" tabindex="3" style="margin-left:40px; cursor:pointer; text-decoration:underline; color:blue; ">Already Registered.</a>
	</div>
	
	<hr color = "black"style="width:0px; height:320px; margin-top:15px; float:left; margin-left:100px; margin-right:100px;">
	
	<!-- google and facebook-->
	
	<div style="margin-top:100px;">
	<div style=" float:left; margin-left:5px;  margin-right:30px; ">
	<input type="radio"  value="Student" /><a>Student</a>
	</div>
	
	<div >
	<input type="radio"  value="Student" /><a>Teacher</a>
	</div>
	<image src="images/Register/upfacebook.png" style="width:250px; height:44px; margin-top:15px; margin-left:-35px;"/>
	<br/>
	<image src="images/Register/upgoogle.png" style="width:250px; height:44px; margin-top:10px; margin-left:-35px;" />
	</div>
    </fieldset>
	</center>
  


</body>
</html>
	<script> 
	function login() {
		var pass = document.getElementById('tpass').value;
		var cpass = document.getElementById('tcpass').value;
		if(pass==cpass){
		alert("Now You Can Login!");
		
		}else{alert("Plz Check Pass Ans Cpass");
		
		}
}
	function validateForm(){
		var fname= document.forms["formreg"]["fname"].value;
		if(fname=="")
		{	alert("Please Enter Your Full Name !");
			return false;
		}
		
		var mail= document.forms["formreg"]["mail"].value;
		if(mail=="")
		{	alert("Please Enter Your Email !");
			return false;
		}
		
		var uname= document.forms["formreg"]["usname"].value;
		if(uname=="")
		{	alert("Please Enter A Username !");
			return false;
		}
		
		var pass= document.forms["formreg"]["pass"].value;
		if(pass=="")
		{	alert("Please Enter A Password !");
			return false;
		}
		
		var cpass= document.forms["formreg"]["cpass"].value;
		if(cpass=="")
		{	alert("Please Confirm Your Password !");
			return false;
		}
		var pass = document.getElementById('tpass').value;
		var cpass = document.getElementById('tcpass').value;
		if(pass!=cpass){
		alert("Password Not Matched!");
		return false;
		}
		if ((document.getElementById('c1').checked == true) || (document.getElementById('c2').checked == true)) {
        alert("Registered Succsess., Please Login Now!");
		
		}else{alert("Please Select Your Option!");return false;}

		
	}
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	