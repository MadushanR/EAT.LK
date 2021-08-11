<?php include('customerserver.php') ?>
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
  <form method="post" action="customerprofile.php">
  <?php
    $username = mysqli_real_escape_string($db, $_SESSION['username']);
    if (count($errors) == 0) {
    $query = "SELECT * FROM customers WHERE username='$username'";
        $results = mysqli_query($db, $query);?>
        <?php
        if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {?>
  	<div class="input-group">
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
  	</div>
      <button name="save" class="btn btn-primary">Save</button>
	  
      <button name="delete" class="btn btn-primary">Delete</button>
	 <button name="back" class="btn btn-primary"><a href="customerhomepage.php">Back</a></button>
            <?php
            }
        }
    }
            ?>
  </form>
</body>
</html>