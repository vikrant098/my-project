<?php

    session_start();
    $mode=$_SESSION['questionmode'];
    $currentusn=$_SESSION['usn'];
    $currentname=$_SESSION['username'];

$cn = mysqli_connect('localhost','root','');
if (!$cn) {
    echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'exam')) {
    echo 'Database not selected';
}


if (isset($_POST['1'])) {
$q1=$_POST['1'];    
}
if (isset($_POST['2'])) {
$q2=$_POST['2'];    
}
if (isset($_POST['3'])) {
$q3=$_POST['3'];    
}
if (isset($_POST['4'])) {
$q4=$_POST['4'];    
}
if (isset($_POST['5'])) {
$q5=$_POST['5'];    
}
if (isset($_POST['6'])) {
$q6=$_POST['6'];    
}
if (isset($_POST['7'])) {
$q7=$_POST['7'];    
}if (isset($_POST['8'])) {
$q8=$_POST['8'];    
}
if (isset($_POST['9'])) {
$q9=$_POST['9'];    
}
if (isset($_POST['10'])) {
$q10=$_POST['10'];    
}

//echo $q1."  ".$q2."  ".$q3."  ".$q4."  ".$q5."  ".$q6."  ".$q7."  ".$q8."  ".$q9."  ".$q10."  ".$mode;


$sql = "SELECT correctans FROM questions where mode='".$mode."'";
$result = mysqli_query($cn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
 
    $count=0;
    $correctanswers = array("a","a","a","a","a","a","a","a","a","a");
    while($row = mysqli_fetch_assoc($result)) {
$correctanswers[$count]="".$row['correctans'];
//echo "<br>".$correctanswers[$count];
$count=$count+1;
}
}
$score=0;
if(isset($_POST['1'])){
    
    if ($correctanswers[0]==$q1) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}
if(isset($_POST['2'])){
    
    if ($correctanswers[1]==$q2) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}
if(isset($_POST['3'])){
    
    if ($correctanswers[2]==$q3) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}
if(isset($_POST['4'])){
    
    if ($correctanswers[3]==$q4) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}
if(isset($_POST['5'])){
    
    if ($correctanswers[4]==$q5) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}
if(isset($_POST['6'])){
    
    if ($correctanswers[5]==$q6) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}
if(isset($_POST['7'])){
    
    if ($correctanswers[6]==$q7) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}
if(isset($_POST['8'])){
    
    if ($correctanswers[7]==$q8) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}
if(isset($_POST['9'])){
    
    if ($correctanswers[8]==$q9) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}
if(isset($_POST['10'])){
    
    if ($correctanswers[9]==$q10) {
        $score=$score+4;
    }
    else
    {
        $score=$score-1;
    }

}



    $sql1 = "INSERT INTO resultmarks VALUES ('$mode', '$currentusn', '$currentname' , '$score')";
    $result = mysqli_query($cn, $sql1) or
    die(mysqli_error($cn));


//echo "<h1>".$score."</h1>";
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

<div class="title"><h1> RESULT </h1></div><br>
<div class="title"><h1> <?php echo $_SESSION['username']; ?> You Have Scored <?php echo $score?> Marks </h1></div>




</body>
</html>



