<?php
    $user = "Sky";
    $pass = "1";
    session_start();
    if(isset($_SESSION["username"]))
    {
        header("Location: index.php");
    }
    else
    {
        if($_POST["username"] == $user && $_POST["password"] == $pass)
        {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["userID"] = 1;
            header("Location: index.php");
        }
        else
        {
            header("Location: login.php?err=1");
        }
    }
?>