<?php
include('config.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
    <title>E-Diary Management System</title>
    <script src="https://kit.fontawesome.com/0ec21bae43.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/diary.css">
</head>
<body>
    <section class="container">
        <header class="navHead">
            <div class="navbar-header">
                <a href="#" class="navbarName">
                    <img class="logo" src="img/logo.png" alt=""> E-Diary
                </a>
            </div>
            <!--Profile-->
            <div class="action">
                <div class="user">
                    
                </div>
            </div>
            <!--/Profile-->
        </header>
        <!-- Side Bar -->
        <aside class="wrapper">
            <div class="navigation">
                <div class="contentWrapper">
                    <h4 class="diaryName">Add Diary</h4>
                    <form method="POST">
                        <div class="formGroup">
                            <span class="spanForm"><label>Title</label></span>
                            <br>
                            <input name="title" type="text" class="inputTitle formControl">
                        </div>
                        <div class="formGroup">
                            <span class="spanForm"><label>Dear Diary</label></span>
                            <br>
                            <textarea name="diary" class="formControl inputDetails" rows="8" data-minwords="8" data-required="true" placeholder="Write your thoughts.."></textarea>
                        </div>
                        <div class="btn">
                            <button class="saveBtn" name="submit" type="submit">Save Diary</button>
                        </div>
                    </form>
                </div>
            </div>
        </aside>
        <!-- /Side Bar -->
        <aside class="wrapper2">
            <div class="navigation2">
                <div class="contentDiary">
                    <h4 class="boldTitle" style="text-transform:uppercase; font-size:18px;"><a href=""><b>My Diary</b></a></h4>
                </div>
                <section class="details">
                    <div class="tab" id="activity">
                        <ul class="listGroup">
                            <li></li>
                           
                            <li class="listGroup_item">
                                <div class="btn-group pull-right">
                                    <a href=""><button type="button" class="" title="Show"><i class="fa fa-eye"></i></button></a>
                                    <a href=""><button type="button" class="" title="Remove"><i class="fa fa-trash-o bg-danger"></i></button></a>
                                </div>
                                <h3 style="text-transform:uppercase;"><b></b></h3>
                                <p></p>
                                <small class="text-info"><i></i></small>
                               
                            </li>
                        </ul>
                    </div>
                </section>
                
            </div>
        </aside>
        
    </section>
</body>
</html>