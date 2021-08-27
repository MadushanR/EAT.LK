<?php 
//delete food
session_start();
$con=mysqli_connect("localhost", "root", "", "eatlk");
 $id=$_GET['id'];
if(isset($_SESSION['username']))
{
$q=mysqli_query($con,"SELECT * FROM restaurants where id='$id'");
$res=mysqli_fetch_assoc($q);
$pic=$res['rimage'];
$un=$res['restaurantname'];
unlink("images/restaurant/$un/logo/$pic");
if(mysqli_query($con,"delete from restaurants where id='$id' "))
{
	
	

    header( "location:adminrestaurantview.php" );
 

	
}
else
{
	echo "failed to delete";
}
}
else
{
	header("location:adminhomepage.php");
}
?>