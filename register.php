<!-- connect to database -->
<?php
    ob_start();
    session_start();
    require_once('includes/connect.inc');

?>
<?php

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $e_mail = $_POST['email'];
            $pass = md5($_POST['password']);

            $query = mysqli_query($conn,"select * from register where email = '$e_mail'")or die(mysqli_error($conn));
            $count = mysqli_num_rows($query);
        
            if ($count > 0){ ?>
             <script>
             alert('Data Already Exist');
            </script>
            <?php
              }else{
                mysqli_query($conn,"INSERT INTO register(fullName, email, password) VALUES('$name','$e_mail','$pass')           
                ") or die(mysqli_error($conn)); ?>
                <script>alert('Records Successfully  Added');</script>;
                <script>
                window.location = "login.php"; 
                </script>
                <?php   } ?>
          
               
             <?php } 

         else {
            echo "<script>alert('Register Failed')</script>";
        }

    ?>
<html>
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
                <form action="register.php" method="post">
                  
                    <div class="input-field">
                        <input name="name" type="text" placeholder="Name" required />
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="email" type="text" placeholder="Name@gmail.com" required />
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="password" type="password" class="password" placeholder="Password" required />
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <button type="submit" class="signup" name="submit" style=" border: none; color: #fff; font-size: 17px;
                    width: 100%; height:45px; font-weight: 500; letter-spacing: 1px; border-radius: 15px; background-color: black;
                    cursor: pointer; margin-top: 35px; transition: all 0.3s ease;">SIGN UP</button>

                </form>
                <div class="signup-login">
                    <a href="login.php" class="text">Already have an Account?</a><br/>
                </div>
            </div>
        </div>
    </div>

    <script>
    
        const container = document.querySelector(".container"),
        pwShowHide = document.querySelectorAll(".showHidePw"),
        pwFields = document.querySelectorAll(".password");

    //this is to show/hide password
    
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

</body>
</html>