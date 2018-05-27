<?php

	session_start();
if (isset($_POST['usn'])) 
{
	$usnn=$_POST['usn'];
	$_SESSION['resultusn2']=$usnn;
	header("location:mainresult3.php");
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" href="style.css" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}

ul.topnav {

  	opacity: 0.7;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 90px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}
body{
  background-color: #A09B8B
}

		#outer
		{
			background-repeat: no-repeat;
			background-size: cover;
			height: 595px;
			
			margin: 0px auto;
			border:1px solid;
			background-image: url("firstpageim.jpg");
		}

		#form
		{
			height: 450px;
			width: 400px;
			opacity: 0.9;
			box-shadow: 0 15px 40px rgba(0,0,0,.5);
			margin-left: 500px;
			margin-top: 80px;
		}
		.a
		{
			box-shadow: 0 15px 40px rgba(0,0,0,.5);
			height: 40px;
			width: 300px;
			margin-top: 25px;
			margin-left: 45px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
		<ul class="topnav">
  <li><a href="Exam.php">Home</a></li>
  <li><a  href="result.php" class="active">Result    </a></li>
  <li><a  href="signup.php">Register    </a></li>
  <li><a  href="login.php"> Login  </a></li>
    <li class="right">   <?php if ($_SESSION['username']) { ?>
                        <a href="examination.php">Exam</a> </li>
                       <?php } else { ?>
                       <a href="About.php">About</a> </li>
                      <?php } ?>
                      
</ul>


<div id="outer">
	<div id="form">
		<form method="POST" action="individualresult2.php" style="padding-top: 130px;">
			
			<input class="a" type="text" name="usn" placeholder=" Enter Usn"/>
			
			<input class="a" type="submit" value=" Result" />
		</form>
	</div>
</div>


</body>

</html>