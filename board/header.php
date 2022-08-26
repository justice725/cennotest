<!DOCTYPE html>
<!-- 첸노 헤더 start -->
<link rel="stylesheet" href="../css/header.css">
<script src="../js/header.js"></script>
<link rel="stylesheet" href="../css/common_media.css">
<style>
    .sitemap {
        z-index: 9999;
    }

    .box {
        position: relative;
        top: 0;
        left: 100vw;
        width: 100vw;
        height: 100vh;
        z-index: 99;
        background-color: #245984;
        align-items: center;
        margin: 0 auto;
        transition: all 1s;
    }

    .box.on {
        left: 0;
    }

    .box_fr {
        max-width: 1220px;
        height: 100%;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        margin: 0 auto;
    }

    .ul {
        flex: 525;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    .fnb {
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding-top: 87px;
    }

    ul li a {
        color: #fff;
    }

    .fnb>li {
        overflow-x: hidden;
        transform: translateX(100vw);
        transition-duration: 1s;
        transition-timing-function: cubic-bezier(.19, 1, .22, 1);
    }

    .fnb>li:nth-child(1) {
        opacity: 0;
        transition-delay: 1.55s;
    }

    .fnb>li:nth-child(2) {
        opacity: 0;
        transition-delay: 1.6s;
    }

    .fnb>li:nth-child(3) {
        opacity: 0;
        transition-delay: 1.65s;
    }

    .fnb>li:nth-child(4) {
        opacity: 0;
        transition-delay: 1.7s;
    }

    .fnb>li:nth-child(5) {
        opacity: 0;
        transition-delay: 1.75s;
    }

    .box.on .fnb>li {
        opacity: 1;
        transform: translateX(0);
    }



    .fnb>li>a {
        font-size: 30px;
        font-weight: 700;
        position: relative;

    }

    .sub {
        margin-top: 60px;
    }

    .sub>li:not(:last-child) {
        margin-bottom: 30px;
    }

    .sub>li {
        overflow-x: hidden;
        height: 38px;
        width: auto;
    }

    .sub>li>a {
        font-size: 20px;
        font-weight: 500;
        position: relative;
        overflow-x: hidden;
    }

    /* 메뉴푸터 */
    .menu_foot {
        flex: 325;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .menu_foot::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 1px;
        background-color: rgba(173, 173, 173, 0.37);
        transition-duration: 0.6s;
        transition-property: width;
        transition-delay: .9s;
    }

    .box.on .menu_foot::before {
        width: 100%;
    }

    .address {
        color: #ddd;
        text-align: left;
    }

    .address p {
        font-size: 20px;
        transform: translateY(100vh);
        transition-duration: 1s;
        transition-property: transform;
        transition-timing-function: cubic-bezier(.19, 1, .22, 1);
    }

    .address p:not(:last-child) {
        margin-bottom: 10px;
    }

    .address p:nth-child(1) {
        transition-delay: 1s;
    }

    .address p:nth-child(2) {
        transition-delay: 1.05s;
    }

    .address p:nth-child(3) {
        transition-delay: 1.1s;
    }

    .address p:nth-child(4) {
        transition-delay: 1.15s;
    }

    .box.on .address p {
        transform: translateY(0);
    }

    .icon {
        width: auto;
        height: auto;
        transform: translateY(100vh);
        transition-duration: 1s;
        transition-property: transform;
        transition-timing-function: cubic-bezier(.19, 1, .22, 1);
        transition-delay: 1s;
    }

    .box.on .icon {
        transform: translateY(0);
    }

    .icon img {
        width: auto;
        height: auto;
    }

    /* 메뉴에 마우스 올렸을 때 애니메이션 */
    .fnb>li>a:after {
        content: '';
        width: 0;
        height: 1px;
        background: #fff;
        position: absolute;
        right: 0;
        bottom: -5px;
        transition: all ease .3s;
    }

    .fnb>li:hover>a:after {
        right: auto;
        left: 0;
        width: 100%;
    }

    .sub>li>a:after {
        content: '';
        width: 0;
        height: 1px;
        background: #fff;
        position: absolute;
        right: 0;
        bottom: -5px;
        transition: all ease .3s;
    }

    .sub>li>a:hover:after {
        right: auto;
        left: 0;
        width: 100%;
    }


    /* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 모바일 미디어 쿼리 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
    @media screen and (max-width:767px) {

        .burger_menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            pointer-events: auto;
            width: 100px;
            height: 30px;
            position: fixed;
            z-index: 101;
            cursor: pointer;
            top: 20px;
            right: 15px;
        }

        .ul {
            flex: 525;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .fnb {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding-top: 72px;
            flex-direction: column;
        }

        .fnb>li>a {
            font-size: 20px;
            line-height: 50px;
            padding: 0 30px;
            display: block;
            letter-spacing: 0.05em;
            transition: all 0.5s;
        }

        .fnb>li>a.moOpen {
            padding-left: 60px;
        }

        .fnb>li>a::before {
            width: 4px;
            height: 4px;
            content: '';
            position: absolute;
            top: calc(50% - 2px);
            left: 34px;
            background-color: #fff;
            border-radius: 2px;
            display: none;
            transition: all 0.5s;
        }

        .fnb>li>a.moOpen::before {
            display: block;
        }

        .sub {
            box-sizing: border-box;
            margin-top: 0;
            padding: 0 30px 0 60px;
            overflow: hidden;
            background-color: #545454;
            display: none;
            height: auto;
        }

        .sub.moOpen {
            height: auto;
            display: block;
        }

        .sub>li {
            width: 100%;
        }

        .sub>li:nth-child(1) {
            margin-top: 15px;
        }

        .sub>li:last-child {
            margin-bottom: 15px;
        }

        .sub>li:not(:last-child) {
            margin-bottom: 0;
        }

        .sub>li>a {
            display: block;
            font-size: 16px;
            font-weight: 500;
            position: relative;
            line-height: 40px;
        }

        /* 메뉴 푸터 */
        .menu_foot {
            flex: 285;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            flex-direction: column;
        }

        .address {
            color: #ddd;
            margin-top: 30px;
        }

        .address p {
            font-size: 1em;
        }

        .icon {
            margin-bottom: 30px;
        }


    }

