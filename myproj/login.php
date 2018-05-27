<?php
session_start();
$_SESSION['username']='';
if (isset($_POST['name']) && isset($_POST['pass'])) {
	

$cn = mysqli_connect('localhost','root','');
if (!$cn) {
	echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'exam')) {
	echo 'Database not selected';
}


$username = $_POST['name'];
$_SESSION['username']=$username;
$pass = $_POST['pass'];


//$sql = "INSERT INTO studentdetails VALUES ('$username', '$usn', '$email' , '$pass' , '$phone')";
$sql = "SELECT * from studentdetails where name = '$username' and pass = '$pass'";

$result = mysqli_query($cn, $sql) or
	die(mysqli_error($cn));
	if(mysqli_num_rows($result) > 0)
	{
		/* while($row = mysqli_fetch_assoc($result)) {
		 	$_SESSION['usn']=$row["usn"];
		 }*/
		 $row = mysqli_fetch_array($result,MYSQLI_BOTH);
		 $_SESSION['usn']=$row['usn'];
		 


		header("Location: examination.php");

		
	}
	else
	{

		$_SESSION['usn']="";
		$_SESSION['username']="";
		header("location: wrongpass.php");
	}
}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="style.css" >
</head>

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
</style>



<body>

	<ul class="topnav">
  <li><a href="Exam.php">Home</a></li>
  <li><a  href="result.php">Result    </a></li>
  <li><a href="signup.php">Register    </a></li>
  <li><a class="active" href="login.php"> Login  </a></li>
  
  <li class="right">   <?php if ($_SESSION['username']) { ?>
                        <a href="examination.php">Exam</a> </li>
                       <?php } else { ?>
                       <a href="About.php">About</a> </li>
                      <?php } ?>
</ul>

	<div class="title"><h1>  </h1></div>
	<div class="container">
		<div class="left"></div>
		<div class="right">
			<div class="formBox">
				<form method="POST" action="login.php">
					<p>Username</p>
					<input type="text" name="name" placeholder="Username">
					<p>Password</p>
				<input type="Password" name="pass" placeholder="******">
				<input type="submit" name="" value="Sign In">
				<a href="signup.php"><input type="button" name="" value="Sign Up"></a>
				<a href="forgotpass1.php">Forgot Password</a>
				</form>
			</div>

		</div>

	</div>



</body>
</html>