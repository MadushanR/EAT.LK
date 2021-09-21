<?php 
//delete food
session_start();
$con=mysqli_connect("localhost", "root", "", "eatlk");
 $id=$_GET['id'];
if(isset($_SESSION['username']))
{
if(mysqli_query($con,"delete from orders where id='$id' "))
{
    header( "location:orders.php" );
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