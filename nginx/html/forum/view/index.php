<?php
    session_start();
    include_once('../../utils/mysql.php');

    $article_id = $_GET['id'];

    $article_sql = "SELECT title, content, Article.created_date, profile_image, nickname, Account.pk AS uid, Article.pk AS aid, Article.user_pk AS wid, Article.photo AS photo FROM Article, Account WHERE Article.pk='$article_id' AND Article.user_pk=Account.pk";
    $article_result = mysqli_query($link, $article_sql);
    $article_row = mysqli_fetch_array($article_result);
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
                        <h4 style="font-size: 24px;margin: 0;"><?=$article_row[0]?></h4>

                        <!-- article //-->
                        <article class="topic-content-wrap">
                            <div class="topic-profile">
                                <img src="/img/profile/<?=$article_row[3]?>" alt="profile">
                                <p><?=$article_row[4]?></p>
<?php
if ($article_row[5] == $_SESSION["userpk"]) {
echo "                                <p><a href='/forum/write/edit/?id=".$article_row[6]."'>수정</a> | <a href='/forum/write/delete/?id=".$article_row[6]."'>삭제</a></p>";
}
?>
                            </div>
                            <div class="topic-content">
<?php
if ($article_row[8] != '') {
echo "                                <img style='width: 20%;' src='/img/".$article_row[8]."' alt=''>";
}
?>
                                <p><?=$article_row[1]?></p>
                            </div>
                        </article>

                        <!-- comment //-->
<?php
$comments_sql = "SELECT Comment.content AS content, nickname, profile_image FROM Comment, Article, Account WHERE Article.pk='$article_id' AND Article.pk=Comment.article_pk";
$comments_result = mysqli_query($link, $comments_sql);
while($comments_row = mysqli_fetch_array($comments_result)) {
echo "                        <article class='topic-comment-wrap'>";
echo "                            <div class='topic-profile'>";
echo "                                <img src='/img/profile/".$comments_row[2]."' alt='profile'>";
echo "                                <p>".$comments_row[1]."</p>";
echo "                            </div>";
echo "                            <div class='topic-content'>";
echo "                                <p>".$comments_row[0]."</p>";
echo "                            </div>";
echo "                        </article>";
}
?>

                        <form action="insert_comment_proc.php" method="post">
                            <article class="comment_input_form">
                                <textarea name="content" id="" cols="30" rows="10"></textarea>
                                <input type="submit" value="작성">
                                <input type="hidden" name="article_id" value="<?=$article_id?>">
                            </article>
                        </form>

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
