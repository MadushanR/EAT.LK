<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'eatlk');
$errors = array(); 


if (isset($_POST['add'])) {
    
    if(!empty($_POST["quantity"])) {
        $query = "SELECT * FROM foods WHERE foodname='" . $_GET["foodname"] . "'";
        $results = mysqli_query($db, $query);
        $itemArray = array($results[0]["foodname"]=>array('foodname'=>$results[0]["foodname"], 'cost'=>$results[0]["cost"], 'quantity'=>$_POST["quantity"],'image'=>$results[0]["image"]));			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($results[0]["foodname"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($results[0]["code"] == $k) {
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