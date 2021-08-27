<?php 
//delete food
session_start();
$con=mysqli_connect("localhost", "root", "", "eatlk");
 $id=$_GET['id'];
if(isset($_SESSION['username']))
{
$q=mysqli_query($con,"SELECT * FROM customers where id='$id'");
$res=mysqli_fetch_assoc($q);

if(mysqli_query($con,"delete from customers where id='$id' "))
{
	
	

    header( "location:admincustomerview.php" );
 

	
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