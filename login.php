<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <?php
            session_start();
            if(!empty($_SESSION['test'])) 
            {
                header("Location: index.php");
            }
        ?>
    </head>
    <body>
        <div class="container">
            <form method="post" action="config_login.php">
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="psw" required>
                </div>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
                <p style="text-align: center">
                    New User? 
                    <br>
                    Create Account <a href="reg.php">Sign Up</a>
                </p>
            </form>
        </div>
    </body>
</html>