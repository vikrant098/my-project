<?php
session_start();
$_SESSION['questionmode']=2;
header("Location: resultshow.php");
?>