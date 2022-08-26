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
    <script src="./js/online.js"></script>
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
    <link rel="stylesheet" href="./css/online.css">
    <!-- 개별 페이지 스타일 end -->
</head>
<body>
  
   <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/header.php"; ?>
    
    <!-- 페이지 맵 네비게이션 시작 -->
    <div class="main">
        <div class="sub_main__visual">
            
           <div class="sub_main_tit">
               <h1 class="page_tit">온라인광고</h1>
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
                                <li><a href="./online.php" class="on">온라인광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./broadcast.php" class="">TV방송광고<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
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
                        
                        <div class="section1_inner">
                            <div class="col_left">
                                <div class="col_left_top">
                                    <p class="title_st_2">
                                        OUR BUSINESS
                                    </p>
                                    <div class="flex_row">
                                        <h2 class="title_st_1">
                                            광고 그 이상의 <br class="hide_720"> 가치를 전하는
                                        </h2>
                                        <img src="./img/online_logo_1.png" alt="#">
                                    </div>
                                    
                                </div>
                                <div class="col_left_bot">
                                    <h2 class="title_st1">
                                        이런 분들께 추천드립니다.
                                    </h2>
                                    <div class="hashtag_box">
                                        <button class="hashtag">#마케팅</button>
                                        <button class="hashtag">#키워드</button>
                                        <button class="hashtag">#광고집행</button>
                                    </div>
                                    <div class="section1_text_box">
                                        <p class="text_st_1">
                                            디스플레이 노출을 통해 홍보의 효과를 극대화하고 싶으신 분들
                                        </p>
                                        <p class="text_st_1">
                                            트렌드에 맞게 틱톡, 웨이브, 네이버TV 등에 자연스럽게 노출시키고 싶으신 분들
                                        </p>
                                        <p class="text_st_1">
                                            검색어를 통해 상단에 노출하고 싶은데 어떻게 시작해야 할 지 막막하신 분들
                                        </p>
                                        <p class="text_st_1">
                                            편하게 마케팅 전반적인 부분을 맡기고 업무에만 집중하고 싶으신 분들
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col_right">
                                <figure>
                                    <img src="./img/online_section1_main_1.png" alt="#">
                                </figure>
                            </div>
                        </div>
                        <div class="sec0_bg_txt">
                            <p class="bold paralax_title">ADVERTISEMENT</p>
                        </div>
                        
                    </article>
                    <article class="section2">
                        <div class="section2_inner">
                            <div class="section2_text_box">
                                <p class="text_st_1">노하우로 집결된 <br class="show_560"> 첸노의 기획력</p>
                                <h2 class="title_st_1">온라인광고</h2>
                            </div>
                            <div class="section2_card_box">
                                <div class="card_1 card">
                                    <img src="./img/online_section2_icon_1.png" alt="#">
                                    <h2 class="title_st_2">검색광고</h2>
                                    <p class="text_st_3">저가 검색 시, 상품 링크가 최상단에 노출</p>
                                    <p class="text_st_3">네이버, 다음카카오, 구글 등</p>
                                    <div class="absolute_box">
                                        <img src="./img/online_section2_ab_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="card_1 card card_mar">
                                    <img src="./img/online_section2_icon_1.png" alt="#">
                                    <h2 class="title_st_2">디스플레이광고</h2>
                                    <p class="text_st_3">주목받을 수 있는 곳에 노출해 반응을 유도</p>
                                    <p class="text_st_3">포털, 인터넷 신문 등</p>
                                    <div class="absolute_box">
                                        <img src="./img/online_section2_ab_2.png" alt="#">
                                    </div>
                                </div>
                                <div class="card_1 card">
                                    <img src="./img/online_section2_icon_1.png" alt="#">
                                    <h2 class="title_st_2">영상광고</h2>
                                    <p class="text_st_3">영상 컨텐츠를 소비하며 자연스럽게 노출</p>
                                    <p class="text_st_3">틱톡, 웨이브, 유튜브, 네이버TV, 카카오TV</p>
                                    <div class="absolute_box">
                                        <img src="./img/online_section2_ab_3.png" alt="#">
                                    </div>
                                </div>
                                <div class="card_2 card">
                                    <img src="./img/online_section2_logo_1.png" alt="#">
                                </div>
                                <div class="card_1 card card_mar">
                                    <img src="./img/online_section2_icon_1.png" alt="#">
                                    <h2 class="title_st_2">바이럴광고</h2>
                                    <p class="text_st_3">입소문 효과로 광고비 이상의 효과 기대</p>
                                    <p class="text_st_3">블로그, 카페 등</p>
                                    <div class="absolute_box">
                                        <img src="./img/online_section2_ab_4.png" alt="#">
                                    </div>
                                </div>
                                <div class="card_1 card">
                                    <img src="./img/online_section2_icon_1.png" alt="#">
                                    <h2 class="title_st_2">SNS광고</h2>
                                    <p class="text_st_3">일상생활 플랫폼에 자연스럽게 침투</p>
                                    <p class="text_st_3">페이스북, 인스타그램, 카카오스토리, 밴드 등</p>
                                    <div class="absolute_box">
                                        <img src="./img/online_section2_ab_5.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="section3">
                        <div class="section3_inner">
                            <div class="section3_text_box">
                                <p class="text_st_1">검색광고</p>
                                <h2 class="title_st_1">검색창에 검색시,<br class="show_560"> 키워드를 통해 <br class="show_1140"> 고객이 원하는 <br class="hide_1140"> 사이트를 보여주는 광고</h2>
                                <span class="text_st_2">광고의 중점인 메세지를 전달하기 위해 고객의 검색의도를 파악해 키워드를 전달하고 <br class="hide_560"> 잠재적 고객을 유치하여 구매를 촉진시키며 저렴한 가격으로 진행이 가능합니다.</span>
                            </div>
                            <div class="section3_card_box">
                                <div class="card_3">
                                    <img src="./img/online_section3_card_1.png" alt="#">
                                    <div class="card_text_box">
                                        <p class="text_st_4">높은 효율과 명확한 타게팅</p>
                                        <div class="under_line"></div>
                                        <p class="text_st_1">사용자의 의도가 반영된 키워드를 기반으로 원하는 타겟에게 광고 노출</p>
                                        <p class="text_st_2">Active User</p>
                                        <p class="text_st_2">Pull 방식</p>
                                        <p class="text_st_2">Target Marketing</p>
                                    </div>
                                </div>
                                <img src="./img/online_section3_arrow_1.png" alt="#" class="margin_min">
                                <div class="card_3">
                                    <img src="./img/online_section3_card_2.png" alt="#">
                                    <div class="card_text_box">
                                        <p class="text_st_4">탄련적인 광고운영 가능</p>
                                        <div class="under_line"></div>
                                        <p class="text_st_1">광고 노출, 예산, 소재 등의 설정이 용이하므로 탄력적인 광고 운영이 가능</p>
                                        <p class="text_st_2">노출 기간</p>
                                        <p class="text_st_2">예산 설정</p>
                                        <p class="text_st_2">소재의 작성과 변경</p>
                                    </div>
                                </div>
                                <img src="./img/online_section3_arrow_1.png" alt="#" class="margin_min">
                                <div class="card_3">
                                    <img src="./img/online_section3_card_3.png" alt="#">
                                    <div class="card_text_box">
                                        <p class="text_st_4">실시간으로 효과 분석</p>
                                        <div class="under_line"></div>
                                        <p class="text_st_1">키워드 조회수 기준이 아닌 클릭 또는 키워드 노출 기간에 따라 과금되는 고객 맞춤형 합리적 요금체계</p>
                                        <p class="text_st_2">클릭초이스(CPC):클릭당 과금</p>
                                        <p class="text_st_2">타임초이스(CPT):기간당 과금</p>
                                    </div>
                                </div>
                                <img src="./img/online_section3_arrow_1.png" alt="#" class="margin_min">
                                <div class="card_3">
                                    <img src="./img/online_section3_card_4.png" alt="#">
                                    <div class="card_text_box">
                                        <p class="text_st_4">합리적인 요금체계</p>
                                        <div class="under_line"></div>
                                        <p class="text_st_1">다양한 광고 효과를 객관적 수치로 제공, 실시간 측정 관리를 통해 최적화를 실현</p>
                                        <p class="text_st_2">실시간 측정</p>
                                        <p class="text_st_2">관리 후 지속적인 개선</p>
                                        <p class="text_st_2">키워드 광고 최적화 실현</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="section4">
                        <div class="section4_inner">
                            <div class="section4_text_box">
                                <p class="text_st_1">
                                    광고프로세스
                                </p>
                                <h2 class="title_st_1">네이버 키워드 광고</h2>
                                <span class="text_st_2">네이버 키워드광고는 각 단계별 전략적 운영을 실시, 지속적인 광고 관리에 의한 개선을 통해 광고효과를 높이고 최적화합니다.</span>
                            </div>
                            <div class="section4_card_box">
                                <div class="card_4">
                                    <div class="absolute_box">
                                        <div class="count_box">
                                            01
                                        </div>
                                    </div>
                                    <div class="img_box">
                                        <img src="./img/online_section4_card_1.png" alt="#">
                                    </div>
                                    <h2 class="title_st_2">사이트 리뷰</h2>
                                    <p class="text_st_2">사이트에서 제공하는 서비스와 사용자의 <br class="hide_660"> 특성, 이동경로 등을 꼼꼼히 확인</p>
                                </div>
                                <img src="./img/online_section4_arrow_1.png" alt="#" class="section4_arrow">
                                <div class="card_4">
                                    <div class="absolute_box">
                                        <div class="count_box">
                                            02
                                        </div>
                                    </div>
                                    <div class="img_box">
                                        <img src="./img/online_section4_card_2.png" alt="#">
                                    </div>
                                    <h2 class="title_st_2">키워드 선택</h2>
                                    <p class="text_st_2">사이트에 알맞은 키워드를 발굴하고 <br class="hide_660"> 다양한 방법으로 키워드 확장</p>
                                </div>
                                <img src="./img/online_section4_arrow_1.png" alt="#" class="section4_arrow">
                                <div class="card_4">
                                    <div class="absolute_box">
                                        <div class="count_box">
                                            03
                                        </div>
                                    </div>
                                    <div class="img_box">
                                        <img src="./img/online_section4_card_3.png" alt="#">
                                    </div>
                                    <h2 class="title_st_2">광고상품선택</h2>
                                    <p class="text_st_2">광고상품을 제대로 이해하고 키워드 <br class="hide_660"> 특성에 맞는 광고 상품과 순위 선택</p>
                                </div>
                                <img src="./img/online_section4_arrow_1.png" alt="#" class="section4_arrow mar_top">
                                <div class="card_4  mar_top">
                                    <div class="absolute_box">
                                        <div class="count_box">
                                            04
                                        </div>
                                    </div>
                                    <div class="img_box">
                                        <img src="./img/online_section4_card_4.png" alt="#">
                                    </div>
                                    <h2 class="title_st_2">광고소재작성</h2>
                                    <p class="text_st_2">잠재고객의 클릭을 이끌어내는 주요 광고 <br class="hide_660"> 요소로 타광고와 차별화된 광고문만 작성</p>
                                </div>
                                <img src="./img/online_section4_arrow_1.png" alt="#" class="section4_arrow mar_top">
                                <div class="card_4 mar_top">
                                    <div class="absolute_box">
                                        <div class="count_box">
                                            05
                                        </div>
                                    </div>
                                    <div class="img_box">
                                        <img src="./img/online_section4_card_5.png" alt="#">
                                    </div>
                                    <h2 class="title_st_2">광고효과분석</h2>
                                    <p class="text_st_2">광고효과 분석과 웹로그 분석을 통해 <br class="hide_660"> 키워드광고의 효과를 높이고 최적화함</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="section5">
                        <div class="section5_inner">
                            <div class="section5_text_box">
                                <p class="text_st_1">디스플레이 광고</p>
                                <h2 class="title_st_1">주목받을 수 있는 곳에 노출해 <br class="hide_560"> 반응을 유도하는 스마트한 광고</h2>
                                <span class="text_st_2">카카오톡, 카카오스토리, 다음, 카카오페이지 및 프리미엄 네트워크 서비스 지면에 노출되어지고 <br class="hide_560"> 카카오의 핵심 서비스와 주요 파트너 서비스를 중심으로 다양한 지면의 광고 영역에 보여집니다.</span>
                            </div>
                            <div class="logo_box">
                                <img src="./img/kakao_logo.png" alt="#">
                                <img src="./img/kakao_page_logo.png" alt="#">
                                <img src="./img/daum_logo.png" alt="#">
                                <img src="./img/kakao_story_logo.png" alt="#">
                            </div>
                            <div class="img_box">
                                <p class="text_st_3">동영상, 네이티브, 배너 등 다양한 광고 유형 지원</p>
                                <div class="card_box">
                                    <div class="card_5">
                                        <img src="./img/online_section5_card_1.png" alt="#">
                                        <p class="text_st_1">동영상 네이티브형</p>
                                    </div>
                                    <div class="card_5">
                                        <img src="./img/online_section5_card_2.png" alt="#">
                                        <p class="text_st_1">이미지 네이티브형</p>
                                    </div>
                                    <div class="card_5">
                                        <img src="./img/online_section5_card_3.png" alt="#">
                                        <p class="text_st_1">이미지 배너형</p>
                                    </div>
                                    <div class="card_5">
                                        <img src="./img/online_section5_card_4.png" alt="#">
                                        <p class="text_st_1">이미지 카탈로그형</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="section6">
                        <div class="section6_inner">
                            <div class="section6_text_box">
                                <p class="text_st_1">영상광고</p>
                                <h2 class="title_st_1">영상 컨텐츠를 이용하여 <br class=""> 자연스럽게 노출하는 광고</h2>
                                <span class="text_st_2">디지털 동영상 미디어 중에서 높은 도달률을 자랑하고 타겟팅 설정을 정교하게 <br class="hide_560"> 이용자 정보를 바탕으로 성별, 연련대, 관심사를 측정해 합리적인 과금방식으로 이용가능합니다.</span>
                            </div>
                            <div class="img_box">
                                <p class="text_st_3">대표적인 영상광고 타겟팅</p>
                                <div class="img_box_fr">
                                    <div class="flex_box">
                                        <div class="flex_box_fr">
                                            <img src="./img/online_section6_card_1.png" alt="#">
                                            <p class="blue_box">리마케팅</p>
                                        </div>
                                        <div class="w200">
                                            <p>홈페이지 방문 후 <br class=""> 이탈한 사용자들 대상 <br class=""> 리마케팅 가능</p>
                                        </div>
                                    </div>
                                    <div class="flex_box">
                                        <div class="flex_box_fr">
                                            <img src="./img/online_section6_card_2.png" alt="#">
                                            <p class="blue_box">성별/연령</p>
                                        </div>
                                        <div class="w200">
                                            <p>남/여, 알수없음과 <br class=""> 다양한 연령대 그룹 <br class=""> 타겟팅 가능</p>
                                        </div>
                                    </div>
                                    <div class="flex_box">
                                        <div class="flex_box_fr">
                                            <img src="./img/online_section6_card_3.png" alt="#">
                                            <p class="blue_box">컨텐츠</p>
                                        </div>
                                        <div class="w200">
                                            <p>데스크톱, 모바일, <br class=""> 타블렛으로 기기 <br class=""> 타겟팅 가능</p>
                                        </div>
                                    </div>
                                    <div class="flex_box">
                                        <div class="flex_box_fr">
                                            <img src="./img/online_section6_card_4.png" alt="#">
                                            <p class="blue_box">잠재고객</p>
                                        </div>
                                        <div class="w200">
                                            <p>구매의도, 관심분야, 생애 <br class=""> 중요 이벤트 등 잠재고객 <br class=""> 데이터 기반 타겟팅 가능</p>
                                        </div>
                                    </div>
                                    <div class="flex_box">
                                        <div class="flex_box_fr">
                                            <img src="./img/online_section6_card_5.png" alt="#">
                                            <p class="blue_box">기기</p>
                                        </div>
                                        <div class="w200">
                                            <p>특정 Youtube채널, <br class=""> 동영상, 앱, 웹사이트 <br class=""> 타겟팅 가능</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute_img_box">
                                <img src="./img/online_section6_main_1.png" alt="#">
                            </div>
                        </div>
                    </article>
                    <article class="section7">
                        <div class="section7_inner">
                            <div class="section7_text_box">
                                <h2 class="title_st_1">첸노의 합리적인 <br class="show_940"> 마케팅과 함께하세요!</h2>
                            </div>
                            <div class="section7_card_box">
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_1.png" alt="#">
                                    </div>
                                    <p class="text_st_1">
                                        성남시청 시정홍보
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_2.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        바이오혁신성장대전
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_3.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        성남시청 시정홍보
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_4.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        아모스팜-이반케어
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_5.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        아모스팜-쁘띠나인
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_6.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        아침에나라
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_7.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        주노글램핑
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_8.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        테크노월드
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_9.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        방위산업부품장비대전
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_10.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        이비가짬뽕
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_11.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        다비치안경
                                    </p>
                                </div>
                                <div class="card_6">
                                    <div class="card_img_box">
                                        <img src="./img/online_section7_card_12.png" alt="">
                                    </div>
                                    <p class="text_st_1">
                                        참치와 친구들
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="section8">
                        <div class="section8_inner">
                            <div class="section8_text_box">
                                <p class="text_st_1">
                                    SNS광고
                                </p>
                                <h2 class="title_st_1">일상생활 플랫폼에 <br class=""> 자연스럽게 침투하는 광고</h2>
                                <span class="text_st_2">사용자가 자주 쓰는 페이스북, 인스타그램, 카카오스토리, 밴드 등에 <br class="hide_560"> 타겟층에게 노출빈도를 높여 익숙하게 보여주는 광고</span>
                            </div>
                            <div class="section8_img_box">
                                <img src="./img/online_section8_phone_1.png" alt="#">
                                <img src="./img/online_section8_phone_2.png" alt="#">
                                <img src="./img/online_section8_phone_3.png" alt="#">
                            </div> 
                        </div>
                    </article>
                </div>
            </section>
    <!-- 페이지 레이아웃 끝 -->

    
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
    
</body>
</html>