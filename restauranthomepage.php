<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title></title>
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="dashboard">
        <div class="nav-cont">
            <div class="admin-nav">
				
		<form action="restaurantprofile.php" method="POST">
                <ul>
                    <li>
                    <?php
					  $mysqli = new mysqli("localhost", "root", "", "eatlk"); 
                      $restaurantname = mysqli_real_escape_string($mysqli, $_SESSION['username']);
                      $query = "SELECT * FROM restaurants where restaurantname='$restaurantname'";
                      if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {
							 ?>    
                             <p><?php echo $row['restaurant'];?></p>         			
                <img src="<?php echo 'images/restaurant/'.$restaurantname.'/logo/'.$row['rimage'];?>" height="100px" width="150px">
                

<?php
$rimage="";
                        }
                    }?>
                    </li>
                    <li>
							<form action="restaurantprofile.php" method="POST">
							<p> <a href="restaurantprofile.php">Profile</a> </p>	
							</form>                        
                            
                    </li>
					<li>
							<form action="viewfood.php" method="POST">
							<p> <a href="viewfood.php">View Foods</a> </p>	
							</form>                        
                            
                    </li>
                    <li>
					<p> <a href="addfood.php">Add Food</a> </p>
                    </li>
					<li>
					<p> <a href="login.php">Logout</a> </p>
                    </li>

                </ul>
               
            </div>
            
        </div>
        <div class="space-content">
            <div class="nav-space"></div>
            <div class="content">

            </div>
        </div>
    </div>
</body>

</html>