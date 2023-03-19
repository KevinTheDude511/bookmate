<?php
    if(isset($_GET["genre"]) && isset($_GET["current_page"]))
    {
        $genreID = $_GET["genre"];
        $current_page = $_GET["current_page"];
        header("Location: books.php?genre=$genreID&page=$current_page");
    }
    else
    {
        header("Location: books.php");
    }
?>