<?php
    session_start();
    include_once("../../utils/mysql.php");

    $article_id = $_POST['article_id'];
    $content = $_POST["content"];
    $user_pk = $_SESSION["userpk"];

    $insert_sql = "INSERT INTO Comment(user_pk, article_pk, content) VALUES ($user_pk, $article_id, '$content')";
    mysqli_query($link, $insert_sql);
    mysqli_close($link);

    echo "<script> window.location.href='/forum/view/?id=$article_id'</script>";
