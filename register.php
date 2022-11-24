<!DOCTYPE html>
<?php include './php/valuesource.php';?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Diary</title>
    <link rel="icon" href="./img/logo.png" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="./css/register.css" />
</head>

<body>
    <div class="logo">
        <img src="./img/logo.png" alt="Logo" />
    </div>
    <div class="container">
        <div class="forms">
            <div class="form registration">
                <div class="center">
                    <br>
                    <span class="title">Registration Form</span>
                </div>
                <form action="register.php" method="post">
                  
                    <div class="input-field">
                        <input id="username" type="text" placeholder="Username" name="username" required/>
                        <i class="uil uil-user icon"></i>
                    </div>

                    <div class="input-field">
                        <input id="username" type="text" placeholder="Name@gmail.com" name="email" required/>
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="input-field">
                        <input id="password" type="Password" class="Password" placeholder="Password" name="password" required/>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                   

                    <div class="input-field button">
                        <input class="signup-sub" type="submit" value="SIGN UP" name="signup" id="submit"/>
                    </div>
                </form>
                

                <div class="signup-login">
                    <a href="login.php" class="text">Already have an Account?</a><br />
                </div>
            </div>
        </div>
    </div>
</body>

