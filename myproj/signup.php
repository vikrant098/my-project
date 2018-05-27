<?php

	session_start();
if (isset($_POST['name']) && isset($_POST['usn']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['phoneno'])) {
$cn = mysqli_connect('localhost','root','');
if (!$cn) {
	echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'exam')) {
	echo 'Database not selected';
}


$username = $_POST['name'];
$usn = $_POST['usn'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phone = $_POST['phoneno'];

$sql1="SELECT * FROM studentdetails where usn = '$usn'";

$result = mysqli_query($cn, $sql1) or
	die(mysqli_error($cn));
	if(mysqli_num_rows($result) == 0)
	{
		$sql = "INSERT INTO studentdetails VALUES ('$username', '$usn', '$email' , '$pass' , '$phone')";

//$sql = "DELETE FROM studentdetails WHERE pass = 'asdfgh'";
$result = mysqli_query($cn, $sql) or
	die(mysqli_error($cn));

	}
	else
	{
		header("location:alreadyavailable.php");
	}


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
  <li><a  href="result.php">Result    </a></li>
  <li><a class="active" href="signup.php">Register    </a></li>
  <li><a  href="login.php"> Login  </a></li>
    <li class="right">   <?php if ($_SESSION['username']) { ?>
                        <a href="examination.php">Exam</a> </li>
                       <?php } else { ?>
                       <a href="About.php">About</a> </li>
                      <?php } ?>
                      
</ul>


<div id="outer">
	<div id="form">
		<form method="POST" action="signup.php">
			
			<input class="a" type="text" name="name" placeholder=" Enter Name"/>
			<input class="a" type="text" name="usn" placeholder=" Enter Usn"/>
			
			<input class="a" type="text" name="email" placeholder=" Enter email"/>
			<input class="a" type="password" name="pass" placeholder=" Enter your password"/>
			<input class="a" type="text" name="phoneno" placeholder=" Enter your PhoneNumber"/>
			<br>
			<input class="a" type="submit" value=" Register " />
		</form>
	</div>
</div>


</body>

</html>