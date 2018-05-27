<?php 

session_start();
if(isset($_POST['name'])&& isset($_POST['feedback'])){
$cn = mysqli_connect('localhost','root','');
if (!$cn) {
    echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'exam')) {
    echo 'Database not selected';
}

$name=$_POST['name'];
$feedback=$_POST['feedback'];
$sql="INSERT INTO feedback VALUES ('$name','$feedback')";
$result = mysqli_query($cn, $sql) or
  die(mysqli_error($cn));
}
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

 
    #form
    {
      height: 450px;
      width: 400px;
      opacity: 0.9;
      
      margin-left: 500px;
     
    }
    .a
    {
      
      height: 40px;
      width: 400px;
      margin-top: 25px;
      margin-left: 45px;
      border-radius: 10px;
  }
    .b
    {
      border-radius: 10px;
      height: 100px;
      width: 400px;
      margin-top: 25px;
      margin-left: 45px;
    }
    .c
    {

      
      height: 40px;
      width: 200px;
      margin-top: 25px;
      margin-left: 130px;
      border-radius: 10px;

    }
</style>
</head>
<body>

<div class="navbar">
  <a href="Exam.php">Home</a>
  
  
</div>

<div class="title"><h1> FEEDBACK! </h1></div>


  <div id="form">
    <form method="POST" action="feedback.php">
      
      <input class="a" type="text" name="name" placeholder=" Enter Name"/>
      <input class="b" type="text" name="feedback" placeholder=" Enter feedback"/>
      
      <br>
     <input class="c" type="submit" value=" FEEDBACK "  />
    </form>
  </div>




</div>


</body>
</html>
