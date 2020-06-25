<?php
    session_start();
    include_once("../../utils/mysql.php");

    $id     = $_POST["id"];
    $pass   = $_POST["pass"];

    $sql = "SELECT * FROM Account WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    $num_match = mysqli_num_rows($result);
    if (!$num_match) {
        echo "<script>window.alert('등록되지 않은 아이디입니다!'); history.go(-1);</script>";
    } else {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pw"];
        if ($pass !== $db_pass) {
            echo "<script>window.alert('틀린 비밀번호 입니다!'); history.go(-1);</script>";
        } else {
            $_SESSION["userpk"] = $row["pk"];
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["nickname"];
            $_SESSION["userlevel"] = $row["perm"];
            echo "<script> window.location.href='/'</script>";
        }
    }
    mysqli_close($link);
