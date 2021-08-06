<?php session_start();
$errors = array(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>EATLK</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">

    </div>
    <form method="post" action="customerprofile.php">
        <?php
$db = mysqli_connect('localhost', 'root', '', 'eatlk');
    $username = mysqli_real_escape_string($db, $_SESSION['username']);
    if (count($errors) == 0) {
  $query = "SELECT * FROM customers WHERE username='$username'";
        $results = mysqli_query($db, $query);?>
        <?php
        if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {?>
        <!-- <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>">
        </div>
        <div class="input-group">
            <label>Fullname</label>
            <input type="fullname" name="fullname" value="<?= $row['fullname'];?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?= $row['email']; ?>">
        </div>
        <div class="input-group">
            <label>Phone Number</label>
            <input type="text" name="phone" value="<?= $row['phone']; ?>">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="address" value="<?= $row['address'];?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div> -->

        <div class="add-client">
            <div class="form">
                <form class="main_form">
                    <h1>View Client</h1>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input name="username" value="<?php echo $_SESSION['username']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="fullname" value="<?= $row['fullname'];?>">

                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input placeholder="Address" value="<?= $row['address'];?>">

                    </div>


                    <button name="save" class="main_button">Save</button>

                    <button name="delete" class="main_button">Delete</button>
                </form>
            </div>
        </div>
        <?php
	  
if (isset($_POST['save'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($password)) { array_push($errors, "Password is required"); }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM customers WHERE username='$username' OR email='$email' LIMIT 1";
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
  
        $query = "UPDATE customers SET username ='$username',fullname = '$fullname', email = '$email',phone = '$phone',address = '$address', password = '$password'
         WHERE username = '$username'";
        mysqli_query($db, $query);
        header('location: customerhomepage.php');
    }
  }
  if (isset($_POST['delete'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_SESSION['username']);  
        $query = "DELETE FROM customers where username = '$username'";
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