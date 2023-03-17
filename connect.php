<?php
$link = mysqli_connect("localhost", "root", "") or die("Cannot connect to database");
mysqli_select_db($link, "bookmate") or die("Database does not exists");
mysqli_query($link, "set names 'utf8'");
?>