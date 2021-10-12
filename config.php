<?php
    $server ='localhost';
    $username = 'root';
    $password = '';
    $dataset = 'jobs';
    
    $conn = mysqli_connect($server, $username, $password, $dataset)
    or
    die('Connection failed'.$conn);
?>