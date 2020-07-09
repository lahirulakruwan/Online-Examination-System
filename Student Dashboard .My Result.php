<!Doctype HTML5>
<?php session_start();?>
<html>
<head>
<style>

</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style/Student Dashboard .My Result.css">
<title>My Result</title>
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

<h3><center><?php echo "$_SESSION[user]";?></br>Student</center></h3>

<hr/ style="margin-top:2px; height:3px; background-color:black; width:150px;">

<button onclick="window.location.href='Student Dashboard .Attempt Quiz Search.php'" class="fa fa-edit" id="attemptquiz"> Attempt Quiz</button>

<button onclick="window.location.href='Student Dashboard .Purchase E-Books.php'" class="fa fa-book" id="attemptquiz"> Purchase E-books </button>

<button onclick="window.location.href='Student Dashboard.Watch Tutorials.php'" class="fa fa-youtube-play" id="attemptquiz"> Watch Turorials</button>

<button onclick="window.location.href='Student Dashboard .My Result.php'" class="fa fa-graduation-cap" id="attemptquiz"> My Result</button>

<button onclick="window.location.href='Student Dashboard.Message Center.php'" class="fa fa-maxcdn" id="attemptquiz"> Message Center</button>

<button onclick="window.location.href='Student DashboardSettings.php'" class="fa fa-cogs" id="attemptquiz"> Settings</button>
<form method="get" action="php/logout.php">
<button name="logout" class="fa fa-sign-out" id="attemptquiz" style="margin-top:50px">Logout</button>
</form>

</div>
<!--Adding Section-->
<fieldset id="Settings">
	<legend id="legend1"><i class="fa fa-graduation-cap"></i> My Results</legend>

	<hr style="width:90px;margin-top:20px;"color="black">
<h3>Categary:</h3>
<select id="list">
<option value="phd">Phd</option>
<option value="bsc">Bsc</option>
<option value="a/l">A/L</option>
<option value="o/l">O/L</option>
<option value="msc">Msc</option>
<option value="hnd">HND</option>
  </select>

<h3>Subject:</h3>
<select id="list">
<option value="robotics">Robotics</option>
<option value="buddhism">Buddhism</option>
<option value="sinhala">Sinhala</option>
<option value="maths">Maths</option>
  </select>

 <form class="example" action="/action_page.php" style="margin-auto;max-width:300px">
<input value="Search" type="button">
 </form>
<hr style="width:90px;margin-top:10px;" color="black">
<fieldset style="border:2px solid;width:700px;height:300px;float-left;margin-left:20px;margin-top:50px;padding:10px;border-radius:20px;">
<br><table>
  <tbody><tr>
   <th>Date of Attended</th>
   <th>catagory</th>
   <th>Subject</th>
   <th>Lesson</th>
   <th>Quiz</th>
   <th>Progress</th>
  </tr>
  <tr>
   <td>01/13/2017</td>
   <td>Msc</td>
   <td>Chemistry</td>
   <td>Organic</td>
   <td>10</td>
   <td>07/10</td>
  </tr>
  <tr>
   <td>07/04/2018</td>
   <td>Phd</td>
   <td>Maths</td>
   <td>Probability</td>
   <td>15</td>
   <td>05/15</td>
  </tr>
  <tr>
   <td>05/15/2016</td>
   <td>A/L</td>
   <td>Physics</td>
   <td>Speed</td>
   <td>12</td>
   <td>10/12</td>
  </tr>
  <tr>
   <td>04/10/2013</td>
   <td>O/L</td>
   <td>Sinhala</td>
   <td>Grammer</td>
   <td>20</td>
   <td>15/20</td>
  </tr>
   <tr>
   <td>03/20/2017</td>
   <td>Bsc</td>
   <td>I.C.T</td>
   <td>Web Designing</td>
   <td>05</td>
   <td>05/05</td>
  </tr>



</tbody></table></fieldset>
	
	
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