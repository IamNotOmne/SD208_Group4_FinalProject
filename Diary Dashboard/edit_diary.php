<?php
// include('config.php')
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
                <div class="user" onclick="menuToggle();">
                    <img src="img/avatar.png" alt="">
                </div>
                <div class="userMenu">
                    <h3></h3>
                    <ul>
                        <li><a href="">Log Out</a></li>
                    </ul>
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

                        <?php //$query = mysqli_query($conn,"select * from diary where diary_id = '$get_id' ") or die(mysqli_error());
                       // $row = mysqli_fetch_array($query);?>

                        <div class="formGroup">
                            <span class="spanForm"><label>Title</label></span>
                            <br>
                            <input name="title" type="text" class="inputTitle formControl" value="<?php echo $row['title'];?>">
                        </div>
                        <div class="formGroup">
                            <span class="spanForm"><label>Dear Diary</label></span>
                            <br>
                            <textarea name="diary" class="formControl inputDetails" rows="8" data-minwords="8" data-required="true" placeholder="Write your thoughts.."><?php echo $row['diary_details']; ?></textarea>
                        </div>
                        <div class="btn">
                            <button class="saveBtn" name="update" type="submit">Update Diary</button>
                        </div>
                    </form>
                </div>
            </div>
        </aside>
        <!-- /Side Bar -->

        <!-- Content of the Diary -->
        <aside class="wrapper2">
            <div class="navigation2">
                <div class="contentDiary">
                    <h4 class="boldTitle" style="text-transform:uppercase;"><b>My Diary</b></h4>
                </div>
                <section class="details">
                    <div class="tab" id="activity">
                        <ul class="listGroup">
                            <li></li>
                            <?php foreach($diaryArray as $diary) {?>
                            <li class="listGroup_item">
                                <h3 style="text-transform:uppercase;"><b><?php echo $diary['title'] ?></b></h3>
                                <p style="font-size:18px;"><?php echo $diary['diary_details']; ?></p>
                                <?php }?>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </aside>
        <!-- /Content of the Diary -->
        <aside class="viewDetails">
            <section class="scrollable">
                <div class="viewWrapper">
                    <section class="panel">
                        <?php 
                        //$get_diary = mysqli_query($conn, "select * from diary WHERE diary_id = \"$get_id\"") or die(mysqli_error());
                       // while ($row = mysqli_fetch_array($get_diary)){
                        $id = $row['diary_id']; ?>
                        <h4 style="text-transform:uppercase;" class="font-thin padder"><b><?php echo $row['title'];?></b></h4>
                        <ul class="listGroup">
                            <li class="listGroup_item">
                                <p><?php echo $diary['diary_details']; ?></p>
                                <small class="text-info"><i class="fa fa-clock-o text-info"></i><?php echo $diary['time_in']?></small>
                            </li>
                        </ul>
                        <?//php } ?>
                    </section>
                </div>
            </section>
        </aside>
    </section>
    <script src="js/diary.js"></script>
</body>
</html>