<?php 
ob_start();
session_start();
require_once('includes/connect.inc');
?>
<?php 
   if(isset($_POST['login'])) { 
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $remember = isset($_POST['remember']);

   if($remember) {
       setcookie($email, $password, time() + (3600 * 30), "/"); //one hour
       if(count($_COOKIE) > 0) {
           echo '<script>alert("Cookies are active.")</script>';
         } else {
           echo '<script>alert("Cookies Deactivated.")</script>';
         }
   }
   
   $user_query ="SELECT * FROM register where email ='$email' AND password ='$password'";
   $query= mysqli_query($conn, $user_query);
   $count = mysqli_num_rows($query);
   if($count > 0)
   {
       while ($row = mysqli_fetch_assoc($query)) {
          $_SESSION['logged_in']=$row['user_ID'];
          echo "<script type='text/javascript'> document.location = 'diary.php'; </script>";
       }
   } 
   else{
     echo "<script>alert('Invalid Login!');</script>";
   }
}
?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Diary</title>
    <link rel="icon" href="img/logo.png" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="./css/login.css" />
</head>

<body>
    <div class="logo">
        <img src="img/logo.png" alt="Logo" />
    </div>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <div class="center">
                    <br>
                    <span class="title">LOG IN</span>
                </div>
                <form action="" method="post" autocomplete="off">
                    <div class="textbeforeform">
                        <span class="text">Email</span>
                    </div>
                    <div class="input-field">
                        <input id="username" type="text" placeholder="example@gmail.com" name ="email" required />
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="textbeforeform">
                        <span class="text">Password</span>
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" class="password" placeholder="password" name="password" required />
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck" name="remember"/>
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input class="log-sub" type="submit" value="LOG IN" id="submit" name="login" />
                    </div>
                </form>
                <div class="login-signup">
                    <a href="register.php" class="signup">Create New Account</a><br />
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const container = document.querySelector(".container"),
        pwShowHide = document.querySelectorAll(".showHidePw"),
        pwFields = document.querySelectorAll(".password");

    //to show/hide password and change icon
    pwShowHide.forEach((eyeIcon) => {
        eyeIcon.addEventListener("click", () => {
            pwFields.forEach((pwField) => {
                if (pwField.type === "password") {
                    pwField.type = "text";

                    pwShowHide.forEach((icon) => {
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    });
                } else {
                    pwField.type = "password";
                    
                    pwShowHide.forEach((icon) => {
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    });
                }
            });
        });
    });
</script>


</html>