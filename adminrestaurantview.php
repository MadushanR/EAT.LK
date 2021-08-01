<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "eatlk"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM restaurants";


echo '<table border="1" cellspacing="2" cellpadding="2" width="100%"> 
      <tr> 
          <td> <font face="Arial">Username / Restaurant Name</font></td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Address</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["restaurantname"];
        $field2name = $row["email"];
        $field3name = $row["address"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>

</body>
<a href="viewprofile.php"><button type="submit">Back</button></a>
</html>