        <header class="header-menu-bar">
            <div class="header-menu-wrap">
                <h1 class="header-logo-wrap">
                    <a href="https://www.kmu.ac.kr/uni/main/main.jsp" class="kmu-logo-link">계명대학교</a>
                    <a href="/" class="gmc-logo-link">게임모바일공학과</a>
                </h1>
                <nav>
                    <a href="/">홈</a>
                    <span style="color: #fff;">|</span>
                    <a href="/about.php">소개</a>
                    <span style="color: #fff;">|</span>
                    <a href="/forum">포럼</a>
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
