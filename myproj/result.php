<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.button {
    background-color: #1B711E; /* Green */
    border: none;
    color: white;
    padding: 20px 50px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 150px 60px;
    cursor: pointer;

}

.button1{
    
    border-radius: 8px;
}
.button3 {border-radius: 8px;}
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
</head>

<body>
<ul class="topnav">
  <li><a  href="Exam.php">Home</a></li>
  <li><a class="active" href="result.php">           Result           </a></li>
  <li><a href="signup.php">Register    </a></li>
  <li><a href="login.php">            Login            </a></li>
   <li class="right">   <?php if ($_SESSION['username']) { ?>
                        <a href="examination.php">Exam</a> </li>
                       <?php } else { ?>
                       <a href="About.php">About</a> </li>
                      <?php } ?>
</ul>

<div class="title" style=" padding-right: 20px; " ><h2>SELECT THE SUBJECT </h2></div>

<div class="containernew" style="opacity: 0.6;background:#012851;">
<a href="resultmode1.php"><button class="button button1" style="margin-left:60px;">JAVA</button></a>
<a href="resultmode2.php"><button class="button button3">WEB</button></a>
<a href="resultmode3.php"><button class="button button3">DBMS</button></a>

</div>





</body>
</html>
