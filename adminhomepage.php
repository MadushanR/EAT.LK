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
 

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
		<p> <a href="viewprofile.php" style="color: red;">view profiles</a> </p>
		<p> <a href="verifyprofile.php" style="color: red;">verify profiles</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>