<?php 



if(isset($_GET['logout'])){
	
	session_destroy();
	header('Location:../Login.php');
	
}
?>