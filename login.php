<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EAT.LK</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
    <body>
      <header>
      </header>
        <main>
            <form action="login.php" method="post">
			<?php include('errors.php'); ?>
                <div class="container">
                  <label for="Username"><b>Username</b></label>
				  <input type="text" name="username" >
              
                  <label for="psw"><b>Password</b></label>
                  <input type="password" name="password">
              
				  <button type="submit" class="btn" name="login_user">Login</button>
                 
				  
				   <p> New to EAT.LK? <a href="registertype.php"> Create an account</a></p>
				 
              </form>
            </main>
            
    </body>
    </html>