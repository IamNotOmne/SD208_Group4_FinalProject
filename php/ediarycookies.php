<?php
    ob_start();
    session_start();
    require_once('connect.inc');

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

        $passwordMD5 = md5($password);
        $user_query = "select password from register where email = '$email'";
        $result_query = mysqli_query($conn, $user_query) or die("Cannot connect to Table");
        if(mysqli_num_rows($result_query) == 1){
            $dbpassword = mysqli_fetch_row($result_query)[0];
            if($dbpassword == $passwordMD5){
                $_SESSION['email'] = $email;
                $_SESSION['timeout'] = time();
                $_SESSION['logged_in'] = true;
                header("Location: https://youtu.be/nr2CsEtXxmI");
                
            }else{
                echo '<script>alert("Login failed. Wrong username or password")</script>';
            }
        } else{
          echo '<script>alert("Login failed. Wrong username or password")</script>';
        }
}
?>