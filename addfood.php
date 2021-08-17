<?php include('restaurantmenuserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>EATLK</title>
  <link rel="stylesheet" type="text/css" href="customerprofile.css">
</head>
<body>
	<br><br>
<div class="header">
  	<h2>Add Food</h2>
  </div>

  <form method="post" action="addfood.php" enctype="multipart/form-data">
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
	 
  	  <label>Type</label><br>
		<label for="contact_email">Vegetarian</label>
  	  <input type="radio" name="type" <?php if (isset($type) && $type=="Vegetarian") echo "checked";?> value="Vegetarian">
		<label for="contact_phone">Non-Vegetarian</label>
 	  <input type="radio" name="type"<?php if (isset($type) && $type=="Non-Vegetarian") echo "checked";?> value="Non-Vegetarian">
	  
  
	  <div class="input-group">
  	  <label>Food Image</label>
		<input type="file" accept="image/*" name="foodpic">
	  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="addfood">Add Food</button>
	  <button type="submit" class="btn" name="back">Back</button>
  	</div>
  </form>
</body>
</html>