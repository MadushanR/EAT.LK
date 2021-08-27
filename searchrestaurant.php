<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="dashboard">
        <div class="nav-cont">
            <div class="admin-nav">
                <ul>

                    <li>
                        <a href="adminrestaurantview.php">
                            <span class="material-icons">
                                restaurants
                            </span>
                            View Restaurants
                        </a>
                    </li>
                    <li>
                        <a href="admincustomerview.php">
                            <span class="material-icons">
                                person
                            </span>
                            View Customers
                        </a>
                    </li>
                    <li>

                        <a href="adminprofile.php">
                            <span class="material-icons">
                                face
                            </span>
                            View Profile

                        </a>
                    </li>
                    <li>

                        <a href="login.php?logout='1'">
                            <span class="material-icons">
                                backspace
                            </span>
                            LOGOUT

                        </a>
                    </li>


                </ul>

            </div>
        </div>
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <div class="space-content">
                    <div class="nav-space"></div>
                    <div class="content">

                        <?php 
 $db = mysqli_connect('localhost', 'root', '', 'eatlk');
  
 $errors = array(); 
 $search_restaurant = $_GET['search_restaurant']; 
 if (count($errors) == 0) { 
$query = "SELECT * FROM restaurants WHERE (`restaurant` LIKE '%".$search_restaurant."%')"; 
$results = mysqli_query($db, $query);?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="searchrestaurant.php" method="GET">
    <div class="searchBar">
        <input class="emailInput" name="search_restaurant" placeholder="Search Restaurants" type="text">
        <input type="submit" value="Search" class="buttons button--colored" name="search">
    </div>
    </form>

    <div class="container">
        <div class="resList">
            <h2>Restaurant List <small>Registered</small></h2>
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-4">Username/ Restaurant Name</div>
                    <div class="col col-4">Email</div>
                    <div class="col col-4">Address</div>
                    <div class="col col-4">Phone</div>
                    <div class="col col-4">Restaurant</div>
                    <div class="col col-4"></div>
                </li>
                <?php
        if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {?>
                <li class="table-row">
                    <div class="col col-4" data-label="Username"><?php echo $row['restaurantname']; ?></div>
                    <div class="col col-4" data-label="Email"><?php echo $row['email']; ?></div>
                    <div class="col col-4" data-label="Address"><?php echo $row['address']; ?></div>
                    <div class="col col-4" data-label="Address"><?php echo $row['phone']; ?></div>
                    <div class="col col-4" data-label="Address"><?php echo $row['restaurant']; ?></div>
                    <div class="col col-4 ">
                        <a href="deleterestaurantprofile.php?id=<?php echo $row['id'];?>" class="deleteBtn">DELETE</a>
                    </div>


                </li>
                <?php
            }
        }
    }
            ?>
            </ul>
        </div>

    </div>

</body>

</html>