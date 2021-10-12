<?php include 'header.php'?>
<div class="main">
    <div class="container">                
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                 Post Job
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form method="post" action="data.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="cname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="pos">
                    </div>

                    <div class="form-group">
                        <label for="jobdis">Job Discription</label>
                        <textarea type="text" class="form-control" id="jobdis" rows="10" name="jobdis"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="ctc">CTC</label>
                        <input type="text" class="form-control" id="ctc" name="ctc">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
                $sql = "SELECT * FROM `jobs`";
                $my_result = mysqli_query($conn, $sql);
                
                while($data = mysqli_fetch_assoc($my_result))
                {
            ?>
                    <tr>
                        <td>
                            <?php echo $data['id']; ?>
                        </td>
                        <td>
                            <?php echo $data['comname']; ?>
                        </td>
                        <td>
                            <?php echo $data['position']; ?>
                        </td>
                        <td>
                            <?php echo $data['ctc']; ?>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <?php mysqli_close($conn); ?>
 </div>
<!--</body>
</html>-->