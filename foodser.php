<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'eatlk');
$errors = array(); 

if (isset($_POST['add'])) {
    
    if(!empty($_POST["quantity"])) {
        $query = "SELECT * FROM foods WHERE foodname='" . $_GET["foodname"] . "'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {
        $itemArray = array($row[0]["foodname"]=>array('foodname'=>$row[0]["foodname"], 'cost'=>$row[0]["cost"], 'quantity'=>$_POST["quantity"],'image'=>$row[0]["image"]));			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($results[0]["foodname"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($results[0]["foodname"] == $k) {
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
    }
    }
}

if (isset($_POST['remove'])) {
    if(!empty($_SESSION["cart_item"])) {
        foreach($_SESSION["cart_item"] as $k => $v) {
                if($_GET["foodname"] == $k)
                    unset($_SESSION["cart_item"][$k]);				
                if(empty($_SESSION["cart_item"]))
                    unset($_SESSION["cart_item"]);
        }
    }
}

if (isset($_POST['empty'])) {
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
</div>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>
<a id="btnEmpty" href="customerviewfood.php?action=empty">Empty Cart</a>
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
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["cost"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="customerviewfood.php?action=remove&foodname=<?php echo $item["foodname"]; ?>" class="btnRemoveAction"><img src="images\icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["cost"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
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
</div>


    <div class="container">
        <div class="card-section">
            <div class="row">
            <?php
            $restaurantname=$_GET['restaurantname'];
    if (count($errors) == 0) {
      
    $query = "SELECT * FROM foods where  restaurantname='$restaurantname'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {?>
                <div class="col-4">
                <form method="post" action="customerviewfood.php">
                    <div class="res-card">
                        <div class="image-section">
                        <img src="<?php echo 'images/restaurant/'.$restaurantname.'/food/'.$row['image'];?>">
                        </div>
                        <div class="detail-section">
                            <div class="res-name"><?php echo $row['foodname'];?></div>
                            <div class="res-name"><?php echo $row['cost'];?></div>
                        </div>
                        <div class="container">

                        </div>
                        <div class="card-bottom">
                        <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><a href="customerviewfood.php?foodname=<?php echo $row['foodname'];?>"><input type="submit" value="Add to Cart" class="btnAddAction" /></a></div>
                            </a>
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