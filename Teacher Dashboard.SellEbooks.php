<!Doctype HTML5>
<?php session_start();?>
<?php 
require 'php/connect.php';

if (isset($_POST["sell"])) {
		
		$category = $_POST["category"];
		$subjects = $_POST["subject"];
		$booktitle =$_POST["title"];
		$price = $_POST["price"];
		$comment = $_POST["comment"];
      
			
	  $sql = "INSERT INTO sellbook(category,subject,booktitle,price,comment) VALUES('$category','$subjects','$booktitle','$price','$comment')";
	
	  if (mysqli_query($conn, $sql)) {
           echo "New record created successfully";
  } else {
     die("Connection failed: " . $conn->connect_error);

  }     
  }
	mysqli_close($conn);
?> 
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style/Teacher Dashboard.SellEbooks.css">
<title>Sell E-Books</title>
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
<!--Adding Section-->
<fieldset id="Settings">
	<legend id="legend1"><i class="fa fa-book"></i> Sell E-Books</legend>
	
<div style="margin-left:15px; margin-top:10px;">

<form method="post" action="Teacher Dashboard.SellEbooks.php">
<label class ="p">Category:</label>
<select name="category"  class = "box">
<option>A/L</option>
<option>O/L</option>
<option>Bsc</option>
<option >Msc</option>
<option>Phd</option>
<option>Hnd</option>
</select><br><br><br>
<label class ="p">Subjects:</label>
<select name="subject" class="box"  style="margin-left:15px;">
<option>Robotics</option>
<option>Buddhism</option>
<option>Sinhala</option>
<option>Maths</option>
</select><br><br><br>
<label class ="p">Book Title:</label>
<input name="title" type ="text"  placeholder ="Enter Book Title Here" class ="textbox"><br/><br/><br/>
<label class ="p">Price:</label>
<input name="price" type ="text" placeholder ="Enter Book Price Here" class ="textbox" style="width:240px;"><br/><br/><br/>
<fieldset style ="margin-left;100px;margin-top:-170px;margin-right:50px;float:right;border:2px solid;width:100px;height:140px;">
</fieldset>
<label class ="p">Upload Books:</label>
<input type ="button" value ="Upload" class="button"><br/><br/>
<input type ="button" value ="Upload Cover Page" class="button1" style="width:126px; float:right; margin-left;380px; margin-top:-50px; margin-right:50px;"/>
<h3 style="margin-left:10px;">(Please Upload Book As a Pdf File)</h4><br/>
<h3 style="margin-left:10px;">Information About Your Book</h4>
<textarea name="comment" class = "textarea" rows="7" cols="100" style="resize:none;" >
</textarea>
<br/><br/>
<input name="sell" type ="submit" value ="Sell" class="button1">
<input type ="reset" value ="Cancel" class="button1" style="">
</form>

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