<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
    <head>
        <title>welcome</title>
    </head>
    <body>  
    <p>welcome</p>
<p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
<p> <a href="out.php?logout='1'" style="color: red;">view profiles</a> </p>
    </body>
</html>
