<!doctype html>
<html>
    <head>
        <title>carrer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <div class="card" style="width: 25rem; height: 15rem; margin: 3rem; float: left;
                     box-shadow: 1px 1px 8px black">
                        <h4 style="background-color: blueviolet; color: white; border-radius: 5px; text-align: center;text-transform: uppercase;"><?php echo $row['comname']; ?></h4>
                        <div class="card-body" style="padding: 10px;">
                            <p class="card-text" style="padding-bottom: 10px;">
                                <h6>one opening</h6>
                                <h5><b>Role: </b><?php echo $row['position']; ?></h5>
                                <h5><b>CTC: </b><?php echo $row['ctc']; ?></h5>
                                <button type="submit" class="btn-primary">Apply</button>
                            </p>
                        </div>
                </div>
        <?php
            }
        ?>
        
        
    </body>
</html>
