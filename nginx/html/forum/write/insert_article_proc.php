<?php
    session_start();
    include_once("../../utils/mysql.php");

    $board = $_POST["board"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_pk = $_SESSION["userpk"];

    $error = $_FILES['myfile']['error'];
    $name = $_FILES['myfile']['name'];
    $ext = array_pop(explode('.', $name));
    if ($name != '') {
        move_uploaded_file( $_FILES['myfile']['tmp_name'], "../../img/$name");
    }

    if ($_SESSION["userid"] != null) {
        $insert_sql = "INSERT INTO Article(user_pk, board_pk, title, content, photo) VALUES ($user_pk, '$board', '$title', '$content', '$name')";
        mysqli_query($link, $insert_sql);
    }
    mysqli_close($link);
    echo "<script> window.location.href='/forum/topic/?id=$board'</script>";
