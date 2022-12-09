<?php
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['logged_in'])  && (trim($_SESSION['logged_in']) == '') && !isset($_SESSION['username'])
 && empty($_SESSION['username'])) {
    session_unset();
    header("Refresh: 0.1; url=login.php");
 }
 ?>

<?php
$session_id=$_SESSION['logged_in'];
?>