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

    <title>:: CENNO :: 회사소개</title>

    <!-- 폰트어썸 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/3de435d34b.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="./js/jquery.mousewheel.min.js"></script>
    <script src="./js/jquery-ui.min.js"></script>

    <script src="./js/introduce.js"></script>

    <link rel="stylesheet" href="./css/font.css">
    <!-- 기본 css start -->
    <link rel="stylesheet" href="./css/default.css"> <!-- 서브페이지 공통스타일도 같이 들어있음 -->

    <!-- 기본 css end -->

    <!-- 첸노 헤더 start -->
    <link rel="stylesheet" href="./css/header.css">
    <script src="./js/header.js"></script>
    <script src="./js/sub_nav.js"></script>
    <!-- 첸노 헤더 end -->

    <!-- 첸노 푸터 start -->
    <link rel="stylesheet" href="./css/footer.css">
    <!-- 첸노 푸터 end -->

    <!-- 개별 페이지 스타일 start -->
    <link rel="stylesheet" href="./css/introduce.css">
    <!-- 개별 페이지 스타일 end -->

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
                <h1 class="page_tit">CENNO</h1>
                <span class="page_line"></span>
                <p>광고 그이상의 의미, 광고를 위한 힌트를 얻다</p>
            </div>
        </div>
        <div id="bo_ser">
            <div class="bo_ser_box">
                <div class="page_nav">
                    <a href=""><i class="fa-solid fa-house-chimney"></i> HOME</a>
                    <a href="">기업소개</a>
                    <div>회사 소개<i class="fa-solid fa-chevron-down"></i>
                        <div class="page_nav__sub">
                            <ul>
                                <li><a href="./introduce.php" class="on">회사 소개<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./greet.php" class="">CEO 인사말<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./history.php" class="">회사 연혁<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                                <li><a href="./map.php" class="">오시는 길<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="page_wrap">
        <!-- <div class="gnb_bg">
                    <div class="gnb_bg_textBox">
                        <h4>광고 그 이상의 의미를 입히다</h4>
                        <img src="../img/textBox_img1.png" alt="#">
                        <h6>고객의 니즈를 파악해 <br> 가장 높은 효율을 경험하세요</h6>
                    </div>
                </div> -->
        <div class="section0">
            <div class="sec0_container">
                <div class="container_columns">
                    <div class="tit_holder">
                        <div class="txt_mask">
                            <span>누구나</span>
                        </div>
                        <div class="txt_mask">
                            <span>맘편히</span>
                        </div>
                        <div class="txt_mask">
                            <span>맡길 수 있게</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec0_bg_txt">
                <p class="bold paralax_title">Brand Mission</p>
            </div>
        </div>
        <div class="section0_1">
            <div class="sec0_1_container">
                <div class="container_columns animate_1">
                    <div class="col1-3">
                        <div class="txt_motion">
                            <h2 class="txt_mask"><span>Technology</span></h2>
                        </div>
                    </div>
                    <div class="col1-3 tech_animate">
                        <div class="card1 card1_1">
                            <div class="img_container">
                                <img src="./img/technology.png" alt="#">
                                <div class="img_holder">
                                    <div class="img_wrap">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text_wrap">
                                <div class="text_animate_1">
                                    <p>누구나 맘편히 맡길 수 있게</p>
                                </div>
                                <div class="text_animate_2">
                                    <h3>기술을 개발하는 회사</h3>
                                </div>
                                <div class="text_animate_3">
                                    <p>
                                        첸노는 자체 개발한 서버 기반 자동화 솔루션을 기업, 광고매체, 고객 등 데이터기반 광고산업에 적용해 글로벌 광고 마케팅 시장의 기술혁신을 선도합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col1-3"></div>
                </div>
                <div class="container_columns columns_right animate_2">
                    <div class="col1-3">

                    </div>
                    <div class="col1-3">
                        <div class="txt_motion txt_motion_right">
                            <h2 class="txt_mask"><span>Infomation</span></h2>
                        </div>
                    </div>
                    <div class="col1-3 data_animate">
                        <div class="card1 card1_2">
                            <div class="img_container">
                                <img src="./img/data.png" alt="#">
                                <div class="img_holder">
                                    <div class="img_wrap">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text_wrap">
                                <div class="text_animate_1">
                                    <p>누구나 맘편히 맡길 수 있게</p>
                                </div>
                                <div class="text_animate_2">
                                    <h3>정보를 제공하는 회사</h3>
                                </div>
                                <div class="text_animate_3">
                                    <p>
                                        첸노는 국내 최고 CRM 종합 데이터 플랫폼을 운영하고 있습니다. 첸노만의 노하우를 이용해 상품을 다양한 마케팅에 쉽고 빠르게 적용할 수 있도록 고객 편의 서비스를 제공합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container_columns mb230 animate_3">
                    <div class="col1-3">
                        <div class="txt_motion">
                            <h2 class="txt_mask"><span>Solution</span></h2>
                        </div>
                    </div>
                    <div class="col1-3 solu_animate">
                        <div class="card1 card1_3">
                            <div class="img_container">
                                <img src="./img/solution.png" alt="#">
                                <div class="img_holder">
                                    <div class="img_wrap">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text_wrap">
                                <div class="text_animate_1">
                                    <p>누구나 맘편히 맡길 수 있게</p>
                                </div>
                                <div class="text_animate_2">
                                    <h3>힌트가 되는 회사</h3>
                                </div>
                                <div class="text_animate_3">
                                    <p>
                                        첸노는 마케팅, 기획, 디자인, 광고까지 다양한 영역에서 고객에게 해답이 될 수 있는 능력있는 회사가 되기위해 노력하고 있습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col1-3"></div>
                </div>
            </div>
        </div>
        <div class="section0_2">
            <div class="sec0_container">
                <div class="container_columns">
                    <div class="tit_holder_left">
                        <div class="txt_mask text_animate_4_wrap">
                            <span class="text_animate_4">광고의 패러다임을 전환하는</span>
                        </div>
                        <div class="txt_mask text_animate_5_wrap">
                            <span class="text_animate_5">마케팅 솔루션 전문기업</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec0_bg_txt">
                <p class="bold  paralax_title2">Brand Identity</p>
            </div>
        </div>
        <div class="section0_3">
            <div class="container_columns">
                <div class="col1-3 sec3_animate_1">
                    <div class="card2">
                        <div class="img_container">
                            <img src="./img/img_container1.png" alt="#">
                            <div class="img_holder">
                                <div class="img_wrap">
                                    <div style="background-image: url(./img/img_container1.png);"></div>
                                </div>
                            </div>
                        </div>

                        <div class="txt_wrap">
                            <div class="txt_wrap_fr">
                                <div class="txt_box">
                                    <span>Project Managers</span>
                                </div>
                                <div class="txt_box">
                                    <span>다양한 브랜드를 경험한 리더들</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col1-3 sec3_animate_2">
                    <div class="card2">
                        <div class="img_container">
                            <img src="./img/img_container2.png" alt="#">
                            <div class="img_holder">
                                <div class="img_wrap">
                                    <div style="background-image: url(./img/img_container2.png);"></div>
                                </div>
                            </div>
                        </div>

                        <div class="txt_wrap">
                            <div class="txt_wrap_fr">
                                <div class="txt_box">
                                    <span>Account Executive</span>
                                </div>
                                <div class="txt_box">
                                    <span>유쾌한 창의성으로 가득 찬 AE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col1-3 sec3_animate_3">
                    <div class="card2">
                        <div class="img_container">
                            <img src="./img/img_container3.png" alt="#">
                            <div class="img_holder">
                                <div class="img_wrap">
                                    <div style="background-image: url(./img/img_container3.png);"></div>
                                </div>
                            </div>
                        </div>

                        <div class="txt_wrap">
                            <div class="txt_wrap_fr">
                                <div class="txt_box">
                                    <span>Designer</span>
                                </div>
                                <div class="txt_box">
                                    <span>생생함을 느끼게 하는 디자이너</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col1-3 sec3_animate_4">
                    <div class="card2">
                        <div class="img_container">
                            <img src="./img/img_container4.png" alt="#">
                            <div class="img_holder">
                                <div class="img_wrap">
                                    <div style="background-image: url(./img/img_container4.png);"></div>
                                </div>
                            </div>
                        </div>

                        <div class="txt_wrap">
                            <div class="txt_wrap_fr">
                                <div class="txt_box">
                                    <span>Analysis Technology</span>
                                </div>
                                <div class="txt_box">
                                    <span>데이터 분석 전문가들의 분석력</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section0_5">
            <div class="sec5_container">
                <div class="sec5_top_flex">
                    <div class="who_we_are">
                        <p class="bold">We Are Cenno</p>
                        <h2>당신을 위한 단 하나의 힌트</h2>
                    </div>
                    <div class="comment">
                        <p>최고를 만드는 남다를 마케팅 DNA를 가진 사람들이 모여 강한 도전 정신과 실패를 두려워하지 않는 열정과 패기로 수많은 프로젝트를 성공으로 이끌고 있습니다. 긍정 바이러스로 가득한 이곳에선 끊임없는 변화와 혁신이 이루어집니다.</p>
                    </div>
                </div>
                <div class="sec5_bot_flex">
                    <div class="Cenno_value">
                        <div class="value_1">
                            <p class="bold">Be a fast walker</p>
                            <h2>시간은 공평하지만 누구에게나 똑같진 않다.</h2>
                            <p>우리에게 시간은 가장 중요한 가치입니다. 발 빠른 마케팅 트렌드의 분석, 의사결정, 실행을 통해 많은 고객을 단 기간 내에 성공이라는 위치로 올리며 우리 또한 최고의 방송 광고 솔루션 전문기업으로 자리매김 하였습니다.</p>
                        </div>
                        <div class="value_2">
                            <p class="bold">Love what we do</p>
                            <h2>우리는 우리의 일을 사랑합니다.</h2>
                            <p>온라인 시장의 변화를 읽고 고객과 대화를 나누며 결과물을 만드는 창조적인 일은 우리가 가장 잘하는 일입니다. 온라인 마케팅과 웹을 지독히 좋아하는 사람들이 모여 이뤄낸 첸노의 분위기는 우리가 고객에게 사랑받는 가장 큰 이유입니다.</p>
                        </div>
                        <div class="value_3">
                            <p class="bold">Win-Win</p>
                            <h2>첸노와 함께 한다는 것의 가치를 믿습니다.</h2>
                            <p>진정성, 상생, 배려라는 역할에 대한 깊은 고민과 고객의 진정한 동반자가 되기 위한 노력으로 언제나 가장 가까운 곳에서 고객의 발전에 기여하고 신뢰를 줄 수 있는 첸노가 될 것을 약속드립니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section0_end">
            <div class="container">
                <div class="adit_center">
                    <div class="adit_right">
                        <h4>힌트가 되다.</h4>
                        <span>고객의 진정한 동반자가 되기 위한 노력과, 언제나 가장 가까운 곳에서 고객의 발전에 기여하고 고객만족을 위해 뛰며 신뢰를 줄 수 있는 기업이 될 것을 약속드립니다.</span>
                        <a href="#"><span>문의하기</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- @@@@@@@@@@@@@@@@@@@@@@@@ 페이지 수정end @@@@@@@@@@@@@@@@@@@@@@@@ -->

    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>

</body>

</html>
