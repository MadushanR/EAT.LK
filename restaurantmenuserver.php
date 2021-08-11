<?php
session_start();
$foodname="";
$cost="";
$description="";
$db = mysqli_connect('localhost', 'root', '', 'eatlk');
$username = mysqli_real_escape_string($db, $_SESSION['username']);
  
if (isset($_POST['addfood'])) {
    // receive all input values from the form
    $foodname = mysqli_real_escape_string($db, $_POST['foodname']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $cost = mysqli_real_escape_string($db, $_POST['cost']);

 $query = "INSERT INTO foods (restaurantname,foodname,cost,description) 
                  VALUES('$username','$foodname', '$cost','$description')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        header('location: restauranthomepage.php');
    }
     
?>


