<?php
    session_start();
    include_once("../../utils/mysql.php");

    if ($_SESSION["userid"] != null) {
        $userid = $_SESSION["userid"];
        $sql = "SELECT * FROM Account WHERE id='$userid'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
    }
    mysqli_close($link);
?>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280, initial-scale=1.0">
    <title>계명대학교 :: 게임모바일공학과 홈페이지</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
    @font-face { font-family: 'NanumBarunGothic'; font-style: normal; font-weight: 400; src: url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWeb.eot'); src: url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWeb.eot?#iefix') format('embedded-opentype'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWeb.woff') format('woff'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWeb.ttf') format('truetype'); } @font-face { font-family: 'NanumBarunGothic'; font-style: normal; font-weight: 700; src: url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebBold.eot'); src: url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebBold.eot?#iefix') format('embedded-opentype'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebBold.woff') format('woff'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebBold.ttf') format('truetype') } @font-face { font-family: 'NanumBarunGothic'; font-style: normal; font-weight: 300; src: url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebLight.eot'); src: url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebLight.eot?#iefix') format('embedded-opentype'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebLight.woff') format('woff'), url('//cdn.jsdelivr.net/font-nanumlight/1.0/NanumBarunGothicWebLight.ttf') format('truetype'); } .nanumbarungothic * { font-family: 'NanumBarunGothic', sans-serif; }

    body {
        margin: 0;
        padding: 0;
        background-color: #F7F9F9;
    }

    .wrap {
        width: 100%;
        height: 100%;
    }

    .signin-center-wrap {
        width: 320px;
        height: 100%;
        margin: 0 auto;
        display: table;
    }

    .signin-content {
        width: 100%;
        height: 520px;
        display: table-cell;
        vertical-align: middle;
    }
    </style>

    <script type="text/javascript">
        function check_pass() {
            if (document.signup_form.pass.value !== document.signup_form.pass_chk.value) {
                alert("비밀번호가 틀립니다.");
                return;
            }
            document.signup_form.submit();
        }
    </script>
</head>
<body>
    <div class="wrap">
        <div class="signin-center-wrap">
            <div class="signin-content">
                <div class="signin-logo">
                </div>
                <form name="signup_form" class="signin-form" method="POST" action="edit_info_proc.php">
                    <div class="signin-id-txt">
                        <div class="form-group">
                            <label for="txt-id-field" style="font-family: 'NanumBarunGothic';">아이디</label>
                            <input id="txt-id-field" name="id" type="text" class="form-control" value="<?=$row[1]?>" readonly>
                        </div>
                    </div>
                    <div class="signin-pw-txt">
                        <div class="form-group">
                            <label for="txt-pw-field" style="font-family: 'NanumBarunGothic';">비밀번호</label>
                            <input id="txt-pw-field" name="pass" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="signin-pw-txt">
                        <div class="form-group">
                            <label for="txt-pw-field" style="font-family: 'NanumBarunGothic';">비밀번호 확인</label>
                            <input id="txt-pw-field" name="pass_chk" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="signin-pw-txt">
                        <div class="form-group">
                            <label for="txt-pw-field" style="font-family: 'NanumBarunGothic';">닉네임</label>
                            <input id="txt-pw-field" name="nickname" type="text" value="<?=$row[4]?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="signin-submit-bt">
                        <input type="button" onclick="check_pass()" class="btn btn-primary" style="width: 100%" value="수정하기">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
