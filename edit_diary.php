<?php
ob_start();
include('includes/session.php');
require_once('includes/connect.inc');
?>
<?php
$get_id = $_GET['edit'];

//*** para ma update ang diary ****/
if(isset($_POST['update'])){
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $diary_note = mysqli_escape_string($conn,$_POST['diary_note']);

    $query = "UPDATE diary SET title = '$title', diary_note = '$diary_note', last_update=CURRENT_TIMESTAMP WHERE diary_id = '$get_id'";

    if(mysqli_query($conn, $query)){
        echo "<script> alert('Your Diary was updated successfully.');</script>";
        echo "<script type='text/javascript'> document.location = 'diary.php'; </script>";
    }else{
        echo 'There is an error in the database: '. mysqli_error($conn);
    }
}

//*** Para ni sa pag select**/
$query = "SELECT diary_id,title,diary_note,time_in FROM diary WHERE diary_id = '$get_id'";

if(mysqli_query($conn, $query)){
    $result_query = mysqli_query($conn, $query);

    $diaryArray = mysqli_fetch_all($result_query, MYSQLI_ASSOC);
}else{
    echo 'There is an error in the database: '. mysqli_error($conn);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
    <title>E-Diary Management System</title>
    <link rel="icon" href="img/logo.png" type="image"/>
    <link rel="stylesheet" href="css/diary.css">
    <script src="https://kit.fontawesome.com/0ec21bae43.js" crossorigin="anonymous"></script>
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
            <?php 
                 $query= mysqli_query($conn,"select * from register where user_ID = '$session_id'")or die(mysqli_error($conn));
                 $row = mysqli_fetch_array($query);
            ?>
                <div class="user" onclick="menuToggle();">
                    <img src="img/avatar.png" alt="avatar">
                    <span>
                        <a href="#" id="nameP"><b class="user_name"><b>  <?php echo $row['fullName']; ?></b></a>
                    </span>
                </div>
                <div class="userMenu">
                    <h3></h3>
                    <ul>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
            <!--/Profile-->
        </header>
        <!-- Side Bar -->
        <aside class="wrapper">
            <div class="navigation"  style="width: 511.5px;">
                <div class="contentWrapper">
                    <h4 class="diaryName" style="text-transform:uppercase; font-size:18px;"><b>Add Diary</b></h4>
                    <center>
                    <form method="POST">
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM diary WHERE diary_id = '$get_id' ") or die(mysqli_error($conn));
                            $row = mysqli_fetch_array($query);
                        ?>
                        <div class="formGroup">
                            <span class="spanForm"><label>Title</label></span>
                            <br>
                            <input name="title" type="text" class="inputTitle formControl" style="width: 300px;" value="<?php echo $row['title']; ?>">
                        </div>
                        <div class="formGroup">
                            <span class="spanForm"><label>Dear Diary</label></span>
                            <br>
                            <textarea name="diary_note" class="formControl inputDetails" placeholder="Write your thoughts.." style="width: 300px; height: 300px;"><?php echo $row['diary_note']; ?></textarea>
                        </div>
                        <div class="btn">
                            <button class="saveBtn" name="update" type="submit">Update Diary</button>
                        </div>
                    </form>
                    </center>
                </div>
                <!-- Switch Theme -->
                <div class="switchContainer">
                     <div class="switch" id="switchIcon">
                        <a href=""><i class="fa-regular fa-lightbulb"></i></a>
                    </div>
                </div>
                <!-- /Switch Theme -->
            </div>
        </aside>
        <!-- /Side Bar -->

        <!-- Content of the Diary -->
        <aside class="wrapper2">
            <div class="navigation2" style="width: 500px;">
                <div class="contentDiary">
                    <h4 class="boldTitle" style="text-transform:uppercase;"><b>My Diary</b></h4>
                </div>
<<<<<<< HEAD
                <div class="scroll-div">
=======
>>>>>>> Ara
                <section class="details">
                    <div class="tab" id="activity">
                        <ul class="listGroup">
                            <li></li>
                            <?php foreach($diaryArray as $diary_note){ ?>
                            <li class="listGroup_item">
                                <h3 class="d_title"  style="text-transform:uppercase;"><b><?php echo $diary_note['title']; ?></b></h3>
                                <p class="d_note"><?php echo $diary_note['diary_note']; ?></p>
                            <?php } ?>
                            </li>
                        </ul>
                    </div>
                </section>
<<<<<<< HEAD
                </div>
=======
>>>>>>> Ara
            </div>
        </aside>
        <!-- /Content of the Diary -->
        
        <!-- View Details Limited to 5 lang-->
        <aside class="wrapper">
            <div class="navigation"  style="width: 500px;" id="thirdAside">
                <div class="contentDiary2">
                    <h4 class="boldTitle" style="text-transform:uppercase; font-size:18px;"><a href="#"><b>Preview</b></a></h4>
                </div>
                <section class="details2">
<<<<<<< HEAD
                    <div class="scroll-div">
                    <div class="tabContent">
                        <?php
                            $getDiary_note = mysqli_query($conn, "SELECT * FROM diary WHERE user_id = '$session_id'") or die(mysqli_error($conn));
=======
                    <div class="tabContent">
                        <?php
                            $getDiary_note = mysqli_query($conn, "SELECT * FROM diary WHERE user_id = '$session_id' LIMIT 5") or die(mysqli_error($conn));
>>>>>>> Ara
                            while($row = mysqli_fetch_array($getDiary_note)){
                                $id = $row['diary_id'];
                        ?>
                        <h4 class="d_title"style="text-transform:uppercase;"><b><?php echo $row['title']; ?></b></h4>
                        <ul class="listGroup" style="list-style: none;">
                            <li class="listGroup_item">
                                <p class="d_note" align="justify"><?php echo $row['diary_note']; ?></p>
                            </li>
                        </ul>
                        <?php } ?>
                    </div>
<<<<<<< HEAD
                    </div>
=======
>>>>>>> Ara
                </section>
            </div>
        </aside>
        <!-- /View Details Limited to 5 lang-->
    </section>
    <script src="js/diary.js"></script>
</body>
</html>