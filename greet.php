<?php 
  include $_SERVER['DOCUMENT_ROOT']."/homepage/data/dbconfig.php";
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="첸노_서브페이지">
    <meta name="keywords" content="첸노_서브페이지">
    <meta name="author" content="첸노_서브페이지">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <title>:: CENNO :: CEO 인사말</title>

    <!-- 폰트어썸 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/3de435d34b.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="./js/jquery.mousewheel.min.js"></script>
    <script src="./js/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="./css/font.css">
    <!-- 기본 css start -->
    <link rel="stylesheet" href="./css/default.css">
    <!-- 기본 css end -->

    <!-- 개별 스타일 start -->
    <link rel="stylesheet" href="./css/greet.css">
    <!-- 개별 스타일 end -->

    <!-- scroll animation script -->
    <script src="./js/greet.js"></script>

    <!-- 첸노 헤더 start -->
    <link rel="stylesheet" href="./css/header.css">
    <script src="./js/header.js"></script>
    <script src="./js/sub_nav.js"></script>
    <!-- 첸노 헤더 end -->

    <!-- 첸노 푸터 start -->
    <link rel="stylesheet" href="./css/footer.css">
    <!-- 첸노 푸터 end -->

    <!-- 반응형 쿼리 start -->
    <link rel="stylesheet" href="./css/common_media.css">
    <!-- 반응형 쿼리 end -->
</head>

<body>

    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/header.php"; ?>


    <!-- 페이지 맵 네비게이션 시작 -->
    <div class="main">
        <div class="sub_main__visual">

            <div class="sub_main_tit">
                <h1 class="page_tit">CEO 인사말</h1>
                <span class="page_line"></span>
                <p>광고 그이상의 의미, 광고를 위한 힌트를 얻다</p>
            </div>
        </div>
        <div id="bo_ser">
            <div class="bo_ser_box">
                <div class="page_nav">
                    <a href=""><i class="fa-solid fa-house-chimney"></i> HOME</a>
                    <a href="">기업소개</a>
                    <div>CEO인사말<i class="fa-solid fa-chevron-down"></i>
                        <div class="page_nav__sub">
                            <ul>
                                <li><a href="./introduce.php">회사 소개<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./greet.php" class="on">CEO 인사말<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./history.php" class="">회사 연혁<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./map.php" class="">오시는 길<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- 페이지 맵 네비게이션 끝 -->
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@ 헤더 페이지 변경 x @@@@@@@@@@@@@@@@@@@@@@@@ -->

    <!-- @@@@@@@@@@@@@@@@@@@@@@@@ 페이지 수정start @@@@@@@@@@@@@@@@@@@@@@@@ -->
    <!-- 페이지 레이아웃 시작 -->
    <div class="page_wrap">
        <div class="sec0_bg_txt">
            <p class="bold paralax_title">CEO Message</p>
        </div>
        <div class="page_center">
            <div class="page_title_flex">
                <h2>CEO Message</h2>
            </div>
            <div class="text_box">
                <div class="bold">
                    <p class="bold_ani_1">안녕하십니까?</p> <br class="hide_766">
                    <p class="bold_ani_2">주식회사 첸노 <strong>대표 고성욱</strong>입니다. </p>
                </div>
                <div class="com_box">
                    <div class="comment">
                        <p class="com_ani_1">저희 이엠넷은 2000년 설립 이후 국내 디지털 광고 시장을 리딩하는 No.1 기업으로 성장하였으며, 2018년 이엠넷 재팬의 일본 주식시장 상장으로 글로벌 기업으로서의 초석을 다졌습니다.</p>
                        <p class="com_ani_2">오늘날의 이엠넷이 있기까지 이엠넷을 믿고 응원해주신 4만여 광고주분들과 관계자분들께 깊은 감사의 인사를 드립니다.</p>
                        <p class="com_ani_3">최신의 테크놀로지, 최고의 크리에이티브, 최상의 플래닝과 이엠넷의 열정으로 성공전략을 만들고 광고주 여러분의 가치를 극대화할 수 있도록 노력하겠습니다.</p>
                        <p class="com_ani_4">언제나 그러했듯 신의를 잃지 않은 꼿꼿한 마음가짐과 시장을 꿰뚫어 보는 통찰력으로 유연하게 대응하며, 변화를 이끌어가는 개척 정신으로 여러분과 함께 성공을 나누겠습니다.</p>
                        <p class="com_ani_5">감사합니다.</p>
                    </div>
                    <div class="img_box">

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- 페이지 레이아웃 끝 -->
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@ 페이지 수정end @@@@@@@@@@@@@@@@@@@@@@@@ -->

    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>

</body>

</html>
