<?php
    if(isset($_POST['login']))
        { 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $remember = isset($_POST['remember']);
        if($remember) {
            setcookie($email, $password, time() + (3600 * 30), "/"); //one hour
            if(count($_COOKIE) > 0) {
                echo '<script>alert("Cookies are active.")</script>';
              } else {
                echo '<script>alert("Cookies Deactivated.")</script>';
              }
        }

        header("Location: https://geragacv.github.io/");
        exit();
        
        require "valuesource.php";
        if($email == $signedemail && $password == $signedpassword) {

        }else if($email != $signedemail && $password == $signedpassword) {
          echo '<script>alert("We could not find an account with that email address")</script>';
        }else if($email == $signedemail && $password != $signedpassword) {
          echo '<script>alert("Incorrect Password")</script>';
        }else {
          echo '<script>alert("No existing account")</script>';
        }
}?>