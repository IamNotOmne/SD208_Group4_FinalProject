<?php
$conn = mysqli_connect("localhost","root", "") or die("can't connect to mySQL Server");

mysqli_select_db($conn,"e-diary_ms") or die("Cannot connect to database");
?>