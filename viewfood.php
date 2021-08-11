<?php session_start();?>
<html>
<body>
<table border="1" bordercolor="#F0F0F0" cellpadding="20px">
			 <th>Food Name</th>
             <th>Description</th>
			 <th>Cost</th>
			 <th>Delete Item</th>
			 <th>Update item Details</th>
			   <?php
					  $mysqli = new mysqli("localhost", "root", "", "eatlk"); 
                      $restaurantname = mysqli_real_escape_string($mysqli, $_SESSION['username']);
                      $query = "SELECT * FROM foods where restaurantname='$restaurantname'";
                      if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {
							 ?>
			     <tr>
				<td align="center" style="width:150px;"><?php  echo $row['foodname']."<br>";?></td>
                <td align="center" style="width:150px;"><?php  echo $row['description']."<br>";?></td>	
				<td align="center" style="width:150px;"><?php  echo $row['cost']."<br>";?></td>				
				<td align="center" style="width:150px;">
				<a href="deletefood.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-warning">Delete</button></a>
				</td>
				<td align="center" style="width:150px;">
				<a href="update.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger">Update</button></a>
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
</body>
<a href="restauranthomepage.php"><button type="submit">Back</button></a>
</html>