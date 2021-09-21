<?php session_start();?>
<html>

<body>

    <head>
        <link rel="stylesheet" href="viewfood.css">
    </head>
    <table border="1" bordercolor="#F0F0F0" cellpadding="20px">
        <th>Food Name</th>
        <th>Customer Name</th>
        <th>Quantity</th>
        <?php
					  $mysqli = new mysqli("localhost", "root", "", "eatlk"); 
                      $restaurantname = mysqli_real_escape_string($mysqli, $_SESSION['username']);
                      $query = "SELECT * FROM orders where restaurantname='$restaurantname'";
                      if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {
							 ?>
        <tr>
            <td><?php  echo $row['foodname']."<br>";?></td>
            <td><?php  echo $row['username']."<br>";?></td>
            <td><?php  echo $row['quantity']."<br>";?></td>
            <td>
                <a href="deleteorder.php?id=<?php echo $row['id'];?>"><button class="viewBtn" type="button"
                        class="btn btn-warning">Dispatch</button></a>
            </td>
        </tr>
        <?php 
						 }
                        }
					  ?>
    </table>
    <br>
    <a href="restauranthomepage.php"><button type="submit" class="backBtn">Back</button></a>
</body>

</html>