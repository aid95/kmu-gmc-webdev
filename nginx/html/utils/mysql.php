<?php
    $HOST = "db";
    $USER = "root";
    $PASSWORD = "root";
    $DB = "kmuwebdev_db";

    $link = mysqli_connect($HOST, $USER, $PASSWORD, $DB);
    mysqli_set_charset($link, "utf8");
    if (!$link) {
        exit;
    }
