<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <div class="dashboard">
        <div class="nav-cont">
            <div class="admin-nav">
                <ul>

                    <li>
                        <a href="adminrestaurantview.php">
                            <span class="material-icons">
                                restaurants
                            </span>
                            View Restaurants
                        </a>
                    </li>
                    <li>
                        <a href="admincustomerview.php">
                            <span class="material-icons">
                                person
                            </span>
                            View Customers
                        </a>
                    </li>
                    <li>

                        <a href="adminprofile.php">
                            <span class="material-icons">
                                face
                            </span>
                            View Profile

                        </a>
                    </li>
                    <li>

                        <a href="login.php?logout='1'">
                            <span class="material-icons">
                                backspace
                            </span>
                            LOGOUT

                        </a>
                    </li>


                </ul>

            </div>
        </div>
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <div class="space-content">
                    <div class="nav-space"></div>
                    <div class="content">

                        <?php 
$username = "root"; 
$password = ""; 
$database = "eatlk"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM restaurants";


echo '<table width="100%"> 
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
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <h2>Restaurant List <small>Registered</small></h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-4">Username/ Restaurant Name</div>
                <div class="col col-4">Email</div>
                <div class="col col-4">Address</div>
            </li>
            <li class="table-row">
                <div class="col col-4" data-label="Username">42235</div>
                <div class="col col-4" data-label="Email">John Doe</div>
                <div class="col col-4" data-label="Address">$350</div>

            </li>
            <li class="table-row">
                <div class="col col-4" data-label="Username">42235</div>
                <div class="col col-4" data-label="Email">John Doe</div>
                <div class="col col-4" data-label="Address">$350</div>

            </li>
            <li class="table-row">
                <div class="col col-4" data-label="Username">42235</div>
                <div class="col col-4" data-label="Email">John Doe</div>
                <div class="col col-4" data-label="Address">$350</div>

            </li>
            <li class="table-row">
                <div class="col col-4" data-label="Username">42235</div>
                <div class="col col-4" data-label="Email">John Doe</div>
                <div class="col col-4" data-label="Address">$350</div>

            </li>
        </ul>
    </div>

</body>

</html>