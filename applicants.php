<?php
    include 'header.php';
?>
<!doctype html>
<html>
    <head>
        <title>Applicants</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="margin-left: 12.5rem; margin-top: 10px;">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roal</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">YOP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'config.php';
                        $sql = "SELECT * FROM `applicants`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result))
                        {
                    ?>   
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Roal']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Phone']; ?></td>
                            <td><?php echo $row['Qualification']; ?></td>
                            <td><?php echo $row['YOP']; ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
