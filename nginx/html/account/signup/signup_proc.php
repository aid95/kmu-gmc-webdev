<?php
    include_once("../../utils/mysql.php");

    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $nickname = $_POST["nickname"];

    $sql = "INSERT INTO Account(id, pw, nickname) VALUES('$id', '$pass', '$nickname')";
    if (mysqli_query($link, $sql) === TRUE) {
        echo "<script>window.location.href='../../';</script>";
    } else {
        echo "<script>window.location.href='/';</script>";
    }
    mysqli_close($link);
