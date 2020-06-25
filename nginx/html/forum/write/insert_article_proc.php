<?php
    session_start();
    include_once("../../utils/mysql.php");

    $board = $_POST["board"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_pk = $_SESSION["userpk"];

    if ($_SESSION["userid"] != null) {
        $insert_sql = "INSERT INTO Article(user_pk, board_pk, title, content) VALUES ($user_pk, '$board', '$title', '$content')";
        mysqli_query($link, $insert_sql);
    }
    mysqli_close($link);
    echo "<script> window.location.href='/forum/topic/?id=$board'</script>";
