<?php
    $server ='localhost';
    $username = 'root';
    $password = '';
    $daset = 'jobs';
    
    $conn = mysqli_connect($server, $username, $password, $daset)
    or
    die('Connection failed'.$conn);
?>