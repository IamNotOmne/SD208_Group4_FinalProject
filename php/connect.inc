<?php

$conn = mysqli_connect("localhost","root","") or die ("Can't connect to mySQL Server");

mysqli_select_db($conn,"e-diary_ms") or die ("Can't connect to database");
?>