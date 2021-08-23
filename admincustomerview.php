<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Homepage</title>
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
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
        <div class="space-content">
            <div class="nav-space"></div>
            <div class="content">
                <?php 
$username = "root"; 
$password = ""; 
$database = "eatlk"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM customers";


echo '<table width="100%"> 
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
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field1name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
            </div>
        </div>
    </div>


    <div class="container">
        <h2>Customer List <small>Registered</small></h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-2">Username</div>
                <div class="col col-2">Full Name</div>
                <div class="col col-2">Email</div>
                <div class="col col-2">Phone</div>
                <div class="col col-2">Address</div>
            </li>
            <li class="table-row">
                <div class="col col-2" data-label="Username">42235</div>
                <div class="col col-2" data-label="Full Name">John Doe</div>
                <div class="col col-2" data-label="Email">$350</div>
                <div class="col col-2" data-label="Phone">Pending</div>
                <div class="col col-2" data-label="Address">Pending</div>
            </li>
            <li class="table-row">
                <div class="col col-2" data-label="Username">42235</div>
                <div class="col col-2" data-label="Full Name">John Doe</div>
                <div class="col col-2" data-label="Email">$350</div>
                <div class="col col-2" data-label="Phone">Pending</div>
                <div class="col col-2" data-label="Address">Pending</div>
            </li>
            <li class="table-row">
                <div class="col col-2" data-label="Username">42235</div>
                <div class="col col-2" data-label="Full Name">John Doe</div>
                <div class="col col-2" data-label="Email">$350</div>
                <div class="col col-2" data-label="Phone">Pending</div>
                <div class="col col-2" data-label="Address">Pending</div>
            </li>
            <li class="table-row">
                <div class="col col-2" data-label="Username">42235</div>
                <div class="col col-2" data-label="Full Name">John Doe</div>
                <div class="col col-2" data-label="Email">$350</div>
                <div class="col col-2" data-label="Phone">Pending</div>
                <div class="col col-2" data-label="Address">Pending</div>
            </li>
        </ul>
    </div>
</body>


</html>