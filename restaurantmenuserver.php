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
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $fimage=$_FILES['foodpic']['name'];



 $query = "INSERT INTO foods (restaurantname,foodname,cost,description,image,type) 
                  VALUES('$username','$foodname', '$cost','$description','$fimage','$type')";
        mysqli_query($db, $query);
        mkdir("images/restaurant/$username/food");
        move_uploaded_file($_FILES['foodpic']['tmp_name'],"images/restaurant/$username/food/".$_FILES['foodpic']['name']);

        $_SESSION['username'] = $username;
        header('location: restauranthomepage.php');
    }
    if (isset($_POST['back'])) {
            header('location: restauranthomepage.php');
        }
         
     
?>


