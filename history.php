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

    <title>:: CENNO :: 회사연혁</title>

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

    <!-- 개별 스타일 -->
    <link rel="stylesheet" href="./css/history.css">
    <!-- 개별 스타일 -->

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
               <h1 class="page_tit">회사연혁</h1>
            <span class="page_line"></span>
            <p>광고 그이상의 의미, 광고를 위한 힌트를 얻다</p>
           </div>
        </div>
        <div id="bo_ser">
            <div class="bo_ser_box">
                <div class="page_nav">
                    <a href=""><i class="fa-solid fa-house-chimney"></i> HOME</a>
                    <a href="">기업소개</a>
                    <div>회사 연혁<i class="fa-solid fa-chevron-down"></i>
                        <div class="page_nav__sub">
                            <ul>
                                <li><a href="./introduce.php" class="">회사 소개<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./greet.php" class="">CEO 인사말<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./history.php" class="on">회사 연혁<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
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
    <div class="page_wrap" id="history">
        <div class="sec0_bg_txt">
            <p class="bold paralax_title">Brand History</p>
        </div>
            <div class="page_center">
                <div class="title_box">
                    <div class="left_box">
                        <p class="bold">HISTORY</p>
                        <h2>우리의 유일한 목표는 파트너사의 성공입니다.</h2>
                    </div>
                    <div class="right_box">
                        <p>
                            CENNO는 이탈리아어로 신호, 지시, 통지, 알림, 암시, 힌트 등을 의미하는 단어입니다. <br><br> 첸노라는 단어에는 새로운 가치창조를 위한 융합적 사고와 소비자 중심의 기술개발로 고객의 비즈니스에 힌트가 되겠다는 첸노의 다짐을 담고 있습니다. <br><br> 우리의 모든 구성원은 전문가입니다. 경험도 풍부하죠. 고객의 니즈를 파악하고 결과물에 반영하는 것. 그것은 우리가 가장 잘하는 일입니다. <br><br> 지금부터 소개 할 우리의 이야기는 우리의 다짐을 담고 있습니다. CENNO를 통해 우리의 미래가 어떻게 달라질지 직접 경험해보세요.
                        </p>
                    </div>
                    
                </div>
                <div class="center_box">
                    <div class="center_box_animate_1">
                        <p>THE WAY WE WORK</p>
                    </div>
                    <div class="center_box_animate_2">
                        <div class="card_1">
                            <h2>Cooperation</h2>
                            <p class="txt01">우리는 <span>협력</span> 합니다</p>
                            <p class="txt02">혼자 보다는 함께 할 때, <br> 꿈은 보다 가까운 곳에 와 있습니다.</p>
                        </div>
                        <div class="card_2">
                            <h2>Transparency</h2>
                            <p class="txt01">정보는 <span>공유 </span>합니다</p>
                            <p class="txt02">정보의 투명한 공유는 일의 효율을 높이고, <br> 서로 간의 신뢰를 높입니다.</p>
                        </div>
                        <div class="card_3">
                            <h2>Simplicity</h2>
                            <p class="txt01">본질에 <span>집중 </span>합니다</p>
                            <p class="txt02">목적을 달성하기 위해 본질에 집중합니다.<br> 본질은 우리 생각보다 간단합니다.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="year">
                        <div id="box" class="yearBox">
                            <h1>2018</h1>
                            <div class="line">
                                <svg viewBox="0 0 32 32">
                                    <g fill="none" stroke-width="8" >
                                        <circle cx="16" cy="16" r="16" stroke="none"></circle>
                                        <circle cx="16" cy="16" r="12" fill="none"></circle>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="month">
                        <table data-year="2018">
                            <tbody>
                                <tr>
                                    <th>3월</th>
                                    <td>
                                        주식회사 첸노 법인 설립
                                        <br> KB증권 사내방송 시스템 유지보수 계약 체결
                                        <br> KT skylife 공식 광고대행사 등록
                                    </td>
                                </tr>
                                <tr>
                                    <th>8월</th>
                                    <td>
                                        통신판매업 신고
                                    </td>
                                </tr>
                                <tr>
                                    <th>10월</th>
                                    <td>
                                        기업부설연구소 설립 인증
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>12월</th>
                                    <td>
                                        성남시청 시정홍보 광고(IPTV) 수주
                                        <br> 한국언론진흥재단 공식광고대행사 / 매체사 등록
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table data-year="2019">
                            <tbody>
                                <tr>
                                    <th>1월</th>
                                    <td>
                                        SK B tv(애니포인트미디어) 광고대행사 등록
                                        <br> CJ hello 광고대행사 등록(충남 전담대행사)
                                        <br> 쇼핑몰 "얼씨구넷" 오픈(중소기업 전문 쇼핑몰)
                                        <br> 경기도청 도정홍보 광고(IPTV) 수주
                                    </td>
                                </tr>
                                <tr>
                                    <th>5월</th>
                                    <td>
                                        기업부설연구소(부)설립(연세대학교 산학협력관)
                                        <br> 사회공헌활동 - 독립기념관 어린이날 행사 후원
                                    </td>
                                </tr>
                                <tr>
                                    <th>6월</th>
                                    <td>
                                        벤처기업 등록
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>8월</th>
                                    <td>
                                        광동제약 제품 방송광고 수주
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>9월</th>
                                    <td>
                                        2019년 지식재산기반 창업촉진산업(IP나래지원사업) 수행
                                        <br> 연합뉴스TV 방송광고 대행계약 체결
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table data-year="2020">
                            <tbody>
                                <tr>
                                    <th>1월</th>
                                    <td>
                                        온라인 광고시스템(어드민) 개발
                                        <br> 한국방송광고진흥공사(KOBACO) 광고대행사 등록
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>2월</th>
                                    <td>
                                        광동제약 침향환 종합 광고대행 수주
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>4월</th>
                                    <td>
                                        온라인 광고관리 시스템(분배시스템) 개발
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>7월</th>
                                    <td>
                                        창업성장개발사업 "디딤돌 창업과제" 수행
                                        <br> 초음파 통신을 적용한 디지털 방송 모바일광고플랫폼 개발 착수
                                    </td>
                                </tr>
                                <tr>
                                    <th>8월</th>
                                    <td>
                                        건강기능식품 판매업 신고
                                    </td>
                                </tr>
                                <tr>
                                    <th>11월</th>
                                    <td>
                                        자체 상품 개발 시작(상품기획 및 마케팅)
                                        <br> 일동생활건강 제품 종합 광고대행 수주
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table data-year="2021">
                            <tbody>
                                <tr>
                                    <th>1월</th>
                                    <td>
                                        특허등록 - 1 (초음파 신호를 포함한 디지털 방송 시스템과 이를 이용한 외부기기 동작방법)
                                    </td>
                                </tr>
                                <tr>
                                    <th>2월</th>
                                    <td>
                                        자체 기획상품 출시 "엉덩이탐정 제주 유기농 야채 젤리"
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>3월</th>
                                    <td>
                                        특허등록 - 2 (동기화 기반의 초음파 디지털 방송 시스템과 이를 이용한 외부기기 제어방법)
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>7월</th>
                                    <td>
                                        야채젤리 싱가포르 수출
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>8월</th>
                                    <td>
                                        특허등록 - 3 (디지털 방송기반의 상품정보 제공 시스템 및 방법)
                                    </td>
                                </tr>
                                <tr>
                                    <th>9월</th>
                                    <td>
                                        (주)첸노 본사 확장 이전
                                        <br> 야채젤리 초등학교 급식 납품시작
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table data-year="2022">
                            <tbody>
                                <tr>
                                    <th>2월</th>
                                    <td>
                                        콜센터용 고객관리시스템(CRM) 개발 착수
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    <!-- 페이지 레이아웃 끝 -->
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@ 페이지 수정end @@@@@@@@@@@@@@@@@@@@@@@@ -->
    
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
    
    <!-- 첸노 푸터 end -->
    <!-- 애니메이션 스크립트 연결 -->
    <script src="./js/history.js"></script>
    <!-- 애니메이션 스크립트 연결 -->
</body>
</html>