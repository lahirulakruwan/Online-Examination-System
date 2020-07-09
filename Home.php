<!Doctype HTML5>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src ="java/home.js"></script >


<link rel="stylesheet" type="text/css" href="style/Home.css">
<link rel="stylesheet" type="text/css" href="style/slider.css">
<link rel="stylesheet" type="text/css" href="style/backg.css">
<title>Home</title>
</head>


<body background="images/back.jpg" style="background-size:cover; background-repeat:no-repeat;">
<!--Header-->
<div id="header" style="background-image:url(images/home/hedder.png);">

<div style="float:left;" id="logo">
<img style="width:408px; height:118px; float:left; margin-top:10px; margin-left:10px;" src="images/home/logo ss.png"/>
</div>

<div id="rls">
<button id="reg" onclick="window.location.href='Register.php'">Register</button>
<button id="log" class="log" onclick="window.location.href='Login.php'" >Login</button>
</div><br/><br/><br/><br/>
<div id="search">
<input type="text" id="box" placeholder=" Search"/>
<button id="seab" class="fa fa-search"></button>
</div>
	
</div>
<br/>
<!--Menu Bar-->
<ul id="menubar" style="">
<li onclick="window.location.href='Home.php'" class="fa fa-home"><a onclick="window.location.href='Home.html'">Home </a></li>
<li onclick="window.location.href='Subjects.php'" class="fa fa-language"><a onclick="window.location.href='Subjects.html'">Subjects</a></li>
<li onclick="window.location.href='Register.php'" class="fa fa-book"><a onclick="window.location.href='Register.php'" >E-Books </a></li>
<li onclick="window.location.href='Register.php'" class="fa fa-desktop"></i><a onclick="window.location.href='Register.php'">Video Tutorials </a></li>
<li onclick="window.location.href='Help.php'" class="fa fa-user-plus"></i><a onclick="window.location.href='Help.html'">Help </a></li>
<li onclick="window.location.href='About Us.php'" class="fa fa-commenting"><a onclick="window.location.href='About Us.html'">About us</a></li>

 </ul>
 <hr size="3px" color="black" style="width:1200px;">
 <!--Slider-->
 <div class='slider'>
  <div class='slide1' style="background-image:url(images/home/1.jpg); background-size:cover; border-radius:10px;"></div>
  <div class='slide2' style="background-image:url(images/home/2.png); background-size:cover; border-radius:10px;"></div>
  <div class='slide3' style="background-image:url(images/home/3.jpg);  background-size:cover; border-radius:10px;"></div>
</div>
   
 <hr size="3px" color="black" style="width:1200px;>
 
 <!--Student/Teacher-->
 <div id="stdiv">
 <fieldset id="student"style=" background-size:cover; background-image:url(images/home/stufront.png);" onmouseover="mo1()"; onmouseleave="ml1();" onmouseover="psd();">
<legend id="legs">Student</legend> 
	
	<p id="pstu" style=" background-size:cover; background-image:url(images/home/pstu.png); margin-left:0px; float:left; border-radius:80px 80px 80px 80px;">
	<img style="float:left;" height="170px" width="170px" src="images/home/students.png"/>
	</p>
	<p id="psdetails"style="">
	
	
	</p>		
 </fieldset>
 
 <fieldset id="teacher" style=" background-size:cover; background-image:url(images/home/teacherfront.png);" onmouseover="mo2();" onmouseleave="ml2();"  >
