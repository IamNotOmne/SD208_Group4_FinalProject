<?php
    if(isset($_POST['signup']))
    { 
        $signedusername = $_POST['username'];
        $signedemail = $_POST['email'];
        $signedpassword = $_POST['password'];

        header("Location: login.php");
        exit();

        function signup($signedusername,$signedemail,$signedpassword) {
            return $signedusername;
            return $signedemail;
            return $signedpassword;
        }
    }
?>