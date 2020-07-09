<?php session_start();?> 
<?php 
require 'connect.php';

	if(isset($_POST['Upassbtn'])){
	
	$oldpass=$_POST['Opass'];
	$newpass=$_POST['Npass'];
	$cnfpass=$_POST['CNpass'];
	
	$sql="UPDATE reg SET Pass='".$newpass."' WHERE Regid='".$_SESSION["Id"]."'";
	if(mysqli_query($conn,$sql)){
		echo "data Entered";
		}

	
	
	
}else{echo "Not ok";}
?>