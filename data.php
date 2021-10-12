<?php
    include 'config.php';
    if (isset($_POST['submit']))
    {
        $cname = $_POST['cname'];
        $pos = $_POST['pos'];
        $jobdis = $_POST['jobdis'];
        $ctc = $_POST['ctc'];

        $query = "INSERT INTO `jobs`(`comname`, `position`, `jobdis`, `ctc`) "
                . "VALUES ('$cname','$pos','$jobdis','$ctc')";
        $result = mysqli_query($conn, $query);
    }
    header('Location: index.php');
?>
