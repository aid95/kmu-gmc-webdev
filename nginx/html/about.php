<?php
    session_start();
?>

<html lang="ko">
<head>
<?php
include_once("meta_header.html");
?>
</head>
<body>
    <div class="wrapper">
        <?php
        include_once("header.php");
        ?>
        <main>
            <section class="sub-page-header-deco">
            </section>
            <div class="center">
                <aside class="left-sub-menu-wrap">
                    <nav class="left-sub-menu">
                        <ul>
                            <li><a>소개말</a></li>
                            <li><a>학과소개</a></li>
                        </ul>
                    </nav>
                </aside>
                <section class="right-sub-content-wrap">
                    <div class="right-sub-content">
                        <h1 class="content-section-title">영상</h1>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hsJ1RYc2QKE?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="right-sub-content">
                        <h1 class="content-section-title">소개</h1>
                        <p class="content-section-body">계명대학교 컴퓨터 공학부 게임모바일공학 전공은 글로벌 수준에 부합하는 게임개발 능력을 갖춘 국제적인재와 프로젝트 기반의 교과과정으로 창의적이고 실무적인 인력을 양성하는데 목표를 두고 있습니다. 이를 위해서 미국 디지펜공대와 복수학위과정개설을 통해서 게임분야의 국제수준에 특화된 교과과정 및 교육과정을 운영하고 있으며, 게임이론 및 실습 뿐 아니라 다양한 프로젝트 기반의 강의와 본 학과가 소재한 대명동 캠퍼스내의 대구 문화 산업 클러스터에 입주한 산업체와의 활발한 산학협력을 통해서 실무능력을 갖출 수 있는 인재를 양성하고 있으며, 게임관련 분야의 전문가를 양성하기 위한 대구 경북 유일한 4년제 학과입니다.</p>
                    </div>
                    <div class="right-sub-content">
                        <h1 class="content-section-title">졸업후 진로</h1>
                        <p class="content-section-body">컴퓨터 공학부 게임모바일공학 전공을 졸업한 후 학생들은 게임관련 업체에 취업을 하고 있으며, 특히, 게임 프로그래밍분야의 특화된 교육과정을 통해, 게임 프로그래머로서 진출을 주로 하고 있습니다. 디지펜공대의 복수학위과정 졸업생의 경우에는 닌텐도, 마이크로소프트, EA와 같은 세계적인 게임산업체에 취업을 할 것으로 기대하고 있습니다. 또한 프로젝트 기반의 통합적 교과과정에 따라 게임기획자, 게임 그래픽스 디자인 / 애니메이션 컨텐츠 개발자로의 진출도 가능하며, 모바일 관련업체, 컴퓨터 관련업체, 콘텐츠 관련업체 등 다양한 분야의 진출이 가능합니다.</p>
                    </div>
                </section>
            </div>
        </main>
        <?php
        include_once("footer.html");
        ?>
    </div>
    <script charset="UTF-8">
        function set_translation_nav_menu_bar() {
            // TODO: animation효과로 Fadeout처럼 만들기
            if (30 < $(window).scrollTop()) {
                $(".header-menu-bar").css('background-color', 'rgba(0, 0, 0, 1)');
            } else {
                $(".header-menu-bar").css('background-color', 'rgba(0, 0, 0, .25)');
            }
        }

        $(document).ready(function() {
            set_translation_nav_menu_bar();
            $(window).scroll(() => {
                set_translation_nav_menu_bar();
            });

            setTimeout(() => { 
                $(".wrap_controllers").remove();
                $(".wrap_btn_zoom").remove();
            }, 1500);
        });
    </script>
</body>
</html>
