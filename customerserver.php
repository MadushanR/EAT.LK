<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'eatlk');
$errors = array(); 
if (isset($_POST['save'])) {
  //update customer profile
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $user_check_query = "SELECT * FROM customers WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { 
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
    }    
        $password = md5($password);
        $query = "UPDATE customers SET username ='$username',fullname = '$fullname', email = '$email',phone = '$phone',address = '$address', password = '$password'
         WHERE username = '$username'";
        mysqli_query($db, $query);
        header('location: customerhomepage.php');
  }
  if (isset($_POST['delete'])) {
    // delete customer profile
    $username = mysqli_real_escape_string($db, $_SESSION['username']);  
        $query = "DELETE FROM customers where username = '$username'";
        mysqli_query($db, $query);
        header('location: login.php');    
  }
	  ?>