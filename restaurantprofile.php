<?php session_start();
$errors = array(); ?> 
<!DOCTYPE html>
<html>
<head>
  <title>EATLK</title>
  <link rel="stylesheet" type="text/css" href="customerprofile.css">
</head>
<body>
  <div class="header">
  	<h2>Profile</h2>
  </div>
  <form method="post" action="restaurantprofile.php">
  <?php
$db = mysqli_connect('localhost', 'root', '', 'eatlk');
    $username = mysqli_real_escape_string($db, $_SESSION['username']);
    if (count($errors) == 0) {
  $query = "SELECT * FROM restaurants WHERE restaurantname='$username'";
        $results = mysqli_query($db, $query);?>
        <?php
        if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {?>
  	<div class="input-group">
  	  <label>Restaurant Name / Username</label>
  	  <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?= $row['email']; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?= $row['address'];?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
      <button name="save" class="btn btn-primary">Save</button>
	  
      <button name="delete" class="btn btn-primary">Delete</button>
      <button name="back" class="btn btn-primary"><a href="restauranthomepage.php">Back</a></button>
	  <?php
	  
if (isset($_POST['save'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($password)) { array_push($errors, "Password is required"); }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM restaurants WHERE restaurantname='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database
  
        $query = "UPDATE restaurants SET username ='$username',email = '$email',address = '$address', password = '$password'
         WHERE restaurantname = '$username'";
        mysqli_query($db, $query);
        header('location: restauranthomepage.php');
    }
  }
  if (isset($_POST['delete'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_SESSION['username']);  
        $query = "DELETE FROM restaurants where restaurantname = '$username'";
        mysqli_query($db, $query);
        header('location: login.php');
    
  }
	  ?>
            <?php
            }
        }
    }
            ?>
  </form>
</body>
</html>