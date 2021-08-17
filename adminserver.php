<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'eatlk');
$errors = array(); 
if (isset($_POST['save'])) {
  //update customer profile
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $user_check_query = "SELECT * FROM admins WHERE username='$username'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { 
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
    }    
        $password = md5($password);
        $query = "UPDATE admins SET username ='$username', password = '$password'
         WHERE username = '$username'";
        mysqli_query($db, $query);
        header('location: adminhomepage.php');
  }

  if (isset($_POST['back'])) {
    //takes customer to homepage
           header('location: adminhomepage.php');    
     }

  ?>