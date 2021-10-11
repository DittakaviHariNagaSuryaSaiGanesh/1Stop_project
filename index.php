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
                        <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Company Name</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" >
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                              <label for="position">Position</label>
                              <input type="text" class="form-control" id="position">
                            </div>

                            <div class="form-group">
                              <label for="jobdis">Job Discription</label>
                              <textarea type="text" class="form-control" id="jobdis" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                              <label for="ctc">CTC</label>
                              <input type="text" class="form-control" id="ctc">
                            </div>

                            <button type="submit" class="btn btn-primary">Apply</button>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>TCS</td>
                        <td>Software Developer</td>
                        <td>8LPA</td>
                    </tr>
                    
                    <tr>
                        <th scope="row">2</th>
                        <td>GOOGLE</td>
                        <td>Web Developer</td>
                        <td>16LPA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>

