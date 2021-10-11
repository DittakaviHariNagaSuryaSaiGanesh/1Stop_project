<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style@480.css">
        <link rel="stylesheet" href="style@360.css">
        <link rel="stylesheet" href="style@1024.css">
    </head>
    <body>
        <div class="container" id="background">
            <form method="post" action="config_reg.php">
                <div class="form-group">
                    <label for="exampleInputName">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Your Full Name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputNumber">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputNumber" placeholder="Enter Your Phone Number" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="psw" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword2">Conform Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Conform Password" name="conpsw" required>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                <p>
                    <br>
                    Already Registered? <a href="login.php">Login</a>
                </p>
            </form>
        </div>
    </body>
</html>
