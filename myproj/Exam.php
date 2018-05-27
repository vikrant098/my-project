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
body {margin: 0;

}


.containerpehla
{

  opacity: 0.6;
  border-radius: 5px;
  width: 45%;
  height: 350px;
  background: url(quote.jpg);
  background-size: contain;
  margin-top: 50px;
  margin-left: 380px;
 
  box-shadow: 0 15px 40px rgba(0,0,0,.5);

}

#outer
    {
      padding-top: 100px;
      height: 100px;
      
      margin: 0px auto;
      margin-left: 50px;
      border:0px solid;
      
    }

    #form
    {
      width: 300px;
      opacity: 1;
      box-shadow: 0 15px 40px rgba(0,0,0,.5);
      margin-left: 500px;
      
    }

   

      .a
    {
      background-color: #59660E;
      box-shadow: 0 15px 40px rgba(0,0,0,.5);
      opacity: 0.7;
      color: white;
      height: 40px;
      width: 300px;
      
      
      border-radius: 10px;
    }


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
  <li><a class="active" href="Exam.php">Home</a></li>
  <li><a href="result.php">           Result           </a></li>
  <li><a href="signup.php">Register    </a></li>
  <li><a href="login.php">            Login            </a></li>
  <li class="right">   <?php if ($_SESSION['username']) { ?>
                        <a href="examination.php">Exam</a> </li>
                       <?php } else { ?>
                       <a href="About.php">About</a> </li>
                      <?php } ?>           
</ul>

<div class="containerpehla">
  
</div>
<div id="outer">
  <div id="form">
    <form>

      <a href="login.php"><input class="a" type="button" value="GET STARTED"></a>

    </form>   
  </div>
</div>
<?php /*
<table width="1100px" border="1" align="center">
  
  <tr>
    <td><img src="sharan.jpg"  style="width: 100%;"></td>
    <td><img src="sharan.jpg"  style="width: 100%;"></td>
    <td><img src="sharan.jpg"  style="width: 100%;"></td>
  </tr>
</table>
 */
 ?>




</body>
</html>
