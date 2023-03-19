<?php
    session_start();
    include("connect.php");
    if(isset($_SESSION["username"]))
    {
        header("Location: index.php");
    }
    else
    {
        $user = $_POST["username"];
        $encrypt_pass = md5($_POST["password"]);
        $get_user_query = mysqli_query($link, "SELECT * FROM users where username = '$user' AND password = '$encrypt_pass'");
        if(mysqli_num_rows($get_user_query) == 1)
        {
            $get_user = mysqli_fetch_array($get_user_query);
            $_SESSION["username"] = $get_user["username"];
            $_SESSION["userID"] = $get_user["userID"];
            header("Location: index.php");
        }
        else
        {
            header("Location: login.php?err=1");
        }
    }
?>