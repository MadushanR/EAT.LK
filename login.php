<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="login">
            <div class="login_form">
                <div class="logo">
                    <img src="./images/logo_transparent.png" alt="eatlklogo">
                </div>
                <div class="header">
                    LOGIN
                </div>
                <form method="post" action="login.php">
                    <?php include('errors.php'); ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" />
                    </div>
                    <button class="loginBtn" type="submit" name="login_user">Login</button>
                    <button class="loginBtn" type="submit" name="back">Back to Home</button>
                </form>
            </div>
            <div class="createAc">
                New to EAT.LK? <a href="registertype.php">CREATE AN ACCOUNT</a>
            </div>
            <div class="adminlogin">
                <a href="adminlogin.php">Admin Login</a>
            </div>
        </div>
    </div>
</body>

</html>