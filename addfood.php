<?php include('restaurantmenuserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>EATLK</title>
  <link rel="stylesheet" type="text/css" href="customerprofile.css">
</head>
<body>


  <form method="post" action="addfood.php">
  	<div class="input-group">
  	  <label>Food Name</label>
  	  <input type="text" name="foodname" value="<?php echo $foodname; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Description</label>
  	  <input type="text" name="description" value="<?php echo $description; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Cost</label>
  	  <input type="text" name="cost" value="<?php echo $cost; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="addfood">Add Food</button>
	  <button type="submit" class="btn" name="back"><a href="restauranthomepage.php"> Back</a></button>
  	</div>
  </form>
</body>
</html>