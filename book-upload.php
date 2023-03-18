<?php
    include("connect.php");
    session_start();
    if(isset($_SESSION["username"]) && isset($_POST["submit"]))
    {
        $name = ucwords(strtolower($_POST["bookname"]));
        $date = date("Y-m-d", time());
        $author = ucwords(strtolower($_POST["author"]));
        $genre = $_POST["genre"];
        $overview = $_POST["overview"];
        $username = $_SESSION["username"];

        if(empty($_FILES["book_image"]["name"]) || $_FILES["book_image"]["error"] == UPLOAD_ERR_NO_FILE || $name == "" || $author == "" || $overview == "") 
            header("Location: my-account.php?err=1");

        $target_dir = "img/books/";
        $target_file = $target_dir . basename($_FILES["book_image"]["name"]);
        
        //echo $target_file;

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["book_image"]["tmp_name"]);
        if($check === false) 
            header("Location: my-account.php?err=2");

        // Check file size
        if ($_FILES["book_image"]["size"] > 500000) 
            header("Location: my-account.php?err=3");

        // Allow certain file formats
        $allowed_types = array('image/jpeg', 'image/png', 'image/jpg'); //?
        if (!in_array($_FILES["book_image"]["type"], $allowed_types)) 
            header("Location: my-account.php?err=4");

        // Success
        if (move_uploaded_file($_FILES["book_image"]["tmp_name"], $target_file)) header("Location: my-account.php");
        else header("Location: my-account.php?err=5");

        if(mysqli_query($link, "INSERT INTO book (name, uploadDate, overview, genre, imgURL, author, uploadUser) values('$name', '$date', '$overview', '$genre', '$target_file', '$author', '$username')"))
        {
            header("Location: my-account.php?lmao=2");
        }
        else
        {
            header("Location: my-account.php?err=5&lmao=1");
        }
    }
    else
    {
        header("Location: index.php");
    }
?>