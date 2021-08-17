<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'eatlk');
$errors = array(); 

if (isset($_POST['save'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $restaurant = mysqli_real_escape_string($db, $_POST['restaurant']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    
    $user_check_query = "SELECT * FROM restaurants WHERE restaurantname='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { 
      if ($user['restaurantname'] === $username) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
    } 
       
				$oldpic=$user['rimage'];
				$newpic=$_FILES['restaurantpic']['name'];

      
        $password = md5($password);
        $query = "UPDATE restaurants SET restaurantname ='$username',email = '$email',address = '$address', password = '$password', restaurant = '$restaurant', phone = '$phone', description = '$description', rimage = '$newpic'
        WHERE restaurantname = '$username'";
        mysqli_query($db, $query);
        unlink("images/restaurant/$username/logo/$oldpic");
        move_uploaded_file($_FILES['restaurantpic']['tmp_name'],"images/restaurant/$username/logo/".$_FILES['restaurantpic']['name']);
        header('location: restauranthomepage.php');
    
  }
  if (isset($_POST['delete'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_SESSION['username']);  
        $query = "DELETE FROM restaurants where restaurantname = '$username'";
        mysqli_query($db, $query);
        header('location: login.php');
    
  }
  if (isset($_POST['back'])) {
        header('location: restauranthomepage.php');
    
  }
	  ?>