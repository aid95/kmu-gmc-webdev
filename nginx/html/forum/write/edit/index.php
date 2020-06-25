<?php
    session_start();
    include_once('../../../utils/mysql.php');
    $article_id = $_GET["id"];
    $article_sql = "SELECT * FROM Article WHERE pk='$article_id'";
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
        include_once("../../header.php");
        ?>
        <main>
            <div class="center">
                <div class="forum-content">
                    <section class="forum-category-view">
                        <h4 style="font-size: 24px;margin: 0;">포럼 게시글 작성</h4>
                        <form action="update_article_proc.php" method="POST">
                            <div class="article-form-style">
                                <select name="board" id="board-select">
<?php
$category_sql = "SELECT * FROM Board";
$category_result = mysqli_query($link, $category_sql);
while ($category_row = mysqli_fetch_array($category_result)) {
        echo "                                <option value='".$category_row[0]."'>".$category_row[2]."</option>";
}
?>
                                </select>
                                <input name="title" type="text" value="<?=$article_row[3]?>">
                                <textarea name="content" id="content" cols="30" rows="10"><?=$article_row[4]?></textarea>
                                <input name="article_id" type="hidden" value="<?=$article_id?>">
                                <input type="submit">
                            </div>
                        </form>
                    </section>
                    <aside class="forum-alert-list">
                    </aside>
                </div>
            </div>
        </main>
        <?php
        include_once("../../footer.html");
        ?>
    </div>
</body>
</html>
