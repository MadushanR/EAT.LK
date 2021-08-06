<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>EAT.LK</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- <div class="header">
        <h2>Admin Login</h2>
    </div>

    <form method="post" action="adminlogin.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_admin">Login</button>
        </div>

    </form> -->

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
                </form>
            </div>

        </div>
    </div>
</body>

</html>