<?php session_start();?>
<html>
<body>
<?php 
$mysqli = new mysqli("localhost", "root", "", "eatlk"); 
$restaurantname = mysqli_real_escape_string($mysqli, $_SESSION['username']);
$query = "SELECT * FROM foods where restaurantname='$restaurantname'";


echo '<table border="1" cellspacing="2" cellpadding="2" width="100%"> 
      <tr> 
          <td> <font face="Arial">Food Name</font></td> 
          <td> <font face="Arial">Cost</font> </td> 

      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["foodname"];
        $field2name = $row["cost"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 

              </tr>';
    }
    $result->free();
} 
?>

</body>
<a href="restauranthomepage.php"><button type="submit">Back</button></a>
</html>