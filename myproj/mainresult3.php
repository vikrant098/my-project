
 <?php 

session_start();
$mode=$_SESSION['questionmode'];
$currentusn=$_SESSION['resultusn2'];
$cn = mysqli_connect('localhost','root','');
if (!$cn) {
    echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'exam')) {
    echo 'Database not selected';
}

 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="resultstyle.css" >
<style>

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
  padding: 15px;
}

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
  
   
</div>

<div class="title"><h1> RESULT! </h1></div>
<div class="containernew" style="padding-left: 20px;">


 
<table style="width: 70%;margin-top: 10px;margin-bottom: 10px;margin-left: 100px;">
  <tr>
    <th>Subject</th>
    <th>Name</th>
    <th>USN</th> 
    <th>MARKS</th>
  </tr>
<?php

$sql2 = "SELECT * FROM resultmarks where mode='$mode' and usn='$currentusn' and marks>15";
$result = mysqli_query($cn, $sql2);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {

          
          switch ($row['mode']) {
            case 1:
                $subject="java";
                break;
            case 2:
                $subject="web";
                break;
            case 3:
                $subject="dbms";
                break;
            
          }

           echo "<tr>"."<td>".$subject."</td>"."<td>".$row['name']."</td>"."<td>".$row['usn']."</td>"."<td>".$row['marks']."</td>"."</tr>";
        
            
           

    }
} else {
    echo "0 results";
}


  ?>


</table>


</div>


</body>
</html>
