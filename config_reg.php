<?php
    include 'config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $psw = $_POST['psw'];
    $conpsw = $_POST['conpsw'];
 
    if($psw != $conpsw)
    {
        echo '<script>alert("Password Missmatch")</script>';
    }

    else
    {
        $sql = "INSERT INTO `user`(`Name`, `Email`, `Phone Number`, `Password`) "
          . "VALUES ('$name','$email','$phone','$psw')";

        $result = mysqli_query($conn, $sql);
        echo "<script>
            alert('Successfully Registered');
            window.location.replace('reg.php');
            </script>";

    //        die(mysqli_error($conn));
    }
?>
