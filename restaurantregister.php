<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>EATLK</title>
  <link rel="stylesheet" type="text/css" href="customerprofile.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="restaurantregister.php" enctype="multipart/form-data">
  	<?php include('errors.php'); ?>
	  <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Restaurant Name </label>
  	  <input type="text" name="restaurant" value="<?php echo $restaurant; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Phone Number </label>
  	  <input type="number" name="phone" value="<?php echo $phonenumber; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	  <div class="input-group">
  	  <label>Description</label>
  	  <input type="text" name="description">
  	</div>
	  <div class="input-group">
  	  <label>Restaurant Image</label>
		<input type="file" accept="image/*" name="restaurantpic">
	  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_restaurant">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>