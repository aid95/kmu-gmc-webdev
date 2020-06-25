<?php
    session_start();

    $id = $_SESSION["userid"];
    $pw = $_POST["pass"];
    $nickname = $_POST["nickname"];

    include_once("../../utils/mysql.php");

    $info_update_sql = "UPDATE Account SET pw='$pw', nickname='$nickname' WHERE id='$id'";
    mysqli_query($link, $info_update_sql);
    echo "<script> window.location.href='/'</script>";
