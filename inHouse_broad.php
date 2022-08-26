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
    <script src="./js/inHouse_broad.js"></script>
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
    <link rel="stylesheet" href="./css/inHouse_broad.css">
    <!-- 개별 페이지 스타일 end -->
</head>
<body>
  
   <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/header.php"; ?>
    
    <!-- 페이지 맵 네비게이션 시작 -->
    <div class="main">
        <div class="sub_main__visual">
            
           <div class="sub_main_tit">
               <h1 class="page_tit">사내방송광고</h1>
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
                                <li><a href="./offline.php" class="">오프라인광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./inHouse_broad.php" class="on">사내방송광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>

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
                            <div class="text_box">
                                <h2 class="title_st1">
                                    첸노와 함께 하세요!
                                </h2>
                                <p class="text_st1">
                                    디지털 방송 기반의 상품 정보 제공 시스템, 초음파 신호를 포함한 <br class="hide_680"> 디지털 방송 시스템과 이를 이용한 외부기기 동작 방법 등 <br class="hide_680"> 많은 특허와 기업부설 연구소 인증을 받은 첸노의 발전은 무궁무진합니다.
                                </p>
                            </div>
                            <div class="img_box">   
                                <img src="./img/inhouse_certification_1.png" alt="#">
                                <img src="./img/inhouse_certification_2.png" alt="#">
                                <img src="./img/inhouse_certification_3.png" alt="#">
                                <br class="show_1180">
                                <img src="./img/inhouse_certification_4.png" alt="#" class="margin_top">
                                <img src="./img/inhouse_certification_5.png" alt="#" class="margin_top">
                            </div>
                        </div>
                    </article>
                    <article class="section2">
                        <div class="section2_text_box">
                            <p class="little_title">INHOUSE BROADCAST</p>
                            <h4 class="title_st_1">사내광고</h4>
                            <span class="text_st_1">IP네트워크와 위성방송을 통해 고객맞춤형 시스템을 개발합니다.</span>
                        </div>
                        <div class="section2_bg_box">
                            <img src="./img/inhouse_section2_bg_1.png" alt="#" class="pc_img">
                            <img src="./img/inhouse_section2_bg_1_mo.png" alt="#" class="mo_img">
                        </div>
                        <div class="section2_img_box">
                            <div class="section2_img_box_inner">
                                <img src="./img/inhouse_icon_1.png" alt="#" class="pc_img">
                                <img src="./img/inhouse_icon_2.png" alt="#" class="pc_img">
                                <img src="./img/inhouse_icon_1_mo.png" alt="#" class="mo_img">
                                <img src="./img/inhouse_icon_2_mo.png" alt="#" class="mo_img">
                            </div>
                        </div>
                    </article>
                </div>
            </section>
    <!-- 페이지 레이아웃 끝 -->

    
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
    
</body>
</html>