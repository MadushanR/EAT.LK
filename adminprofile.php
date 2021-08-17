<?php include('adminserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>EATLK</title>
  <link rel="stylesheet" type="text/css" href="customerprofile.css">
</head>
<br><br>
<body>
  <div class="header">
  	<h2>Profile</h2>
  </div>
  <form method="post" action="adminprofile.php">
  <?php
    $username = mysqli_real_escape_string($db, $_SESSION['username']);
    if (count($errors) == 0) {
    $query = "SELECT * FROM admins WHERE username='$username'";
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
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
     <button name="save" class="btn btn-primary">Save</button>
	 <button name="back" class="btn btn-primary">Back</button>
            <?php
            }
        }
    }
            ?>
  </form>
</body>
</html>