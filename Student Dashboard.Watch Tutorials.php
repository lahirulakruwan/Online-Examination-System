<!Doctype HTML5>
<?php session_start();?>
<html>
<head>
<style>
.field{
 
       border: 2px solid;
	   width:900px;
	   height:635px;
	   float:left; 
	   margin-left:300px;
	   margin-top:0px;
	   margin-right: 10px;
	   padding:0px;
	   border-radius:10px;
       } 
 
       .legend{
                  margin-left: 15px;
              } 

        .p {
         margin-left:45px;
	     margin-top: 10px;
		 font-size : 25px;
         }
		 
		 
	    .box{
 
       border: 2.5px solid;
	   width:130px;
	   height:30px;
	   margin-left:5px;
	   margin-top: 10px;
 
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style/Student Dashboard.Watch Tutorials.css">
<title>Watch Turorials</title>
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
	<legend id="legend1"><i class="fa fa-youtube-play"></i> Watch Turorials</legend>
	<div style="margin-left:60px;">
	<hr style = "width:800;height:0px;margin-left:10px;border:2px solid;margin-right:10px"/>
    <b><label class ="p" >Category:</label></b>
     <select  class = "box">
         <option value = "A/l">A/L</option>
         <option value = "O/l">O/L</option>
         <option value = "A/l">Bsc</option>
         <option value = "A/l">Msc</option>
         <option value = "A/l">Phd</option>
         <option value = "A/l">Hnd</option>
     </select>
     <b><label class="p" style="margin-left:50px;margin-top:10px;margin-bottom:0px;">Subject:</label></b>
         <select  class = "box" style="margin-left:5px;margin-top:40px;">
          <option value = "A/l">A/L</option>
          <option value = "O/l">O/L</option>
          <option value = "A/l">Bsc</option>
          <option value = "A/l">Msc</option>
          <option value = "A/l">Phd</option>
          <option value = "A/l">Hnd</option>
          </select>
		  
	  <input type="button"  value="Search"  style="margin-top:-35px;margin-left:600px; bordr:1px solid;float:right;margin-right:90px;width:120px;height:40px;border-radius:10px;">	  
     <hr style = "width:800;height:0px;margin-left:10px;border:2px solid;margin-right:10px;margin-top:20px;"/>
	<d/iv>
	
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