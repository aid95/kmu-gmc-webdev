<?php
    session_start();
    include_once('../../utils/mysql.php');

    $board_id = $_GET['id'];

    $board_sql = "SELECT * FROM Board WHERE pk='$board_id'";
    $board_result = mysqli_query($link, $board_sql);
    $board_row = mysqli_fetch_array($board_result);
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
        include_once("../header.php");
        ?>
        <main>
            <div class="center">
                <div class="forum-content">
                    <section class="forum-category-view">
                        <h4 style="font-size: 24px;margin: 0;"><?=$board_row[2]?></h4>
                        <dl><?=$board_row[3]?></dl>
                        <div class="forum-category-list">

                            <article>
                                <div class="forum-category-title"><p>글 목록</p></div>
<?php
$article_sql = "SELECT profile_image, nickname, Article.pk AS pk, Article.created_date AS write_date, title FROM Account, Article WHERE Article.board_pk='$board_id' AND Account.pk=Article.user_pk";
$article_result = mysqli_query($link, $article_sql);
while($article_row = mysqli_fetch_array($article_result)) {
echo "                                <div class='forum-sub-category-wrap'>";
echo "                                    <div class='forum-category'>";
echo "                                        <div class='forum-category-info'>";
echo "                                            <div class='forum-sub-category-title'>";
echo "                                                <dt><a href='/forum/view/?id=".$article_row[2]."'>".$article_row[4]."</a></dt>";
echo "                                            </div>";
echo "                                            <div class='forum-sub-category-count'>";
/* 덧글 정보 제거
echo "                                                <dt></dt>";
echo "                                                <p></p>";
*/
echo "                                            </div>";
echo "                                            <div class='forum-sub-category-recent'>";
echo "                                                <div class='forum-sub-category-recent-wrap'>";
echo "                                                    <div class='forum-user-profile'>";
echo "                                                        <img src='/img/profile/".$article_row[0]."' alt='profile image'>";
echo "                                                    </div>";
echo "                                                    <div class='forum-user-info'>";
echo "                                                        <dt class='forum-user-name'>".$article_row[1]."</dt>";
echo "                                                        <dt class='forum-article-date'>작성일 ".$article_row[3]."</dt>";
echo "                                                    </div>";
echo "                                                </div>";
echo "                                            </div>";
echo "                                        </div>";
echo "                                    </div>";
echo "                                </div>";
}
?>
                            </article>

                        </div>
                    </section>
                </div>
            </div>
        </main>
        <?php
        include_once("../footer.html");
        ?>
    </div>
</body>
</html>
