<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "eatlk"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM customers";


echo '<table border="1" cellspacing="2" cellpadding="2" width="100%"> 
      <tr> 
          <td> <font face="Arial">Username</font></td> 
          <td> <font face="Arial">Full Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Phone</font> </td> 
          <td> <font face="Arial">Address</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field2name = $row["username"];
        $field3name = $row["fullname"];
        $field4name = $row["email"];
        $field5name = $row["phone"];
        $field1name = $row["address"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>

</body>
<a href="viewprofile.php"><button type="submit">Back</button></a>
</html>