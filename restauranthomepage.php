<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome Restaurant <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
		<form action="restaurantprofile.php" method="POST">
		<p> <a href="restaurantprofile.php" style="color: red;">profile</a> </p>	
		</form>
		<p> <a href="addfood.php" style="color: red;">Add Food</a> </p>
		<form action="viewfood.php" method="POST">
      <button type="submit" class="btn" name="viewfood">View Foods</button>
      </form> 
		<?php endif ?>
</body>
</html>