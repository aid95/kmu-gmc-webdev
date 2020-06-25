<?php
    session_start();
    include_once("../../../utils/mysql.php");

    $article_id = $_POST["article_id"];
    $board = $_POST["board"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $update_sql = "UPDATE Article SET board_pk='$board', title='$title', content='$content' WHERE pk=$article_id";
    mysqli_query($link, $update_sql);
    mysqli_close($link);

    echo "<script> window.location.href='/forum/topic/?id=$board'</script>";
