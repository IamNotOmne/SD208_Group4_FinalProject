<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Diary</title>
    <link rel="icon" href="Logo.png" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="css/register.css" />
</head>

<body>
    <div class="logo">
        <img src="img/logo.png" alt="Logo" />
    </div>
    <div class="container">
        <div class="forms">
            <div class="form registration">
                <div class="center">
                    <br>
                    <span class="title">Registration Form</span>
                </div>
                <form action="registration_form.php" method="post">
                  
                    <div class="input-field">
                        <input id="username" type="text" placeholder="Username" required />
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input id="email" type="text" placeholder="Name@gmail.com" required />
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input id="password" type="Password" class="Password" placeholder="Password" required />
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                   
                    <div class="input-field button">
                        <input class="signup-sub" type="button" onclick ="validate()" value="SIGN UP" id="submit" />
                    </div>
                </form>
                <div class="signup-login">
                    <a href="./login form/login.php" class="text">Already have an Account?</a><br/>
                </div>
            </div>
        </div>
    </div>

    <?php
    // session_start();
    // include('connection.php');

    if(isset($_POST['SIGN UP'])) 
    {
    $uname = $_POST['username'];
    $e_mail = $_POST['email'];
    $signup = md5($_POST['password']);

    if ($count > 0 ) {
        
    }

   }
    ?>

</body>
</html>