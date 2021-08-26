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
 $db = mysqli_connect('localhost', 'root', '', 'eatlk');
  
 $errors = array(); 

 if (count($errors) == 0) { 
    $query = "SELECT * FROM customers";
    $results = mysqli_query($db, $query);?>



            </div>
        </div>
    </div>
    <div class="searchBar">
        <input class="emailInput" placeholder="Search Customers" type="text">
        <a class="buttons button--colored ">
            SEARCH
        </a>
    </div>

    <div class="container">
        <div class="customerList">
            <h2>Customer List <small>Registered</small></h2>
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-2">UserName</div>
                    <div class="col col-2">Full Name</div>
                    <div class="col col-2">Email</div>
                    <div class="col col-2">Phone</div>
                    <div class="col col-2">Address</div>
                </li>
                <?php
            if (mysqli_num_rows($results)> 0) {
            foreach($results as $row)
            {?>
                <li class="table-row">
                    <div class="col col-2" data-label="Username"><?php echo $row['username']; ?></div>
                    <div class="col col-2" data-label="Address"><?php echo $row['fullname']; ?></div>
                    <div class="col col-2" data-label="Full Name"><?php echo $row['email']; ?>e</div>
                    <div class="col col-2" data-label="Email"><?php echo $row['phone']; ?></div>
                    <div class="col col-2" data-label="Phone"><?php echo $row['address']; ?></div>
                </li>
                <?php
            }
        }
    }
            ?>
            </ul>
        </div>

    </div>
</body>


</html>