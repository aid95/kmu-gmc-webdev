<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<?php
include_once("meta_header.html");
?>
</head>
<body>
    <div class="wrapper">

        <!-- header //-->
        <?php
        include_once("header.php");
        ?>

        <main>
            <section class="main-logo">
                <div class="video-bg">
                    <video playsinline autoplay="autoplay" muted="muted" loop="loop">
                        <source src="/media/intro.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="describe center">
                    <div class="main-describe-wrap-left dsp-table">
                        <div class="main-describe-text table-v-center">
                            <div>
                                <h2 style="margin: 0; font-size: 25px; text-shadow: 2px 2px 4px gray;">대한민국 게임콘텐츠 개발&교육의 자존심</h2>
                                <h2 style="margin: 0; font-size: 43px; text-shadow: 2px 2px 4px gray;">계명대학교 게임모바일공학과</h2>
                                <p style="text-shadow: 2px 2px 4px gray;">계명대학교 게임모바일콘텐츠학과는 글로벌 수준에 맞는 게임개발 능력을 갖춘 국제적 인재와 프로젝트 기반의 교과 과정으로 창의적이고 실무적인 인력을 양성하는데 목표를 두고 있습니다. 게임이론 및 실습뿐 아니라 다양한 프로젝트 기반의 강의가 여러 산업체와의 활발한 산학협력을 통해서 이루어져 실무능력을 갖출 수 있는 인재를 양성하고 있습니다. 또한, 게임 관련 분야의 전문가를 양성하기 위한 대구 경북 유일한 4년제 학과입니다. 2012년 8월에는 성서캠퍼스 신축 건물로 이전하였으며, 최신 설비의 기자재를 기반으로 활발한 연구, 프로젝트 활동을 수행하고 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-wrap">
                <div class="describe center">
                    <div class="dsp-table">
                        <div class="table-v-center main-decribe-wrap-left">
                            <div class="main-describe">
                                <h3>게임을 <span class="txt-under-deco">기획</span>하고, <span class="txt-under-deco">개발</span>하고 <span class="txt-under-deco">플레이</span>하자!</h3>
                                <p style="line-height: 28px;">학과 커리큘럼에서 기획의 기술과 개발에 필요한 기초 프로그래밍 및 cocos2d-x, Unity3D, Unreal 엔진 등을 학습하고 배운 내용을 통해서 직접 기획부터 개발까지 하여 나만의 게임을 만들 수 있습니다.</p>
                            </div>
                        </div>
                        <div class="table-v-center main-describe-wrap-right">
                            <div class="main-secribe">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-wrap" style="background-color: #F7F9F9;">
                <div class="describe center">
                    <div class="dsp-table">
                        <div class="table-v-center main-describe-wrap-right">
                            <div class="main-secribe">
                            </div>
                        </div>
                        <div class="table-v-center main-decribe-wrap-left">
                            <div class="main-describe">
                                <h3>학생들의 학업을 위한,<br><span class="txt-under-deco">최신 설비</span>와 <span class="txt-under-deco">지원</span>!</h3>
                                <p style="line-height: 28px;">학생들의 학업을 위한 스터디룸과 원활한 개발을 위한 고사양 PC와 강의실, 그리고 최신 장비를 구비하고 교내외에서 주체하는 공모전에 참가할 수 있는 기회를 제공하여 학업뿐만 아니라 다양한 경험을 할 수 있도록 학과에서는 학생들을 위해 노력합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-wrap">
                <div class="describe center">
                    <div class="dsp-table">
                        <div class="table-v-center main-decribe-wrap-left">
                            <div class="main-describe">
                                <h3>학업에 지친 몸과 마음을 먹고, 즐기면서 해소하는 <span class="txt-under-deco">랜파티</span></h3>
                                <p style="line-height: 28px;">선후배와의 관계를 위한 랜파티를 통해 함께 게임하고, 맛있는걸 먹으며 어우러지는 학과 행사입니다. 강제성이 없는 자율참여로 어떠한 경우에도 강요하지 않습니다.</p>
                            </div>
                        </div>
                        <div class="table-v-center main-describe-wrap-right">
                            <div class="main-secribe">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="kakaomap-embedded">
                <div id="daumRoughmapContainer1590481941690" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%"></div>
            </section>
            <section class="content-wrap">
                <div class="describe center">
                    <div class="dsp-table">
                        <div class="table-v-center">
                            <div class="main-secribe">
                                <h3>꿈과 희망이 가득한<br><span class="txt-under-deco">계명대학교 게임모바일공학과</span> 지원하세요!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php
        include_once("footer.html");
        ?>

    </div>

    <!-- 필수 자바스크립트 작성 -->
    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
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
            new daum.roughmap.Lander({
                "timestamp" : "1590481941690",
                "key" : "yj6r",
                "mapHeight" : "360"
            }).render();

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
