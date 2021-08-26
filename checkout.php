<?php
session_start();
$total_price=$_GET['total_price'];
$delivery=$total_price*'10/100';
$totalprice=$total_price+$delivery;
if (isset($_POST['order'])) {
    unset($_SESSION["cart_item"]);
}
?>
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
    <div class="Header">
        <div class="navbar">
            <div class="logo">
                <img src="./images/logo_transparent.png" alt="logoeatlk">
            </div>
            <div class="topnav" id="myTopnav">
                <a href="customerprofile.php" class="active">VIEW PROFILE</a>
                <a href="aboutus.php">ABOUT US</a>
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
    </div>
    <div class="container">
        <form method="post" action="#">
            <div class="row">


                <div class="col-12">
                    <div class="cart-totals margin-b-20">
                        <div class="cart-totals-title">
                            <h4>Cart Summary</h4>
                        </div>
                        <div class="cart-totals-fields">

                            <table class="table">
                                <tbody>



                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td> <?php echo "$".$total_price; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping & Handling</td>
                                        <td><?php echo "$".$delivery;?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-color"><strong>Total</strong></td>
                                        <td class="text-color"><strong> <?php echo "$".$totalprice; ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--cart summary-->
                    <div class="payment-option">
                        <label class="custom-control custom-radio  m-b-20">
                            <input checked value="COD" type="radio">Payment on delivery <br>
                            <input class="emptyBtn" type="submit" onclick="return confirm('Are you sure?');"
                                value="Order now" name="order">
                    </div>

                </div>
            </div>
        </form>
    </div>



    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <img src="./images/logo_transparent.png" alt="">
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