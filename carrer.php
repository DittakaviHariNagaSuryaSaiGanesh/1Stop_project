<!doctype html>
<html>
    <head>
        <title>carrer</title>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <div class="content">
            <h1>Job Portal</h1>
            <small>Best Jobs matching Your Skills</small>
        </div>
        <?php
            include 'config.php';
            $query = "SELECT * FROM `jobs`";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result))
            {
        ?>
                <div class="card" style="width: 25rem; height: 15rem; margin: 3rem; float: left;box-shadow: 1px 1px 8px black">
                    <h4 style="background-color: blueviolet; color: white; border-radius: 5px; text-align: center;text-transform: uppercase;"><?php echo $row['comname']; ?></h4>
                    <div class="card-body" style="padding: 10px;">
                        <p class="card-text" style="padding-bottom: 10px;">
                            <h6>one opening</h6>
                            <h5><b>Role: </b><?php echo $row['position']; ?></h5>
                            <h5><b>CTC: </b><?php echo $row['ctc']; ?></h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Apply</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New Job</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="config_carrer.php">
                                                <div class="form-group">
                                                    <label class="col-form-label">Name:</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Applying For:</label>
                                                    <input type="text" class="form-control" name="role">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" name="mail">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Phone:</label>
                                                    <input type="number" class="form-control" name="phone">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Qualification:</label>
                                                    <input type="text" class="form-control" name="qual">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Year Of PassOut:</label>
                                                    <input type="text" class="form-control" name="yop">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="apply">Apply</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
        <?php
            }
        ?>
    </body>
</html>
