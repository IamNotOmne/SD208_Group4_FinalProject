<?php
    if(isset($_POST['login']))
        { 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $remember = isset($_POST['remember']);
        if($remember) {
            setcookie($email, $password, time() + (3600 * 30), "/"); //one hour
            if(count($_COOKIE) > 0) {
                echo "Cookies are enabled.";
              } else {
                echo "Cookies are disabled.";
              }
        }
}?>