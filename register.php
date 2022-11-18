<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Diary</title>
    <link rel="icon" href="Logo.png" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="register.css" />
</head>

<body>
    <div class="logo">
        <img src="img/logo.png" alt="logo">
    </div>
    <div class="container">
        <div class="forms">
            <div class="form registration">
                <div class="center">
                    <br>
                    <span class="title">Registration Form</span>
                </div>
                <form action="#">
                  
                    <div class="input-field">
                        <input id="username" type="text" placeholder="Username" required />
                        <i class="uil uil-user icon"></i>
                    </div>

                    <div class="input-field">
                        <input id="username" type="text" placeholder="Name@gmail.com" required />
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="input-field">
                        <input id="password" type="Password" class="Password" placeholder="Password" required />
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                   

                    <div class="input-field button">
                        <input class="signup-sub" type="button" onclick=" validate()" value="SIGN UP" id="submit" />
                    </div>
                </form>
                <div class="signup-login">
                    <span class="text">LOG IN</span><br />
                </div>
            </div>
        </div>
    </div>
</body>


<!-- session_start();
include('includes/config.php');
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn,"Select * from RegistrationForm where email = '$email'") or die(mysqli_error());
    $count = mysqli_num_rows($query);

    if ($count > 0){ ?>
        <script>
        alert('Data Already Exist');
       </script>
      
    }else{
mysqli_query($conn,"INSERT INTO RegistratinForm(name, email, password) VALUES ('$name','$email','$password') ") or die(mysqli_error()); ?>
<script>alert('Records Successfully Added');</script>;
<script>
    window.location = "register.php";
    </script>
}
} -->

