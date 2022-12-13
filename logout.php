<?php
session_start();

unset($_SESSION['logged_in']);
echo "<script>alert('You are logged out. Thank you for using E-Diary.')</script>";
session_destroy();
header("refresh: 0.5; url=login.php");

?>