<?php session_start();?>
<html>

<body>

    <head>
        <link rel="stylesheet" href="viewfood.css">
    </head>
    <table border="1" bordercolor="#F0F0F0" cellpadding="20px">
        <th>Restaurant Name</th>
        <th>Food Name</th>
        <th>Date</th>
        

        <?php
					  $mysqli = new mysqli("localhost", "root", "", "eatlk"); 
                      $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);
                      $query = "SELECT * FROM pastorders where customername='$username'";
                      if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {
							 ?>
        <tr>
            <td><?php  echo $row['restaurantname']."<br>";?></td>
                    width="150px"></td>
            <td><?php  echo $row['foodname']."<br>";?></td>
            <td><?php  echo $row['date']."<br>";?></td>

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
    <a href="customerhomepage.php"><button type="submit" class="backBtn">Back</button></a>
</body>

</html>