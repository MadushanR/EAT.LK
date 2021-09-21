<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>EAT.LK</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    

    <div class="main">
        <div class="login">
            <div class="login_form">
                <div class="logo">
                    <img src="./images/logo_transparent.png" alt="eatlklogo">
                </div>
                <div class="header">
                    ADMIN LOGIN
                </div>
                <form method="post" action="adminlogin.php">
                    <?php include('errors.php'); ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" />
                    </div>

                    <button class="loginBtn" type="submit" name="login_admin">LOGIN</button>
                    <button class="loginBtn" type="submit" name="back">Back to Home</button>

                </form>
            </div>

        </div>
    </div>
</body>

</html>