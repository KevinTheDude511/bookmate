<?php
    include("connect.php");
    $email = $_POST["email"];
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $pass_confirm = $_POST["confirm_password"];
    if($email == "" || $user == "" || $pass == "" || $pass_confirm == "")
    {
        header("Location: login.php?regfail=1");
    }
    else if($pass != $pass_confirm)
    {
        header("Location: login.php?regfail=2");
    }
    else
    {
        $same_email_query = mysqli_query($link, "SELECT * FROM users WHERE email = '$email'");
        if(mysqli_num_rows($same_email_query) >= 1)
        {
            header("Location: login.php?regfail=3");
        }
        else
        {
            $encrypt_pass = md5($pass);
            if(mysqli_query($link, "INSERT INTO users (username, password, email) VALUES ('$user', '$encrypt_pass', '$email')"))
            {
                header("Location: login.php?regsuccess=1");
            }
            else
            {
                header("Location: login.php?regfail=4");
            }
        }
    }
?>