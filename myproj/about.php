<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>About</title>
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

#outer
    {
      background-repeat: no-repeat;
      background-size: cover;
      height: 595px;
      
      margin: 0px auto;
      border:1px solid;
      background-image: url("firstpageim.jpg");
    }
.button {
    background-color: #1B711E; /* Green */
    border: none;
    color: white;
    margin-left: 30px;
    padding: 15px;
    padding-right: 20px;
    padding-left: 20px;
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
body {margin: 0;}

</style>
<body>
<ul class="topnav">
  <li><a href="Exam.php">Home</a></li>
  <li><a  href="result.php">           Result           </a></li>
  <li><a href="signup.php">Register   </a></li>
  <li><a href="login.php">            Login            </a></li>
  <li class="right"><a class="active" href="about.php">About</a></li>
</ul>


  <div class="container" style="margin-top: 100px;opacity: 0.8;">
 <div class="left2" ></div>
 <div class="right">
 <h2>Online Examination Project<br><br>Name:Rahul Kumar<br><br>USN-1JB15IS084<br><br>Give FeedBack:</h2>

 <a href="feedback.php" style="margin-left: 40px;"><button class="button button3">FeedBack</button></a>
</div>
 </div> 



</body>
</html>