</style>

<script>
    $(function() {
        var a = "(",
            b = ")"
        str = true;

        $(".burger-icon").click(function() {
            $(this).toggleClass("active");
            $(".box").toggleClass("on");
            if (str) {
                $(".bar1").animate({
                    top: "7.5px"
                }, 100, function() {
                    $(".bar1").not(":animated").css({
                        transform: "rotate" + a + "45deg" + b
                    });
                });
                $(".bar3").animate({
                    top: "7.5px"
                }, 100, function() {
                    $(".bar3").not(":animated").css({
                        transform: "rotate" + a + "135deg" + b
                    });
                });
                str = !str;
            } else {
                $(".bar1").css({
                    transform: "rotate" + a + "0deg" + b,
                    top: "0px"
                });
                $(".bar3").css({
                    transform: "rotate" + a + "0deg" + b,
                    top: "15px"
                });
                str = !str;
            }

        });


        $(".fnb li a, .sub li a").hover(function() {
            $(this).removeClass();
            $(this).addClass("on");
        }, function() {
            $(this).removeClass();
            $(this).addClass("on1");
        });


    });

</script>
<script>
    $(document).ready(function() {
        var mql = window.matchMedia("screen and (max-width: 767px)");

        if (mql.matches) {

            $(".fnb li").click(function() {
                $(this).siblings().find("a").removeClass();
                $(this).children().first().toggleClass("moOpen");
                $(this).siblings().find("ul").slideUp(600);
                $(this).find(".sub").slideToggle(600);
            });
        }
    });

</script>
<!-- 첸노 헤더 end -->

