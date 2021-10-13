<?php
    include 'config.php';
    $name = $_POST['name'];
    $role = $_POST['role'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $qual = $_POST['qual'];
    $yop = $_POST['yop'];
    
    $sql = "INSERT INTO `applicants`(`Name`, `Roal`, `Email`, `Phone`, `Qualification`, `YOP`) "
            . "VALUES ('$name','$role','$mail','$phone','$qual','$yop')";
    $result = mysqli_query($conn, $sql);
    header('Location: carrer.php');
?>