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
    <script src="./js/map.js"></script>
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
    
    <!-- 개별 페이지 스타일 end -->
</head>
<body>
  
   <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/header.php"; ?>
    
    <!-- 페이지 맵 네비게이션 시작 -->
    <div class="main">
        <div class="sub_main__visual">
            
           <div class="sub_main_tit">
               <h1 class="page_tit">오시는 길</h1>
            <span class="page_line"></span>
            <p>광고 그이상의 의미, 광고를 위한 힌트를 얻다</p>
           </div>
        </div>
        <div id="bo_ser">
            <div class="bo_ser_box">
                <div class="page_nav">
                    <a href=""><i class="fa-solid fa-house-chimney"></i> HOME</a>
                    <a href="">기업소개</a>
                    <div>오시는 길<i class="fa-solid fa-chevron-down"></i>
                        <div class="page_nav__sub">
                            <ul>
                                <li><a href="./introduce.php" class="">회사 소개<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./greet.php" class="">CEO 인사말<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./history.php" class="">회사 연혁<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./map.php" class="on">오시는 길<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- 페이지 맵 네비게이션 끝 -->

    <!-- 페이지 레이아웃 시작 -->
    <div class="page_wrap">
        
    </div>
    <!-- 페이지 레이아웃 끝 -->

    
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
    
</body>
</html>