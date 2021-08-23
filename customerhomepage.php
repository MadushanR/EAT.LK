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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

    <div class="Header">
        <div class="navbar">
            <div class="logo">
                <img src="./images/logo_transparent.png" alt="logoeatlk">
            </div>
            <div class="topnav" id="myTopnav">
                <a href="customerprofile.php" class="active">VIEW PROFILE</a>
                <a href="#news">ABOUT US</a>
                <a href="#contact">CONTACT US</a>
                <a href="login.php?logout='1'">LOGOUT</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

        </div>
        <div class="mainBanner">
            The best platform to discover nearby restaurants
        </div>


    </div>




    <div class="container">
        <div class="card-section">
            <div class="row">
                <?php
    $db = mysqli_connect('localhost', 'root', '', 'eatlk');
    $errors = array(); 
   if (count($errors) == 0) {
   $query = "SELECT * FROM restaurants";
       $results = mysqli_query($db, $query);?>
                <?php
        if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {
    $restaurantname = $row['restaurantname'];
    ?>
                <div class="col-md-4 col-sm-4">
                    <div class="res-card">
                        <div class="image-section">
                            <img src="<?php echo 'images/restaurant/'.$restaurantname.'/logo/'.$row['rimage'];?>">
                        </div>
                        <div class="detail-section">
                            <div class="res-name"><?php echo $row['restaurant'];?></div>
                        </div>
                        <div class="container">

                        </div>
                        <div class="card-bottom">

                            <a href="customerviewfood.php?restaurantname=<?php echo $row['restaurantname'];?>"
                                class="cust-button fullWidthNoBorderOrange">


                                VIEW MENU
                            </a>
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




    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>
</body>

</html>