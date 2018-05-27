<?php 

session_start();

$cn = mysqli_connect('localhost','root','');
if (!$cn) {
    echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'exam')) {
    echo 'Database not selected';
}

$mode=$_SESSION['questionmode'];


/*
$sql1="SELECT * FROM questions where qno=1 ";
$disp = mysqli_query($cn, $sql1) or
    die(mysqli_error($cn));
while($result = mysqli_fetch_array($disp,MYSQLI_ASSOC)){
echo $result['question'];
}
*/




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
    padding:19px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    
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

<div class="title"><h1> QUESTIONS! </h1></div>
<div class="containernew" style="padding-left: 20px;">

<form method="POST" action="result1.php">
 <?php
$sql2 = "SELECT qno, question, option1, option2, option3, option4,correctans FROM questions where mode='".$mode."'";
$result = mysqli_query($cn, $sql2);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<br>";
    
    
    while($row = mysqli_fetch_assoc($result)) {

        echo "<h3>".$row["qno"]. " ) " . $row["question"]."</h3>"."<br>"."<input type='radio' name='".$row['qno']."' value='op1' >". $row["option1"]."<input type='radio'  name='".$row['qno']."' value='op2' >". $row["option2"]."<input type='radio' name='".$row['qno']."' value='op3' >". $row["option3"]."<input type='radio'  name='".$row['qno']."' value='op4' >". $row["option4"]."<br><br><br>";
           
    }
} else {
    echo "0 results";
}

   ?>
   <center><input type="submit" class="button button1"> </center> 

 </form>


</div>


</body>
</html>
