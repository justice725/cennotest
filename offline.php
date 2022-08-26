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
    <script src="./js/offline.js"></script>
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
    <link rel="stylesheet" href="./css/offline.css">
    <!-- 개별 페이지 스타일 end -->
</head>
<body>
  
   <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/header.php"; ?>
    
    <!-- 페이지 맵 네비게이션 시작 -->
    <div class="main">
        <div class="sub_main__visual">
            
           <div class="sub_main_tit">
               <h1 class="page_tit">오프라인광고</h1>
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
                                <li><a href="./broadcast.php" class="">TV방송광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./offline.php" class="on">오프라인광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
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
                        <div class="section1_inner">
                            <div class="logo_box">
                                <img src="./img/offline_section1_logo.png" alt="#">
                            </div>
                            <div class="text_box">
                                <p class="text_st_1">유동인구가 많은 곳에 광고를 진행해 <br class=""> 다양한 미디어를 통해 <span>소비자의 구매 욕구와 <br class=""> 브랜드에 대한 인지</span>를 상승시켜줍니다.</p>
                            </div>
                            <div class="icon_box">
                                <div class="icon_flex_box margin_rgt">
                                    <img src="./img/offline_icon_1.png" alt="#" class="off_icon">
                                    <img src="./img/offline_arrow.png" alt="#" class="arrow">
                                    <img src="./img/offline_icon_2.png" alt="#" class="off_icon">
                                    <img src="./img/offline_arrow.png" alt="#" class="arrow">
                                    <img src="./img/offline_icon_3.png" alt="#" class="off_icon">
                                </div>
                                <div class="icon_flex_box icon_box_sec">
                                    <img src="./img/offline_arrow.png" alt="#" class="arrow">
                                    <img src="./img/offline_icon_4.png" alt="#" class="off_icon">
                                    <img src="./img/offline_arrow.png" alt="#" class="arrow">
                                    <img src="./img/offline_icon_5.png" alt="#" class="off_icon">
                                    <img src="./img/offline_arrow.png" alt="#" class="arrow">
                                    <img src="./img/offline_icon_6.png" alt="#" class="off_icon">
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="section2">
                        <div class="section2_inner">
                            <div class="section2_title_box">
                                <p class="little_title">OFFLINE</p>
                                <h4 class="title_st_1">오프라인광고</h4>
                                <span class="text_st_1">접촉기회가 최대한으로 노출될 수 있는 오프라인의 광고입니다.</span>
                            </div>
                            <div class="card_box">
                                <div class="card_1 margin_bot">
                                    <figure>
                                        <img src="./img/offline_card_1.png" alt="#">
                                    </figure>
                                    <div class="card_text_box">
                                        <p class="text_st_2">
                                            지하철/터미널 광고
                                        </p>
                                        <span class="text_st_3">
                                            대중교통 이동 중이나 대기 중에 접하는 광고 <br class=""> 지하철 역사 내, 대합실 스크린보드 등
                                        </span>
                                    </div>
                                </div>
                                <div class="card_1 margin_bot card_sec">
                                    <figure>
                                        <img src="./img/offline_card_2.png" alt="#">
                                    </figure>
                                    <div class="card_text_box">
                                        <p class="text_st_2">
                                            미디어보드
                                        </p>
                                        <span class="text_st_3">
                                            밀폐공간에서의 강한 집중효과가 있는 광고 <br class=""> 엘리베이터에 설치된 스크린 보드 등
                                        </span>
                                    </div>
                                </div>
                                <div class="card_1 margin_bot">
                                    <figure>
                                        <img src="./img/offline_card_3.png" alt="#">
                                    </figure>
                                    <div class="card_text_box">
                                        <p class="text_st_2">
                                            옥외광고
                                        </p>
                                        <span class="text_st_3">
                                            시선이 가는 광고를 유도하여 유동인구가 <br class=""> 많은 곳에 쉽게 노출
                                        </span>
                                    </div>
                                </div>
                                <div class="card_1">
                                    <figure>
                                        <img src="./img/offline_card_4.png" alt="#">
                                    </figure>
                                    <div class="card_text_box">
                                        <p class="text_st_2">
                                            야립광고
                                        </p>
                                        <span class="text_st_3">
                                            고속도로를 지나는 사용 고객들에게 <br class=""> 자연스럽게 홍보 가능
                                        </span>
                                    </div>
                                </div>
                                <div class="card_1 card_sec mar_res_1133">
                                    <figure>
                                        <img src="./img/offline_card_5.png" alt="#">
                                    </figure>
                                    <div class="card_text_box">
                                        <p class="text_st_2">
                                            버스배너 광고
                                        </p>
                                        <span class="text_st_3">
                                            정류장과 도로에서 노출 빈도가 높고 <br class=""> 버스 내부, 외부에 미디어 홍보 가능
                                        </span>
                                    </div>
                                </div>
                                <div class="card_1 mar_1133">
                                    <figure>
                                        <img src="./img/offline_card_6.png" alt="#">
                                    </figure>
                                    <div class="card_text_box">
                                        <p class="text_st_2">
                                            쇼핑센터 건물 광고
                                        </p>
                                        <span class="text_st_3">
                                            직접적인 목적을 가지고 온 고객에게 <br class=""> 구매욕구를 불러일으키는 광고
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
    <!-- 페이지 레이아웃 끝 -->

    
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
    
</body>
</html>