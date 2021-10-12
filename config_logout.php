<?php
    session_start();
    unset($_SESSION['test']);
    header('Location: login.php');
?>