<legend id="legt">Teacher</legend>
<p id="ptea" style=" background-image:url(images/home/ptea.png); margin-left:0px; float:right; border-radius:80px 80px 80px 80px; ">
<img style="float:right;"height="170px" width="170px" src="images/home/teachers.png"/>
  </p>
  <p id="ptdetails" style="">
	
	
	</p>
 
 </fieldset>
 
 </div>	
  <hr size="3px" color="black" style="margin-bottom:10px; width:1200px">
  <img src="images/home/add.jpg" style="margin-left:65px;">
  <hr size="3px" color="black" style="width:1200px;">
  
  <!--qtot-->
  <div id="divquiz"style="margin-left:65px; background-image:url(images/home/Quiz.jpg); background-size:cover;" onmouseover="mouseOver1();" onmouseleave="mouseLeave1();">
	<h2 id="h2" style="background-color:#4CAF50;">Quiz</h2>
		<p id="p1"  style="background-color:#4CAF50;">
		Taking online quizzes is becoming a huge success. But why is this such a huge success? 
		What integrates people to use online quizzes instead of written quizzes?
		Engage your audience,Large number,Randomizing questions,Quiz results/ gain insight in audience are the main advantages of the online  examination system.
		A large number of participants, with instant results of your online quiz(for the creator as well as the participants),
		a better overview, you’re able to randomize
		<br/>
		<button class="btn" onclick="window.location.href='Register.php'"><i class="fa fa-edit"></i>Attempt</button>
		</p>
  </div>
 
 <hr size="3px" color="black" style="width:0px; height:420px; float:left; margin-left:20px;">
  
  <div id="divteach"style="margin-left:20px; background-image:url(images/home/Teach.jpg); background-size:cover;" onmouseover="mouseOver2();" onmouseleave="mouseLeave2();">
 <h2 id="h2"style="background-color:#f44336;">Teach</h2>
		<p id="p2"  style="background-color:#f44336;">
		It’s the internet that has really created more opportunities for the teachers to make the examinations cheaper and reliable than ever before. 
		In order to find out why you need to use online test maker software, first we need to look at the major components associated with the examination process.
		In order to administer an exam, there can be three major components.The first one is to creating the examination and to keep the content safe until the start of the exam.
		<br/>
		<button class="btn" onclick="window.location.href='Register.php'"><i class="fa fa-play-circle"></i>Start</button>
		</p>
  </div>
  <hr size="3px" color="black" style="width:0px; height:420px; float:left; margin-left:20px;">
  
  <div id="divonlineb" style="margin-left:20px; background-image:url(images/home/ebook.jpg); background-size:cover;" onmouseover="mouseOver3();" onmouseleave="mouseLeave3();">
 <h2 id="h2"style="background-color:#008CBA;">E-Books</h2>
		<p id="p3"   style="background-color:#008CBA;">
		Online Examination is an essential ingredient in electronic and interactive learning, however, in educational environment most of examinations are done in the classical paper-based way. 
		This Book reviews the state-of-the-art and the-art-of-the-practice for nine general-purpose online examination systems found in the literatures, as well as,
		some dedicated industrial systems based on seven elected intertwined features, namely Secure login, resumption capability, multi-instructor, 
		
		<br/>
		<button class="btn" onclick="window.location.href='Register.php'"><i class="fa fa-shopping-cart"></i>Purchase</button>
		</p>
  </div>
  <hr size="3px" color="black"  size="5px" color="black" style="width:0px; height:420px; float:left; margin-left:20px;">
  
  <div id="divtutorials"style="margin-left:20px; background-image:url(images/home/Tuto.jpg); background-size:cover;" onmouseover="mouseOver4();" onmouseleave="mouseLeave4();">
 <h2 id="h2"style="background-color:#666666;">Tutorials</h2>
		<p id="p4"style="background-color:#666666;">
		A tutorial is a method of transferring knowledge and may be used as a part of a learning process. 
		More interactive and specific than a book or a lecture, a tutorial seeks to teach by example and supply the information to complete a certain task.
		A tutorial can be taken in many forms, ranging from a set of instructions to complete a task to an interactive problem solving session.
		Tutorials can be paper based or video.It covers all the parts of the syllabus.A tutorial is a method of transferring 

		<br/>
		<button class="btn" onclick="window.location.href='Register.php'"><i class="fa fa-youtube-play"></i>Watch</button>
		</p>
  </div>
  
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
	<h3 style="cursor:pointer;"><a onclick="window.location.href='Feedback.php'">Site Feedback.</a> | <a>Support.</a> |<a> FAQ.</a> |<a onclick="window.location.href='Contact Us.php'"> Contact Us.</a></h3>
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