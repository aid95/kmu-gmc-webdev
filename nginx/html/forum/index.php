<?php
    session_start();
    include_once('../utils/mysql.php');
?>

<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280, initial-scale=1.0">
    <title>계명대학교 :: 게임모바일공학과 홈페이지</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <?php
        include_once("header.php");
        ?>
        <main>
            <div class="center">
                <div class="forum-content">
                    <section class="forum-category-view">
                        <h4 style="font-size: 24px;margin: 0;">계명대학교 게임모바일공학과 포럼에 오신걸 환영합니다.</h4>
                        <dl>학과 공지 및 수업 질문과 학생들간의 지식을 나눠 함께 성장하는 공간입니다.</dl>
<?php
    $category_sql = "SELECT * FROM Category";
    $category_result = mysqli_query($link, $category_sql);
    while ($category_row = mysqli_fetch_array($category_result)) {
echo "                        <div class='forum-category-list'>";
echo "                            <article>";
echo "                                <div class='forum-category-title'><p>".$category_row[1]."</p></div>";
        $board_sql = "SELECT * FROM Board WHERE category_pk='".$category_row[0]."'";
        $board_result = mysqli_query($link, $board_sql);
        while ($board_row = mysqli_fetch_array($board_result)) {
echo "                                <div class='forum-sub-category-wrap'>";
echo "                                    <div class='forum-category'>";
echo "                                        <div class='forum-category-info'>";
echo "                                            <div class='forum-sub-category-title'>";
echo "                                                <dt><a href='/forum/topic/?id=".$board_row[0]."'>".$board_row[2]."</a></dt>";
echo "                                                <dd>".$board_row[3]."</dd>";
echo "                                            </div>";

/* 게시글 정보 출력 제거
echo "                                            <div class='forum-sub-category-count'>";
echo "                                                <dt>9,999</dt>";
echo "                                                <p>Posts</p>";
echo "                                            </div>";
echo "                                            <div class='forum-sub-category-recent'>";
echo "                                                <div class='forum-sub-category-recent-wrap'>";
echo "                                                    <div class='forum-user-profile'>";
echo "                                                        <img src='/img/profile/default.jpg' alt='profile image'>";
echo "                                                    </div>";
echo "                                                    <div class='forum-user-info'>";
echo "                                                        <dt class='forum-article-title'>안녕하세요~~!!@@@@@@@@@</dt>";
echo "                                                        <dt class='forum-user-name'>운영자</dt>";
echo "                                                        <dt class='forum-article-date'>작성일 2020-06-18</dt>";
echo "                                                    </div>";
echo "                                                </div>";
echo "                                            </div>";
*/

echo "                                        </div>";
echo "                                    </div>";
echo "                                </div>";
        }
echo "                            </article>";
echo "                        </div>";
    }
?>
                    </section>
                    <aside class="forum-alert-list">
                    </aside>
                </div>
            </div>
        </main>
        <?php
        include_once("footer.html");
        ?>
    </div>
</body>
</html>
