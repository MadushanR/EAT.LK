<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>EATLK</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="restaurantregister.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Restaurant Name ( This will be used as username so add restaurant location and Restaurant at the end; ex : KFCUnionPlaceRestaurant )</label>
  	  <input type="username" name="username" value="<?php echo $fullname; ?>">
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
  	  <button type="submit" class="btn" name="reg_restaurant">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>