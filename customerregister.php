<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>EATLK</title>
    <link rel="stylesheet" type="text/css" href="customerprofile.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="customerregister.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label class="registerfont">Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label class="registerfont">Fullname</label>
            <input type="text" name="fullname" value="<?php echo $fullname; ?>">
        </div>
        <div class="input-group">
            <label class="registerfont">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label class="registerfont">Phone Number</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>">
        </div>
        <div class="input-group">
            <label class="registerfont">Address</label>
            <input type="text" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="input-group">
            <label class="registerfont">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label class="registerfont">Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_customer">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>

</html>