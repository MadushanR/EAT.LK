<?php
$conn = mysql_connect('localhost', 'root', '', 'admin');
    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

<form method="post" action="output.php">
if(isset($_GET['username']))
{
    $username = $_GET['username'];
    $query = "SELECT * FROM admin WHERE username='$username' ";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) == 1) {
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?= $row['username']; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo  $row["email"]; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo  $row["address"]; ?>">
  	</div>
}
}
?>