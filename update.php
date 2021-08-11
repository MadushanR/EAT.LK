<?php
session_start();
$hostname="localhost";
$user_name="root";
$password="";
$db="eatlk";
$con=mysqli_connect($hostname,$user_name,$password,$db);

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
   if(!empty($_SESSION['username']))	
   {

	              if(mysqli_query($con,"update  foods  set foodname='$food_name',description='$description',cost='$cost' where id='$id'"))
	   
	                {
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="customerprofile.css">
</head>
<body>



                        <form action="" method="post" >
                                     <div class="form-group"><!--food_name-->
                                     <label for="food_name">Food Name:</label>
                                            <input type="text" class="form-control" id="food_name" value="<?php if(isset($rfoodname)) { echo $rfoodname;}?>" placeholder="Enter Food Name" name="food_name" required>
                                     </div>
									 
                                     <div class="form-group"><!--cost-->
                                            <label for="description">Description :</label>
                                            <input type="text" class="form-control" id="description"  value="<?php if(isset($rdescription)) { echo $rdescription;}?>" placeholder="Enter Description" name="description" required>
                                     </div>

                                     <div class="form-group"><!--cost-->
                                            <label for="cost">Cost :</label>
                                            <input type="number" class="form-control" id="cost"  value="<?php if(isset($rcost)) { echo $rcost;}?>" placeholder="10000" name="cost" required>
                                     </div>
                                    

                                    <button type="submit" name="update" class="btn btn-primary">Update Item</button>
                                    <button type="submit" name="back" class="btn btn-primary"><a href="restauranthomepage.php"> Back</button></a>
									<br>
									
                               </form>      	 

</body>
</html>