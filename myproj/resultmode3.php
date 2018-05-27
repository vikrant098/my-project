<?php
session_start();
$_SESSION['questionmode']=3;
header("Location: resultshow.php");
?>