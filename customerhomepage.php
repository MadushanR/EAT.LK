<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
            </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <!-- <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
        <form action="customerprofile.php" method="POST">
            <p> <a href="customerprofile.php" style="color: red;">profile</a> </p>
        </form>
        <?php endif ?> -->
    </div>
    <div class="Header">
        <div class="navbar">
            <div class="logo">
                <img src="./images/logo_transparent.png" alt="logoeatlk">
            </div>
            <div class="navmenu">
                <a>
                    <span>ABOUT US</span>
                </a>
                <a>
                    <span>CONTACT US</span>
                </a>
                <a href="login.php">
                    <span>SIGN IN</span>
                </a>
                <a href="customerprofile.php" method="POST">
                    <span>VIEW PROFILE</span>
                </a>
                <a href="login.php?logout='1'">
                    <span>LOGOUT</span>
                </a>
            </div>
            <!-- <div class="userImg">
                <img src="../../assets/images/dfsfsfs.png" alt="">
            </div> -->
        </div>
        <div class="mainBanner">
            The best platform to discover nearby restaurants
        </div>
    </div>
    <div class="container">
        <div class="card-section">
            <div class="row">
                <div class="col-4">
                    <div class="res-card">
                        <div class="image-section">
                            <img src="./images/istockphoto-1083487948-612x612.jpg" alt="Snow" />
                        </div>
                        <div class="detail-section">
                            <div class="res-name"> Pizza Hut</div>
                            <div class="res-description">
                                The best pizza delivery place in town
                            </div>
                        </div>
                        <div class="container">

                        </div>
                        <div class="card-bottom">
                            <a class="cust-button fullWidthNoBorderOrange">
                                VIEW MENU
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="res-card">
                        <div class="image-section">
                            <img src="./images/chinese dragon.jpg" alt="Snow" />
                        </div>
                        <div class="detail-section">
                            <div class="res-name"> Chinese Dragon</div>
                            <div class="res-description">
                                Chinese Dragon Cafe have been the pioneer of Authentic Chinese Food in Colombo since
                                1942. With a heritage of 76 years, you're bound to have a truly great Chinese
                                Experience.
                            </div>
                        </div>
                        <div class="container">

                        </div>
                        <div class="card-bottom">
                            <a class="cust-button fullWidthNoBorderOrange">
                                VIEW MENU
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="res-card">
                        <div class="image-section">
                            <img src="./images/burger king.png" alt="Snow" />
                        </div>
                        <div class="detail-section">
                            <div class="res-name"> Burger King</div>
                            <div class="res-description">
                                Discover our menu and order delivery or pick up from a
                                Burger King near you.
                            </div>
                        </div>
                        <div class="container">

                        </div>
                        <div class="card-bottom">
                            <a class="cust-button fullWidthNoBorderOrange">
                                VIEW MENU
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <img src="../../assets/images/logo_transparent.png" alt="">
                </div>
                <div class="col-md-4">
                    <div class="footer__itemSection">
                        <div class="footer__itemTitle">
                            Restaurants
                        </div>
                        <div class="footer__itemDes">
                            <a href="">In our platform you get to find all the your favorite restaurants in one
                                place</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer__itemSection">
                        <div class="footer__itemTitle">
                            Customers
                        </div>
                        <div class="footer__itemDes">
                            <a href="">We satisfy our customer to best of our abilities</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer__itemSection">
                        <div class="footer__itemTitle">
                            About Us
                        </div>
                        <div class="footer__itemDes">
                            <a href="">Get to know about us our journery about EAT.LK</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom row">
                <hr>
                <div class="footer__bottomRight col-md-12">
                    © 2021 Copyright EAT.LK • All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
</body>

</html>