<?php
session_start();

require 'connect.php';

if(isset($_POST['usname'])){
	
	$uname=$_POST['usname'];
	$pwd=$_POST['uspass']; 
	
	
	
	$sql="SELECT * FROM reg WHERE Uname='".$uname."' AND Pass='".$pwd."' LIMIT 1";
	
	$res=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($res)== 1){
		
		while($row = mysqli_fetch_assoc($res)) {
			
        $_SESSION[user]=$_POST['usname'];
		$_SESSION[Fname]=$row['Fname'];
		$_SESSION[Id]=$row['Regid'];
		$_SESSION[cate]=$row['SorT'];
		$_SESSION[email]=$row['Email'];
		
		if($row["SorT"]=="Student"){header('Location:../Student DashboardSettings.php');}
		
		if($row["SorT"]=="Teacher"){header('Location:../Teacher DashboardSettings.php');}
		}
		
	}else{?>
		<script>
		alert("Username Or Password Is Incorrect ! Please Try Again");
		</script>
	
<?php	

		exit();
	}
	}
?>