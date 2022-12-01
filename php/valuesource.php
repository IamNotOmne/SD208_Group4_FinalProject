<?php
        ob_start();
        session_start();

        require_once('connect.inc');

        if(!isset($_POST['logged_in']) && !isset($_SESSION['username'])
        && empty($_SESSION['username'])) {
            session_unset();
            // header("Refresh: 0.5; url=register.php");
        }

        if(isset($_POST['submit'])){
            $Uname = $_POST['username'];
            $e_mail = $_POST['email'];
            $pass = $_POST['password'];

            $passMD5 = md5($pass);
            $insert_to_register_table_query = "insert into register (username,email,password) values ('$Uname','$e_mail','$passMD5')";
            mysqli_query($conn,$insert_to_register_table_query) or die ("cannot connect to user_info_table");
            $message = "<p>Account created!</p>";
            header("Location: login.php");

        } else {
            echo '<script>alert("Login failed.")</script>';
        }
    ?>