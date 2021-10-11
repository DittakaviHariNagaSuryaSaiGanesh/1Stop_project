<?php
    include 'config.php';
    session_start();
    if(isset($_POST['login']))
    {
        $mail = $_POST['email'];
        $psw = $_POST['psw'];   
        
        $sql = "SELECT * FROM user WHERE Email='$mail' AND Password='$psw'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            $_SESSION['test'] = $row['Email'];
            header("location:index.php");   
     
        }

        else
        {
            echo "<script>
                    alert('Invalid Credentials');
                    window.location.replace('login.php');
                </script>";
        }
    }
?>