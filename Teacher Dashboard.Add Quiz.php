<!Doctype HTML5>
<?php session_start();?>
<html>
<head>
<style>
     .field{
 
       border: 2px solid;
	   width:900px;
	   height:720px;
	   float:left;
	   margin-left:300px;
	   margin-top:10px;
	   margin-right: 10px;
	   padding:0px;
       } 
      .p {
         margin-left:20px;
	     margin-top: 30px;
		 font-size : 25px;
         }

	.box{
 
       border: 2.5px solid;
	   width:130px;
	   height:30px;
	   margin-left:20px;
	   margin-top: 10px;
 
    }
 
    .legend{
          margin-left: 15px;
        } 
		
		
    .button{
	
	        margin-left:70px;
	        margin-top : 50px;
			width : 80px;
			height: 40px;
			border:2px solid;
			border-radius:10px;
	        font-weight:bold;
	        transition-duration: 0.4s;
	        background-color:white;
		  }
		  
		  
	.button:hover {
             background-color: #008CBA;
             color: white;
           }   	   	  

     .textarea{
	 
	        width:700px;
			height:200px;
	        margin-left:30px ;
			margin-top:10px;
             border:1px solid;			
	      }		  
		  
	   .radio{
	   
	       margin-left:70px;
	       margin-top:20px;
	    }	  
		
		.text{
		
		       width : 300px;
		       height :25px;
		       border : 1px solid;
			   margin-left: 5px;
		     }
		
		.button1{
		
		    margin-left:570px;
	        margin-top :-20px;
			width :80px;
			height:30px;
			border:2px solid;
			border-radius:10px;
			font-weight:bold;
	        transition-duration: 0.4s;
	        background-color:white;
		}
		.button1:hover {
             background-color: #008CBA;
             color: white;
           }   	   	  
		
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="style/Teacher Dashboard.Add Quiz.css">
<title>Add Quiz</title>
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
	<legend id="legend1"><i class="fa fa-plus-square"></i> Add Quiz</legend>
	<div style="margin-left:50px;">
<b><label class ="p" >Category:</label></b><br>
<select  class = "box">
<option value = "A/l">A/L</option>
<option value = "O/l">O/L</option>
<option value = "A/l">Bsc</option>
<option value = "A/l">Msc</option>
<option value = "A/l">Phd</option>
<option value = "A/l">Hnd</option>
</select>
<h4 class="p" style="margin-left:245px;margin-top:-68px;margin-bottom:0px;">Subject:</h4>
<select  class = "box" style="margin-left:235px;margin-top:6px;">
<option value = "A/l">A/L</option>
<option value = "O/l">O/L</option>
<option value = "A/l">Bsc</option>
<option value = "A/l">Msc</option>
<option value = "A/l">Phd</option>
<option value = "A/l">Hnd</option>
</select>
<h4 class="p" style="margin-left:460px;margin-top:-68px;margin-bottom:0px;">Questions:</h4>
<select  class = "box" style="margin-left:460px;margin-top:6px;">
<option value = "A/l">A/L</option>
<option value = "O/l">O/L</option>
<option value = "A/l">Bsc</option>
<option value = "A/l">Msc</option>
<option value = "A/l">Phd</option>
<option value = "A/l">Hnd</option>
</select>
<h4 class="p" style="margin-left:670px;margin-top:-68px;margin-bottom:0px;">Time:</h4>
<select  class = "box" style="margin-left:670px;margin-top:6px;">
<option value = "A/l">A/L</option>
<option value = "O/l">O/L</option>
<option value = "A/l">Bsc</option>
<option value = "A/l">Msc</option>
<option value = "A/l">Phd</option>
<option value = "A/l">Hnd</option>
</select><br/>
<input type="button"  value="Quiz1" class = "button">
<input type="button"  value="Quiz2" class = "button" style="margin-left:7px;">
<input type="button"  value="Quiz3" class = "button" style="margin-left:7px;">
<input type="button"  value="Quiz4" class = "button" style="margin-left:7px;">
<input type="button"  value="Quiz5" class = "button" style="margin-left:7px;">
<fieldset style= "width:800px; height:420px; border:3px solid;margin-left:15px;margin-top:10px;margin-right:15px;">
 <textarea class = "textarea">
 </textarea>
  <input type = "radio"  name ="answer" value ="two"   class ="radio"><input type ="text" name ="Enter Answer 1" value ="" class ="text"><br>
 <input type = "radio"  name ="answer" value ="two"   class ="radio"><input type ="text" name ="Enter Answer2" value ="" class ="text"><br>
 <input type = "radio"  name ="answer" value ="three" class = "radio" ><input type ="text" name ="Enter Answer2" value ="" class ="text"><br>
 <input type = "radio"  name ="answer" value ="fourth" class = "radio" ><input type ="text" name ="Enter Answer2" value ="" class ="text"><br>
  <input type="button"  value="Save" class = "button1">
  <input type="button"  value="Clear" class = "button1"  style="margin-left:20px;">
</fieldset>
    <input type="button"  value="Submit" class = "button1" style="margin-top:10px;margin-left:600px">
    <input type="button"  value="Cancel" class = "button1"  style="margin-left:20px; margin-top:10px;margin-left:20px;">
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