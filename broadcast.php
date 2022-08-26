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

    <title>:: CENNO :: 오시는 길</title>

    <!-- 폰트어썸 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/3de435d34b.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="./js/jquery.mousewheel.min.js"></script>
    <script src="./js/jquery-ui.min.js"></script>

    <!-- 폰트 -->
    <link rel="stylesheet" href="./css/font.css">
    <!-- 폰트 -->
    
    <!-- 기본 css start -->
    <link rel="stylesheet" href="./css/default.css">
    <!-- 기본 css end -->

    <!-- scroll animation script start -->
    <script src="./js/broadcast.js"></script>
    <!-- scroll animation script end -->

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

    <!-- 개별 페이지 스타일 start -->
    <link rel="stylesheet" href="./css/broadcast.css">
    <!-- 개별 페이지 스타일 end -->
</head>
<body>
  
   <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/header.php"; ?>
    
    <!-- 페이지 맵 네비게이션 시작 -->
    <div class="main">
        <div class="sub_main__visual">
            
           <div class="sub_main_tit">
               <h1 class="page_tit">TV방송광고</h1>
            <span class="page_line"></span>
            <p>광고 그이상의 의미, 광고를 위한 힌트를 얻다</p>
           </div>
        </div>
        <div id="bo_ser">
            <div class="bo_ser_box">
                <div class="page_nav">
                    <a href=""><i class="fa-solid fa-house-chimney"></i> HOME</a>
                    <a href="">광고서비스</a>
                    <div>광고서비스<i class="fa-solid fa-chevron-down"></i>
                        <div class="page_nav__sub">
                            <ul>
                                <li><a href="./online.php" class="">온라인광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./broadcast.php" class="on">TV방송광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./offline.php" class="">오프라인광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./inHouse_broad.php" class="">사내방송광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- 페이지 맵 네비게이션 끝 -->

    <!-- 페이지 레이아웃 시작 -->
    <section class="page_wrap">
                <div class="page_wrap_inner">
                    <article class="section1">
                        <figure>
                            <img src="./img/broadcast_section_1.png" alt="#">
                        </figure>
                    </article>
                    <article class="section2">
                        <div class="section2_title_box">
                            <p class="little_title">TVBROADCAST</p>
                            <h4 class="title_st_1">TV 방송 광고</h4>
                            <span class="text_st_1">YTN, tvN, JTBC 등 프로그램을 공급하는 방송사를 통해 <br class="show_780"> 전국에 송출되는 광고 <br class="hide_780"> 전국적으로 약 3,200만 가구에 <br class="show_780"> 지역케이블, IPTV, 위성방송을 통해 송출합니다.</span>
                        </div>
                        <div class="section2_logo_box">
                            <img src="./img/broadcast_logo_1.png" alt="#">
                            <img src="./img/broadcast_logo_2.png" alt="#">
                            <img src="./img/broadcast_logo_3.png" alt="#">
                            <img src="./img/broadcast_logo_4.png" alt="#">
                            <img src="./img/broadcast_logo_5.png" alt="#">
                            <img src="./img/broadcast_logo_6.png" alt="#">
                            <img src="./img/broadcast_logo_7.png" alt="#">
                            <img src="./img/broadcast_logo_8.png" alt="#">
                            <img src="./img/broadcast_logo_9.png" alt="#">
                        </div>
                        <div class="section2_img_box">
                            <img src="./img/broadcast_section2_1.png" alt="#">
                            <img src="./img/broadcast_section2_2.png" alt="#">
                            <img class="last_child" src="./img/broadcast_section2_3.png" alt="#">
                        </div>
                    </article>
                    <article class="section3">
                        <div class="section3_inner">
                            <div class="section3_flex_box">
                                <div class="inner_box_1 inner_box">
                                    <div class="fr_count">
                                        <img src="./img/broadcast_count_1.png" alt="#">
                                    </div>
                                    <div class="fr_img">
                                        <img src="./img/broadcast_cl_1.png" alt="#">
                                        <div class="fr_text_box">
                                            <p class="text_st_2">유료 가입자를 대상으로 한 <br> 전국단위 방송광고</p>
                                            <span class="text_st_3">SK(BTV), KT(OLLEHTV), LG(U+TV) 등</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner_box_2 inner_box">
                                    <div class="fr_count">
                                        <img src="./img/broadcast_count_2.png" alt="#">
                                    </div>
                                    <div class="fr_img">
                                        <img src="./img/broadcast_cl_2.png" alt="#">
                                        <div class="fr_text_box">
                                            <p class="text_st_2">방송국에서 송출하는 <br> 전국단위 방송광고</p>
                                            <span class="text_st_3">KBS, SBS, MBC, YTN, OCN 등 <br class="show_1300"><br class="show_1300"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section3_flex_box">
                                <div class="inner_box_3 inner_box">
                                    <div class="fr_count">
                                        <img src="./img/broadcast_count_3.png" alt="#">
                                    </div>
                                    <div class="fr_img">
                                        <img src="./img/broadcast_cl_3.png" alt="#">
                                        <div class="fr_text_box">
                                            <p class="text_st_2">유료 가입자를 대상으로 한 <br> 전국단위 방송광고</p>
                                            <span class="text_st_3">SK(BTV), KT(OLLEHTV), LG(U+TV) 등</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner_box_4 inner_box">
                                    <div class="fr_count">
                                        <img src="./img/broadcast_count_4.png" alt="#">
                                    </div>
                                    <div class="fr_img">
                                        <img src="./img/broadcast_cl_4.png" alt="#">
                                        <div class="fr_text_box">
                                            <p class="text_st_2">2-8분 동안 홈쇼핑과 같은 <br> 효과를 내는 광고</p>
                                            <span class="text_st_3">공중파, 케이블, IPTV 등 <br class="show_1300"><br class="show_1300"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="section4">
                        <img src="./img/broadcast_chart_1.png" alt="#">
                    </article>
                </div>
            </section>
    <!-- 페이지 레이아웃 끝 -->

    
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
    
</body>
</html>