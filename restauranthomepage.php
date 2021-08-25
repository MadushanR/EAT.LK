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
                            <p><?php echo $row['restaurant'];?></p>
                            <img src="<?php echo 'images/restaurant/'.$restaurantname.'/logo/'.$row['rimage'];?>"
                                height="100px" width="150px">


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
                <div class="container">
                    <div class="col-md-12">
                        <div class="restheaderOut">
                            <div class="restHeader">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatibus natus
                                impedit
                                architecto. Laborum commodi, doloremque eligendi ea architecto veritatis soluta atque,
                                voluptatum cumque voluptatem quas minus debitis quaerat quasi.
                            </div>
                        </div>

                    </div>

                    <hr class="restLine">
                    <div class="foodSearch">

                    </div>

                </div>
                <div class="container">
                    <div class="cardRow">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="restCard">
                                    <div class="leftside">
                                        <div class="foodName">
                                            Burger
                                        </div>
                                        <div class="foodPrice">
                                            Price
                                        </div>
                                    </div>
                                    <div class="rightside">
                                        <div class="foodImage">
                                            <img src="./images/andy-chilton-0JFveX0c778-unsplash.jpg" alt="">
                                        </div>
                                        <div class="foodRemove">
                                            <button class="removeBtn">remove</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=" col-md-4 ">
                                <div class="restCard">
                                    <div class="leftside">
                                        <div class="foodName">
                                            Burger
                                        </div>
                                        <div class="foodPrice">
                                            Price
                                        </div>
                                    </div>
                                    <div class="rightside">
                                        <div class="foodImage">
                                            <img src="./images/andy-chilton-0JFveX0c778-unsplash.jpg" alt="">
                                        </div>
                                        <div class="foodRemove">
                                            <button class="removeBtn">remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-4 ">
                                <div class="restCard">
                                    <div class="leftside">
                                        <div class="foodName">
                                            Burger
                                        </div>
                                        <div class="foodPrice">
                                            Price
                                        </div>
                                    </div>
                                    <div class="rightside">
                                        <div class="foodImage">
                                            <img src="./images/andy-chilton-0JFveX0c778-unsplash.jpg" alt="">
                                        </div>
                                        <div class="foodRemove">
                                            <button class="removeBtn">remove</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=" col-md-4">
                                <div class="restCard">
                                    <div class="leftside">
                                        <div class="foodName">
                                            Burger
                                        </div>
                                        <div class="foodPrice">
                                            Price
                                        </div>
                                    </div>
                                    <div class="rightside">
                                        <div class="foodImage">
                                            <img src="./images/andy-chilton-0JFveX0c778-unsplash.jpg" alt="">
                                        </div>
                                        <div class="foodRemove">
                                            <button class="removeBtn">remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</body>

</html>