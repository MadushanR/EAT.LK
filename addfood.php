<?php include('restaurantmenuserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>EATLK</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
	
  <form method="post" action="addfood.php">
  	<div class="input-group">
  	  <label>Food Name</label>
  	  <input type="text" name="foodname" value="<?php echo $foodname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Cost</label>
  	  <input type="username" name="cost" value="<?php echo $cost; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="addfood">Add Food</button>
  	</div>
  </form>
</body>
</html>