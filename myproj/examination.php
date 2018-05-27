<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="examinationstyle.css" >
<style>
.button {
    background-color: #1B711E; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 150px 90px;
    cursor: pointer;

}

.button1{
    
    border-radius: 8px;
}
.button3 {border-radius: 8px;}

.navbar {
	opacity: 0.8;
    overflow: hidden;
    background-color: #333;
    font-family: sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 30px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #101010;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #252525;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
   	font-style: sans-serif;
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="Exam.php">Home</a>
  
  <div class="dropdown" style="float: right;">
    <button class="dropbtn"><?php echo $_SESSION['username']; ?> 
      <i class="fa fa-caret-down" ></i>
    </button>
    <div class="dropdown-content">
      
      <a href="result.php">Result</a>
      <a href="loggingout.php">Logout</a>
    </div>
  </div> 
</div>

<div class="title" ><h1>hello <?php echo $_SESSION['username']; ?> SELECT YOUR SUBJECT! </h1></div>

<div class="container" >
<a href="mode1.php"><button class="button button1">JAVA</button></a>
<a href="mode2.php"><button class="button button3">WEB</button></a>
<a href="mode3.php"><button class="button button3">DBMS</button></a>
</div>



</body>
</html>
