<?php include('updatefoodserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>EATLK</title>
  <link rel="stylesheet" type="text/css" href="customerprofile.css">
</head>
<body>
	<br><br>
<div class="header">
  	<h2>Update Food</h2>
  </div>
  <form method="post" action="updatefood.php" enctype="multipart/form-data">
 <?php extract($_REQUEST);
if(isset($_SESSION['username']))
{
if(!empty($_GET['id']))
{
	$query=mysqli_query($con,"select * from foods where id='$id'");
if(mysqli_num_rows($query))
{   $row=mysqli_fetch_array($query);
?>
  
	  <div class="input-group">
  	  <label>Description</label>
  	  <input type="text" name="description" value="<?php if(isset($rdescription)) { echo $rdescription;}?>">
  	</div>
  	<div class="input-group">
  	  <label>Cost</label>
  	  <input type="text" name="cost"  value="<?php if(isset($rcost)) { echo $rcost;}?>">
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
  	  <button type="submit" class="btn" name="update">Update Food</button>
	  <button type="submit" class="btn" name="back">Back</button>
  	</div>
      <?php
            }
        }
    }
            ?>
  </form>
</body>
</html>
  	</div>
  </form>
</body>
</html>