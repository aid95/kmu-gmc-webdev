        <header class="forum-page-header-menu-bar">
            <div class="forum-header-menu-wrap">
                <h1 class="forum-header-logo-wrap">
                    <a href="https://www.kmu.ac.kr/" class="kmu-logo-link">계명대학교</a>
                    <a href="/" class="gmc-logo-link">게임모바일공학과</a>
                </h1>
                <nav>
                    <a href="/about.php">소개</a>
                    <span style="color: #fff;">|</span>
                    <a href="">연혁</a>
                    <span style="color: #fff;">|</span>
                    <a href="">모집요강</a>
                    <span style="color: #fff;">|</span>
                    <a href="/forum">포럼</a>
                    <span style="color: #fff;">|</span>
                    <a href="/forum/write">글쓰기</a>
                </nav>
<?php
if($_SESSION['userid']==null) {
echo "                <a href='/account/signin' class='header-menu-border-btn'>로그인</a>";
} else {
echo "<div>";
echo "                <a href='/account/edit'>내 정보</a>";
echo "  ";
echo "                <a href='/account/logout'>로그아웃</a>";
echo "</div>";
}
?>
            </div>
        </header>
