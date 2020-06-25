<?php
    include_once("../../../utils/mysql.php");

    $article_id = $_GET["id"];
    $delete_sql = "DELETE FROM Article WHERE pk=$article_id";
    mysqli_query($link, $delete_sql);

    echo "<script> window.location.href='/forum'</script>";
