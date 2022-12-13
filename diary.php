<?php
ob_start();
include 'includes/session.php';
require_once 'includes/connect.inc';
?>

<?php
if (isset($_POST['submit'])) {
    //***used to escape all special characters for use***
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $diary_note = mysqli_real_escape_string($conn, $_POST['diary_note']);

    date_default_timezone_set("Asia/Manila");
    $current_time = date("h:i:sa");

    //***ang paghimo sa query***
    $query = "INSERT INTO diary(user_id,title,diary_note,time_in) VALUES('$session_id','$title','$diary_note','$current_time')";

    if (mysqli_query($conn, $query)) {
        echo "<script> alert('Your Diary was added successfully');</script>";
    } else {
        echo 'There is an error in the database: ' . mysqli_error($conn);
    }
}

if (isset($_GET['delete'])) {
    $delete_diary = $_GET['delete'];
    $sql_query = "DELETE FROM diary WHERE diary_id = " . $delete_diary;
    $result_query = mysqli_query($conn, $sql_query);
    if ($result_query) {
        echo "<script> alert('Your diary was deleted');</script>";

        echo "<script type = 'text/javascript'> document.location = 'diary.php'; </script>";
    }
}

// *** para ma select ang query ***
$query = "SELECT diary_id,title,diary_note,time_in FROM diary WHERE user_ID = '$session_id' ";

if (mysqli_query($conn, $query)) {
    $result_query = mysqli_query($conn, $query);
    $diaryArray = mysqli_fetch_all($result_query, MYSQLI_ASSOC);

} else {
    echo 'There is an error in the database: ' . mysqli_error($conn);
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>E-Diary Management System</title>
    <script src="https://kit.fontawesome.com/0ec21bae43.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.png" type="image">
    <link rel="stylesheet" href="css/diary.css">
</head>
<body class>
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
            $query = mysqli_query($conn, "select * from register where user_ID = '$session_id'") or die(mysqli_error($conn));
            $row = mysqli_fetch_array($query);
            ?>
                <div class="user" onclick="menuToggle();">
                    <img src="img/avatar.png" alt="avatar">
                    <span>
                        <a href="#" id="nameP"><b class="user_name" ><b><?php echo $row['fullName']; ?></b></a>
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
            <div class="navigation" style="width: 511.5px;">
                <div class="contentWrapper">
                <h4 class="diaryName" style="text-transform:uppercase;font-size:18px;"><b>Add Diary</b></h4>
                    <center>
                    <form method="POST">

                        <div class="formGroup">
                            <span class="spanForm"><label>Title</label></span>
                            <br>
                            <input name="title" type="text" class="inputTitle formControl" style="width: 300px;">
                        </div>
                        <div class="formGroup">
                            <span class="spanForm"><label>Dear Diary</label></span>
                            <br>
                            <textarea name="diary_note" class="formControl inputDetails"  placeholder="Write your thoughts.." style="width: 300px; height: 300px;"></textarea>
                        </div>
                        <div class="btn">
                            <button class="saveBtn" name="submit" type="submit">Save Diary</button>
                        </div>
                    </form>
                    </center>
                </div>
                <!-- Switch Theme -->
                <div class="switchContainer">
                    <div class="switch" id="switchIcon" onclick="iconToggle();">
                        <a href="#"><i class="fa-regular fa-lightbulb"></i></a>
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
                    <h4 class="boldTitle" style="text-transform:uppercase; font-size:18px;"><a href=""><b>My Diary</b></a></h4>
                </div>
<<<<<<< HEAD
                <div class="scroll-div">
=======

>>>>>>> Ara
                <section class="details">
                    <div class="tab">
                        <ul class="listGroup">
                            <li></li>
                           <?php foreach ($diaryArray as $diary_note) {?>
                            <li class="listGroup_item">
                                <div class="btn-group p-right">
                                    <a href="edit_diary.php?edit=<?php echo $diary_note['diary_id']; ?>"><button type="button" class="i_btn green" title="Show"><i class="fa-regular fa-pen-to-square"></i></button></a>
                                    <a href="diary.php?delete=<?php echo $diary_note['diary_id']; ?>"><button type="button" class="i_btn red" title="Remove"><i class="fa fa-trash-o bg-danger"></i></button></a>
                                </div>
                                <h3 class="d_title" style="text-transform:uppercase;"><b><?php echo $diary_note['title']; ?> </b></h3>
                                <p class="d_note"><?php echo substr($diary_note['diary_note'], 0, 200) ?></p>
                                <small class="text-info" style="color: #5A5A5A;"><i class="fa fa-clock-o text-info"></i><?php echo $diary_note['time_in']; ?></small>
                                <?php }?>
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
         <!-- / Content of the Diary -->

         <!-- View Details Limited to 5 lang-->
        <aside class="wrapper">
            <div class="navigation" style="width: 500px;" id="thirdAside">
<<<<<<< HEAD
               
                        <div class="contentDiary2">
                        <h4 class="boldTitle" style="text-transform:uppercase; font-size:18px;"><a href="#"><b>Preview</b></a></h4>
                        </div>
                        <section class="details2">
                            <div class="scroll-div">
                                <div class="tabCont">
                                    <?php
                                    $getDiary_note = mysqli_query($conn, "SELECT * FROM diary WHERE user_id = '$session_id' ") or die(mysqli_error($conn));
                                    while ($row = mysqli_fetch_array($getDiary_note)) {
                                    $id = $row['diary_id'];
                                    ?>
                                    <h4 class="d_title" style="text-transform:uppercase;"><b><?php echo $row['title']; ?></b></h4>
                                    <ul class="listGroup" style="list-style: none;">
                                        <li class="listGroup_item">
                                            <p class="d_note" align="justify"><?php echo $row['diary_note']; ?></p>
                                        </li>
                                    </ul>
                                    <?php }?>
                                </div>
                            </div>
                    </section>
               
=======
                <div class="contentDiary2">
                <h4 class="boldTitle" style="text-transform:uppercase; font-size:18px;"><a href="#"><b>Preview</b></a></h4>
                </div>
                <section class="details2">
                    <div class="tabCont">
                        <?php
                        $getDiary_note = mysqli_query($conn, "SELECT * FROM diary WHERE user_id = '$session_id' LIMIT 5") or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_array($getDiary_note)) {
                        $id = $row['diary_id'];
                        ?>
                        <h4 class="d_title" style="text-transform:uppercase;"><b><?php echo $row['title']; ?></b></h4>
                        <ul class="listGroup" style="list-style: none;">
                            <li class="listGroup_item">
                                <p class="d_note" align="justify"><?php echo $row['diary_note']; ?></p>
                            </li>
                        </ul>
                        <?php }?>
                    </div>
                </section>
>>>>>>> Ara
            </div>
        </aside>
        <!-- / View Details Limited to 5 lang-->
    </section>
    <script src="js/diary.js"></script>
</body>

</html>