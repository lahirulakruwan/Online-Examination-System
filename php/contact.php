<?php
require 'connect.php';

if(isset($_POST["btnsubmit"])){
	
	$uname = $_POST["username"];
	$mail = $_POST["mail"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	
	$sql = "INSERT INTO contact (username,email,subject,message)
VALUES ('$uname', '$mail', '$subject','$message')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
mysqli_close($conn);
?>

