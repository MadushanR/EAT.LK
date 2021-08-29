<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="content">
        <!-- notification message -->


        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
        <p> <a href="viewprofile.php" style="color: red;">view profiles</a> </p>
        <p> <a href="verifyprofile.php" style="color: red;">verify profiles</a> </p>
        <?php endif ?>
    </div>

</body>

</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="admin.css">
        <title>Admin Homepage </title>
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css"
            rel="stylesheet">
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
                    <div class="container">
                        <div class="adminHeader">
                            WELCOME ADMIN <?php echo $_SESSION['username']; ?>
                        </div>
                        <div class="adminCard">
                        The Voyo company is one of Sri Lanka’s largest conglomerates. <br> 
                        The company diversified in restaurant chains and apparel manufacturing. <br>
                        This is the web application for their online food ordering system. <br>
                        As an admin you can view profiles and delete profiles in the system.
                        </div>
                    </div>

                </div>
    </body>

    </html>

</body>

</html>