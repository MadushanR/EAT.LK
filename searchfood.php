<?php session_start(); 
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM foods WHERE foodname='" . $_GET["foodname"] . "'");
			$itemArray = array($productByCode[0]["foodname"]=>array('foodname'=>$productByCode[0]["foodname"], 'cost'=>$productByCode[0]["cost"], 'quantity'=>$_POST["quantity"],'image'=>$productByCode[0]["image"]));			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["foodname"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["foodname"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["foodname"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
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
                <a href="customerhomepage.php" class="active">BACK</a>
                <a href="customerprofile.php" class="active">VIEW PROFILE</a>
                <a href="aboutus.php">ABOUT US</a>
                <a href="mailto:eatlk@gmail.com">CONTACT US</a>
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

    <form action="searchfood.php" method="GET">
    <div class="searchBar">
        <input class="emailInput"  name="search_food" placeholder="Search Foods" type="text">
        <input type="submit" value="Search" class="buttons button--colored " name="search">
    </div>
    </form>
    </div>
    <div id="shopping-cart">
        <div class="txt-heading">Shopping Cart</div>

        <a class="emptyBtn" href="customerviewfood.php?action=empty&restaurantname=<?php echo $restaurantname ?>">Empty
            Cart</a>
        <?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th style="text-align:left;">Name</th>
                    <th style="text-align:right;" width="5%">Quantity</th>
                    <th style="text-align:right;" width="10%">Unit Price</th>
                    <th style="text-align:right;" width="10%">Price</th>
                    <th style="text-align:center;" width="5%">Remove</th>
                </tr>
                <?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["cost"];
		?>
                <tr>
                    <td><?php echo $item["foodname"]; ?></td>
                    <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                    <td style="text-align:right;"><?php echo "$ ".$item["cost"]; ?></td>
                    <td style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
                    <td style="text-align:center;"><a
                            href="customerviewfood.php?action=remove&foodname=<?php echo $item["foodname"];?>&restaurantname=<?php echo $restaurantname; ?>"
                            class="btnRemoveAction"><img src="images\icon-delete.png" alt="Remove Item" /></a></td>
                </tr>
                <?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["cost"]*$item["quantity"]);
		}
		?>

                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><?php echo $total_quantity; ?></td>
                    <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <?php
} else {
?>
        <div class="no-records">Your Cart is Empty</div>
        <?php 
}
?>
        <a href="checkout.php?total_price=<?php echo $total_price;?>" class="checkoutBtn">CHECKOUT</a>
    </div>

<br><br>
    <div class="container">
        <div class="card-section">
            <div class="row">
                <?php
    $db = mysqli_connect('localhost', 'root', '', 'eatlk');
  
    $errors = array(); 
    $search_food = $_GET['search_food']; 
    if (count($errors) == 0) {
        
    $query = "SELECT * FROM foods where foodname like'%$search_food%'";
        $results = mysqli_query($db, $query);?>
                <?php
        if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {?>
                <div class="col-md-3">
                    <form method="post"
                        action="customerviewfood.php?action=add&foodname=<?php echo $row['foodname']; ?>&restaurantname=<?php echo $row['restaurantname']; ?>">
                        <div class="res-cardd">
                            <div class="image-section">
                                <img src="<?php echo 'images/restaurant/'.$restaurantname.'/food/'.$row['image'];?>">
                            </div>
                            <div class="detail-section">
                                <div class="res-namee"><?php echo $row['foodname'];?></div>
                                <div class="res-namee"><?php echo $row['cost'];?></div>
                            </div>
                            <div class="container">

                            </div>
                            <div class="card-bottomm">
                                <div class="cart-action"><input type="text" class="product-quantity" name="quantity"
                                        value="1" size="2" /><input type="submit" value="Add to Cart"
                                        class="btnAddAction" /></div>

                            </div>
                    </form>
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
</body>

</html>