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
    <link rel="stylesheet" href="./css/map.css">
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
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@ 헤더 페이지 변경 x @@@@@@@@@@@@@@@@@@@@@@@@ -->

    <!--맵 링크 https://map.naver.com/v5/entry/place/1428834652?c=14179599.3402080,4351557.6841151,15,0,0,0,dh -->
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@ 페이지 수정end @@@@@@@@@@@@@@@@@@@@@@@@ -->
    <!-- 페이지 레이아웃 시작 -->
    <div class="page_wrap">
        <div class="sec0_bg_txt">
            <p class="bold paralax_title">Way To Come</p>
        </div>
        <div class="page_center">
            
            <div class="map_flex">
                <div class="left_title">
                    <h2>본사</h2>
                </div>
                <div class="right_box">
                    <div class="right_top">
                        <div class="right_top_animate">
                            <div class="txt_box">
                                <div class="Address">
                                    <div class="h">주소</div>
                                    <div class="t">대전광역시 서구 둔산대로 117번길 95(리더스타운, 7층)</div>
                                </div>
                                <div class="call">
                                    <div class="h">전화번호</div>
                                    <div class="t">042 - 489 - 7994</div>
                                </div>
                                <div class="fax">
                                    <div class="h">팩스</div>
                                    <div class="t">042 - 489 - 7995</div>
                                </div>
                            </div>
                            <div class="map_link_box">
                                <a href="https://map.naver.com/v5/entry/place/1428834652?c=14179599.3402080,4351557.6841151,15,0,0,0,dh" target="_blank" class="link_btn"><i class="fa-solid fa-location-dot"></i>길찾기</a>
                            </div>
                        </div>
                    </div>
                    <div class="right_bot">
                        <div id="map"></div>
                        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=키입력"></script>
                        <script>
                            var container = document.getElementById('map');
                            var option = {
                                center : new kakao.maps.LatLng(위도, 경도), // 지도 중심좌표
                                level: 3 , // 확대수준(기본값 : 3)
                                draggalbe: true, // 마우스 드래그, 휠, 모바일 터치를 이용한 시점 변경 여부
                                scrollwheel : true, // 마우스 휠, 모바일 터치를 이용한 확대 및 축소 가능 여부
                                

                            };

                            var map = new kakao.maps.Map(container, options);
                        </script>
                    </div>
                </div>
            </div>
            <div class="context_us">
                <div class="context_title">
                    Contact Us
                </div>
                <div class="show_767">
                    서울 
                </div>
                <table>
                        <tbody class="table_animate_1">
                            <tr>
                                <th colspan="1">연구센터</th>
                                <td>
                                    <dl>
                                        <dd>연세대학교 산학연구원</dd>
                                        <dd><span class="h">TEL</span>02 - 3457 - 4600</dd>
                                        <dd><span class="h">FAX</span>02 - 3457 - 4614</dd>
                                    </dl>
                                </td>
                            </tr>
                        </tbody>
                </table>
                <div class="show_767">
                    대전
                </div>
                <table>
                    <tbody class="table_animate_2">
                        <tr>
                            <th colspan="1">연구센터</th>
                            <td>
                                <dl>
                                    <dd>연세대학교 산학연구원</dd>
                                    <dd><span class="h">TEL</span>02 - 3457 - 4600</dd>
                                    <dd><span class="h">FAX</span>02 - 3457 - 4614</dd>
                                </dl>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- 페이지 레이아웃 끝 -->
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@ 페이지 수정end @@@@@@@@@@@@@@@@@@@@@@@@ -->
    
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
    
</body>
</html>