<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin DashBoard</title>
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
                        <h3>
                            <a>Dashboard</a>
                        </h3>
                    </li>
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


                </ul>
                <button>
                    <span class="material-icons">
                        backspace
                    </span>
                    LOGOUT
                </button>
            </div>
        </div>
        <div class="space-content">
            <div class="nav-space"></div>
            <div class="content">

            </div>
        </div>
    </div>
</body>

</html>