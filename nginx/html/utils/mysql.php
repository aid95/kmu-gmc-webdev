<?php
    $HOST = "db";
    $USER = "root";
    $PASSWORD = "root";
    $DB = "kmuwebdev_db";

    $link = mysqli_connect($HOST, $USER, $PASSWORD, $DB);
    if (!$link) {
        exit;
    }
