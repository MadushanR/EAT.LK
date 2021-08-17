<?php
session_start();
$hostname="localhost";
$user_name="root";
$password="";
$db="eatlk";
$con=mysqli_connect($hostname,$user_name,$password,$db);
$username = mysqli_real_escape_string($con, $_SESSION['username']);
extract($_REQUEST);
if(isset($_SESSION['username']))
{
if(!empty($_GET['id']))
{
	$food_id=$_GET['id'];
	$query=mysqli_query($con,"select * from foods where id='$id'");
if(mysqli_num_rows($query))
{   
	
     $row=mysqli_fetch_array($query);
     $rfoodname=$row['foodname'];
     $rdescription=$row['description'];	
     $rcost=$row['cost'];	
     $rtype=$row['type'];	
	 
   
}
else
{
	header("location:viewfood.php");
}	
}
else
{
		header("location:viewfood.php");	
}
}
else
{
	header("location:login.php");
}
//update food
if(isset($update))
{
	
	$oldpic=$row['image'];	
	$newpic=$_FILES['image']['name'];
   if(!empty($_SESSION['username']))	
   {

	              if(mysqli_query($con,"update  foods  set foodname='$food_name',description='$description',cost='$cost',type='$type',image='$newpic' where id='$id'"))
	   
	                {
						unlink("images/restaurant/$username/food/$oldpic");
						move_uploaded_file($_FILES['image']['tmp_name'],"images/restaurant/$username/food/".$_FILES['image']['name']);
						header("location:viewfood.php");
	                 }
	              else{
		               echo "failed";
	                  }		 
		 }
   }

if(isset($logout))
{
	session_destroy();
	header("location:login.php");
}
if (isset($_POST['back'])) {
       header('location: viewfood.php');
   
 }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="customerprofile.css">
</head>
<body>
<br><br>
<div class="header">
  	<h2>Update Food</h2>
  </div>
                        <form action="" method="post" enctype="multipart/form-data">
                                     <div class="input-group">
  	                              <label>Food Name</label>
  	                               <input type="text" name="food_name"   value="<?php if(isset($rfoodname)) { echo $rfoodname;}?>">
  	                               </div>
						
	  <div class="input-group">
  	  <label>Description</label>
  	  <input type="text"  name="description" value="<?php if(isset($rdescription)) { echo $rdescription;}?>">
  	</div>
  	<div class="input-group">
  	  <label>Cost</label>
  	  <input type="text" name="cost"  value="<?php if(isset($rcost)) { echo $rcost;}?>">
  	</div>
	 
  	  <label>Type</label><br>
		<label for="contact_email">Vegetarian</label>
  	  <input type="radio" name="type" <?php if (isset($type) && $type=="Vegetarian") echo "checked";?> value="Vegetarian" >
		<label for="contact_phone">Non-Vegetarian</label>
 	  <input type="radio" name="type"<?php if (isset($type) && $type=="Non-Vegetarian") echo "checked";?> value="Non-Vegetarian">
	  
  
	  <div class="input-group">
  	  <label>Food Image</label>
		<input type="file" accept="image/*"  name="image">
	  </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="update">Update Food</button>
	  <button type="submit" class="btn" name="back">Back</button>
  	</div>
									
                               </form>      	 

</body>
</html>