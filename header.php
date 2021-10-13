<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashbord</title>
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="stylle2.css">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <?php
            session_start();
            if(empty($_SESSION['test'])) 
            {
                header("Location: login.php");
            }
        ?>
    </head>
    <body>
        <div class="container">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <a class="navbar-brand" href="">
                    <img src="data:image/png;base64,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" alt="Logo" style="width:40px;">
                </a>
                <a class="navbar-brand" href="#">Admin Dashbord</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container" style="margin-left: 47rem">
                    <form method="POST" action="config_logout.php">
                        <button type="submit" class="btn-danger" name="logout">Logout</button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="sidenav">
            <div class="active">
                <a href="index.php">Jobs</a>
            </div>
            <a href="applicants.php">Candidates Applied</a>
            <a href="">Services</a>
            <a href="">Contact</a>
        </div>
</html>