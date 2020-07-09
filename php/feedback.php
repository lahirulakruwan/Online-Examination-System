<?php
require 'connect.php';
 
if(isset($_POST["feedbtn"])){
	$username = $_POST["username"];
	$usermail = $_POST["email"];
	$rate = ($_POST["rate"]);
	$feedinfo =($_POST["feedinfo"]);
	
$sql1 = "INSERT INTO feedback (username ,email ,rate ,feedinfo)
VALUES ('$username','$usermail', '$rate', '$feedinfo')";

if (mysqli_query($conn, $sql1)) {
	echo '<script language="javascript">';
	echo 'alert("message successfully sent")';
	echo '</script>';
	require '../Home.php';
	exit();
	

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>