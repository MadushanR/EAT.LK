

<form method="post" action="output.php">
  
  	<div class="input-group">
  	  <label>Fullname</label>
  	  <input type="text" name="fullname" value="<?php echo $row["username"]; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo  $row["email"]; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo  $row["address"]; ?>">
  	</div>
  