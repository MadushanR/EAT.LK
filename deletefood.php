<?php 
//delete food
session_start();
$con=mysqli_connect("localhost", "root", "", "eatlk");
 $id=$_GET['id'];
if(isset($_SESSION['username']))
{
$q=mysqli_query($con,"SELECT * FROM foods where id='$id'");
$res=mysqli_fetch_assoc($q);
$pic=$res['image'];
$un=$res['restaurantname'];
unlink("images/restaurant/$un/food/$pic");
if(mysqli_query($con,"delete from foods where id='$id' "))
{
	
	

    header( "location:viewfood.php" );
 

	
}
else
{
	echo "failed to delete";
}
}
else
{
	header("location:restauranthomepage.php");
}
?>