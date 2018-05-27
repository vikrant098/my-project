<?php
session_start();
$_SESSION['questionmode']=1;
header("Location: questions.php");
?>