<!-- 첸노 헤더 start -->
<header id="hd">
    <nav id="nav">

        <div class="hd_logo">
            <a href="../index.php">
                <!--<img src="./img/hd_logo.png" alt="">-->
            </a>
        </div>

        <div class="manu">
            <a href="./sub.html" class="nav_list nav_list1">기업소개</a>
            <a href="./sub.html" class="nav_list nav_list2">광고마케팅</a>
            <a href="./sub.html" class="nav_list nav_list3">솔루션서비스</a>
            <a href="./sub.html" class="nav_list nav_list4">R&amp;D</a>
            <a href="./sub.html" class="nav_list nav_list6">상품마케팅</a>
            <a href="./talent/index.php" class="nav_list nav_list5">인재채용</a>
            <a href="./talent/index.php" class="nav_list nav_list7">커뮤니티</a>
        </div>

        <div class="sitemap">
            <input class="burger-check" type="checkbox" id="burger-check" /><label class="burger-icon" for="burger-check"><span class="burger-sticks"></span></label>
            <div class="burger_sitemap">
                <div class="box">
                    <div class="box_fr">
                        <nav class="ul">
                            <ul class="fnb">
                                <li class="fnb_li_1 on1">
                                    <a href="./sub.html" class="fnbA"><span>기업소개</span> <span class="span_bar"></span></a>
                                    <ul class="sub_1 sub">
                                        <li class="on1"><a href="./sub.html"> <span>회사소개</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>사업소개</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>CEO인사말</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>회사연혁</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>오시는 길</span> <span class="span_bar"></span></a></li>
                                    </ul>
                                </li>
                                <li class="fnb_li_2 on1">
                                    <a href="./sub.html" class="fnbA"><span>광고마케팅</span> <span class="span_bar"></span></a>
                                    <ul class="sub_2 sub">
                                        <li class="on1"><a href="./sub.html"> <span>온라인광고</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>TV광고</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>오프라인광고</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>사내방송</span> <span class="span_bar"></span></a></li>
                                    </ul>
                                </li>
                                <li class="fnb_li_3 on1">
                                    <a href="./sub.html" class="fnbA"><span>솔루션서비스</span> <span class="span_bar"></span></a>
                                    <ul class="sub_3 sub">
                                        <li class="on1"><a href="./sub.html"> <span>고객관리 프로그램</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>유지보수 SI</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>홈페이지 제작</span> <span class="span_bar"></span></a></li>
                                    </ul>
                                </li>
                                <li class="fnb_li_4 on1">
                                    <a href="./sub.html" class="fnbA"><span>R&amp;D</span> <span class="span_bar"></span></a>
                                    <ul class="sub_4 sub">
                                       <li class="on1"><a href="./sub.html"> <span>프로그램개발</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>연구개발</span> <span class="span_bar"></span></a></li>
                                    </ul>
                                </li>
                                <li class="fnb_li_5 on1">
                                    <a href="./talent/index.php" class="fnbA"><span>인재채용</span> <span class="span_bar"></span></a>
                                    <ul class="sub_5 sub">
                                        <li class="on1"><a href="./sub.html"> <span>인재상</span> <span class="span_bar"></span></a></li>
                                        <li class="on1"><a href="./sub.html"> <span>채용공고</span> <span class="span_bar"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="menu_foot">
                            <div class="address">
                                <p>대전 서구 둔산대로117번길 95 리더스타운 B동 7층</p>
                                <p>Tel : 042-489-7994</p>
                                <p>Fax : 042-489-7995</p>
                            </div>
                            <div class="icon">
                                <img src="./img/menu_logo.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </nav>
</header>

<div class="hd_visual">
    <div class="manu">
        <div class="menu_sub__1" style="padding: 0">
            <a href="" style="display: none;">회사 소개</a>
            <a href="" style="display: none;">사업 소개</a>
            <a href="" style="display: none;">CEO 인사말</a>
            <a href="" style="display: none;">회사 연혁</a>
            <a href="" style="display: none;">오시는 길</a>
        </div>
        <div class="menu_sub__2" style="padding: 0">
            <a href="" style="display: none;">온라인 광고</a>
            <a href="" style="display: none;">TV방송 광고</a>
            <a href="" style="display: none;">오프라인 광고</a>
            <a href="" style="display: none;">사내 방송</a>
        </div>
        <div class="menu_sub__3" style="padding: 0">
            <a href="" style="display: none;">고객관리 프로그램</a>
            <a href="" style="display: none;">유지보수 SI</a>
            <a href="" style="display: none;">홈페이지 제작</a>
        </div>
        <div class="menu_sub__4" style="padding: 0">
            <a href="" style="display: none;">연구 개발</a>
            <a href="" style="display: none;">프로그램 개발</a>
            <a href="" style="display: none;">벤처 사업</a>
        </div>
        
        <div class="menu_sub__6" style="padding: 0">
            <a href="" style="display: none;">얼씨구넷</a>
        </div>
        
        <div class="menu_sub__5" style="padding: 0">
            <a href="../talent/index.php" style="display: none;">인재상</a>
            <a href="../talent/index.php" style="display: none;">직무소개</a>
            <a href="../talent/index.php" style="display: none;">채용 절차</a>
            <a href="../talent/index.php" style="display: none;">채용 공고</a>
        </div>
        
        <div class="menu_sub__7" style="padding: 0">
            <a href="./board.php" style="display: none;">공지사항</a>
            <a href="./cs_center.php" style="display: none;">1:1문의</a>
        </div>
        
        
    </div>
</div>
<!-- 첸노 헤더 end -->
