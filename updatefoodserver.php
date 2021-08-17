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
     $foodname = mysqli_real_escape_string($db, $_POST['foodname']);
     $description = mysqli_real_escape_string($db, $_POST['description']);
     $cost = mysqli_real_escape_string($db, $_POST['cost']);
     $type = mysqli_real_escape_string($db, $_POST['type']);
     $fimage=$_FILES['foodpic']['name'];

     $user_check_query = "SELECT * FROM foods WHERE id='$id'";
     $result = mysqli_query($db, $user_check_query);
     $user = mysqli_fetch_assoc($result);
     $oldpic=$user['image'];
   if(!empty($_SESSION['username']))	
   {

	              if(mysqli_query($con,"update  foods  set foodname='$foodname',description='$description',cost='$cost',type='$type',$image='fimage' where id='$id'"))
	   
	                {
                        unlink("images/restaurant/$username/food/$oldpic");
                        move_uploaded_file($_FILES['foodpic']['tmp_name'],"images/restaurant/$username/food/".$_FILES['foodpic']['name']);
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
       header('location: restauranthomepage.php');
   
 }
        ?>