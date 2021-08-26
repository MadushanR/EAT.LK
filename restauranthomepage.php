<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
                            <p class="resName"><?php echo $row['restaurant'];?></p>
                            <img src="<?php echo 'images/restaurant/'.$restaurantname.'/logo/'.$row['rimage'];?>"
                                height="100px" width="150px">



                        </li>
                        <li>
                            <form action="restaurantprofile.php" method="POST">
                                <a href="restaurantprofile.php" class="navIconn">Profile</a>
                            </form>

                        </li>
                        <li>
                            <form action="viewfood.php" method="POST">
                                <a href="viewfood.php" class="navIconn">View Foods</a>
                            </form>

                        </li>
                        <li>
                            <a href="addfood.php" class="navIconn">Add Food</a>
                        </li>
                        <li>
                            <a href="login.php" class="navIconn">Logout</a>
                        </li>

                    </ul>

            </div>

        </div>
        <div class="space-content">
            <div class="nav-space"></div>
            <div class="content">
                <div class="container">
                    <div class="col-md-12">
                        <div class="restheaderOut">
                            <div class="restHeader">
                                <?php echo $row['description'];?>
                            </div>
                        </div>
                        <hr class="restLine">
                        <div class="foodSearch">

                        </div>
                    </div>



                </div>
                <div class="container">
                    <div class="cardRow">
                        <div class="row">
                            <?php
    $db = mysqli_connect('localhost', 'root', '', 'eatlk');
  
    $errors = array(); 
   
    if (count($errors) == 0) {
        
    $query = "SELECT * FROM foods where  restaurantname='$restaurantname'";
        $results = mysqli_query($db, $query);?>
                            <?php
        if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {?>
                            <div class="col-md-4 ">
                                <div class="restCard">
                                    <div class="leftside">
                                        <div class="foodName">
                                            <?php echo $row['foodname']; ?>
                                        </div>
                                        <div class="foodPrice">
                                            <?php echo $row['cost'];?>
                                        </div>
                                    </div>
                                    <div class="rightside">
                                        <div class="foodImage">
                                            <img
                                                src="<?php echo 'images/restaurant/'.$restaurantname.'/food/'.$row['image'];?>">
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <?php
            }
        }
    }
            ?>

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</body>

</html>
<?php
$rimage="";
                        }
                    }?>