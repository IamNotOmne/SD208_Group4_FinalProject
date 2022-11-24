<!DOCTYPE html>
<?php include './php/ediarycookies.php';?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Diary</title>
    <link rel="icon" href="Logo.png" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="./css/login.css" />
</head>

<body>
    <div class="logo">
        <img src="./img/Logo.png" alt="Logo" />
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