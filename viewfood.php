<?php session_start();?>
<html>

<body>

    <head>
        <link rel="stylesheet" href="viewfood.css">
    </head>
    <form action="searchrestaurantfood.php" method="GET">
    <div class="searchBar">
        <input class="emailInput" name="search_food" placeholder="Enter Food" type="text">
        <input type="submit" value="Search" class="buttons button--colored" name="search">
    </div>
    </form>
    <table border="1" bordercolor="#F0F0F0" cellpadding="20px">
        <th>Food Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Cost</th>
        <th>Type</th>

        <?php
					  $mysqli = new mysqli("localhost", "root", "", "eatlk"); 
                      $restaurantname = mysqli_real_escape_string($mysqli, $_SESSION['username']);
                      $query = "SELECT * FROM foods where restaurantname='$restaurantname'";
                      if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {
							 ?>
        <tr>
            <td><?php  echo $row['foodname']."<br>";?></td>
            <td><img src="<?php echo 'images/restaurant/'.$restaurantname.'/food/'.$row['image'];?>" height="100px"
                    width="150px"></td>
            <td><?php  echo $row['description']."<br>";?></td>
            <td><?php  echo $row['cost']."<br>";?></td>
            <td><?php  echo $row['type']."<br>";?></td>
            <td>
                <a href="deletefood.php?id=<?php echo $row['id'];?>"><button class="viewBtn" type="button"
                        class="btn btn-warning">Delete</button></a>
            </td>
            <td>
                <a href="update.php?id=<?php echo $row['id'];?>"><button type="button"
                        class="viewBtn">Update</button></a>
            </td>
        </tr>
        <?php 
                    $foodname="";
                    $description="";
                    $cost="";
						 }
                        }
					  ?>
    </table>
    <br>
    <a href="restauranthomepage.php"><button type="submit" class="backBtn">Back</button></a>
</body>

</html>