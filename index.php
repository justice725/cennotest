<?php 
  include $_SERVER['DOCUMENT_ROOT']."/homepage/data/dbconfig.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="첸노">
    <meta name="keywords" content="첸노">
    <meta name="author" content="첸노">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <title>:: CENNO ::</title>

    <!-- 새로고침 시 강제로 상단 이동 -->
    <script>
        history.scrollRestoration = "manual"
    </script>

    <!-- 폰트어썸 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/3de435d34b.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="./css/font.css">

    <!--<script type="text/javascript">
        // F12 버튼 방지 
        $(document).ready(function() {
            $(document).bind('keydown', function(e) {
                if (e.keyCode == 123 /* F12 */ ) {
                    e.preventDefault();
                    e.returnValue = false;
                }
            });
        });

        // 우측 클릭 방지 
        document.onmousedown = disableclick;
        status = "[차단] 마우스 우클릭은 사용하실 수 없습니다.";

        function disableclick(event) {
            if (event.button == 2) {
                alert(status);
                return false;
            }
        }

    </script>-->

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- 기본 css start -->
    <link rel="stylesheet" href="./css/default.css">
    <!-- 기본 css end -->

    <!-- index 공통섹션 -->
    <style>
        #main {
            height: auto;
            width: 100%;
        }

        #main_vs {}

        .section {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        #section1 {
            background-color: rgba(36, 89, 132, 0.9);
            overflow: hidden;
            height: 100vh;
            background-image: url("./img/sec1_bg.png");
            background-size: cover;
        }

        #section2 {
            background-color: #fff;
            height: auto;
            padding-bottom: 0;
        }

        #section3 {
            background-color: #fff;
            height: auto;
            padding-bottom: 150px;
            display: none;
        }

        #section4 {
            background-image: url("./img/sec4_bg_2.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow: hidden;
            height: 400px;
        }

        #section5 {
            height: auto;
            background-color: #fff;
            padding: 150px 0;
            display: none;
        }

        #section6 {
            background: rgb(235, 238, 242);
            background: linear-gradient(115deg, rgba(235, 238, 242, 1) 8%, rgba(143, 151, 170, 1) 100%);
            overflow: hidden;
            height: auto;
            position: relative;
        }

        #sec6_plus1 {
            background: rgb(67, 122, 163);
            background: linear-gradient(90deg, rgba(67, 122, 163, 1) 0%, rgba(79, 160, 180, 1) 51%, rgba(74, 108, 150, 1) 100%);

            overflow: hidden;
            height: auto;
            position: relative;
        }

        #sec6_plus2 {
            background: rgb(253, 255, 244);
            background: linear-gradient(90deg, rgba(253, 255, 244, 1) 0%, rgba(83, 99, 111, 1) 100%);
            overflow: hidden;
            height: auto;
            position: relative;
        }

        #sec6_plus3 {
            background: rgb(230, 103, 116);
            background: linear-gradient(157deg, rgba(230, 103, 116, 1) 10%, rgba(255, 210, 188, 1) 100%);
            overflow: hidden;
            height: auto;
            position: relative;
        }

        #section7 {
            height: auto;
            background-color: #f9f9f9;
            padding: 150px 0;
            padding-bottom: 0;
            padding-top: 0;
        }

        #section8 {
            height: 70vh;
            background-image: url("./img/sec6_bg.png");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #section9 {
            height: auto !important;
        }

        .section_in {
            width: 1200px;
            height: auto;
            margin: 0px auto;
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: center;
        }

        .section_txt {
            position: absolute;
            bottom: 100px;
            left: 150px;
            text-align: left;
            color: #ffffff;
            width: calc(50% - 200px);
            padding-bottom: 50px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            overflow: hidden;
        }

        .sec_tit {
            font-family: 'NanumGothicLight';
            font-size: 2.5em;
            line-height: 1.5;
            font-weight: 100;
        }

        .section_txt p {
            display: inline-block
        }

        .sec_txt {
            font-family: 'NanumGothicBold';
            font-size: 3.2em;
            font-weight: bold;
            line-height: 1.5;
        }

        .scroll_icon {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translate(-50%, -0%);
            animation-name: scroll_icon;
            animation-duration: .7s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            z-index: 99;
        }

        @-webkit-keyframes scroll_icon {
            0% {
                opacity: 1;
                bottom: 25px;
            }

            100% {
                opacity: .4;
                bottom: 35px;
            }
        }

        .cont_tit__box {
            display: block;
            text-align: center;
            width: 100%;
            color: #018cd5;
            font-family: 'NotoSansKR-r';
            font-weight: bold;
        }

        .cont_tit__box h1 {
            display: block;
            font-size: 2em;
        }

        .cont_tit__box p {
            display: block;
            font-weight: 100;
            padding: 15px;
            font-size: 1em;
        }

    </style>

    <!-- section1 -->
    <style>
        .sec1_bg {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            opacity: .3;
            display: none;
        }

        .gradient {
            transition: all 2s ease-out;
            background: linear-gradient(360deg, rgba(253, 255, 244, .7) 0%, rgba(83, 99, 111, .7) 100%);
        }

        #wrapMe {
            width: 100%;
            height: 100vh;
            min-height: 750px;
            background-image: linear-gradient(180deg, var(--colorOne) 0%, var(--colorTwo) 70%);
            background-size: ;
            position: relative;
            overflow: hidden;
            display: flex;
            font-family: var(--fontFamily);
        }

        #layMe {
            min-height: 450px;
            width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            position: relative;
        }

        /*#layMe:before {
            height: 100%;
            width: 50%;
            background: var(--colorOne);
            box-shadow: 0px 30px 139px 0px rgba(10, 22, 31, 0.26);
            border-radius: 30px;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            content: '';
            transform-origin: left;
            transform: rotateY(10deg);*/
        /*   animation:before 5s linear infinite; */
        }

        @keyframes before {
            50% {
                transform: rotateY(10deg) translateY(-25px);
            }
        }

        /*#layMe:after {
            content: '';
            width: 75%;
            height: 85%;
            border-radius: 30px;
            background: var(--colorTwo);
            box-shadow: 0 28px 79px 0 rgba(10, 22, 31, 0.35);
            position: absolute;
            top: 50%;
            right: 0;
            transform-origin: right;
            transform: translateY(-50%) rotateY(-10deg);
        }*/

        #conMe {
            width: 100%;
            height: 100%;
            /*min-height: 450px;*/
            margin: 0 auto;
            position: relative;
            z-index: 9;
            display: flex;
            justify-content: center;
        }

        .slide {
            display: none;
            align-items: center;
        }

        .showing {
            display: flex;
            align-content: space-between;
            flex-wrap: wrap-reverse;
        }

        .showing img {
            animation: imgMove .75s ease-out forwards;
        }

        @keyframes imgMove {
            0% {
                margin-bottom: -5%;
                opacity: 0;
            }
        }

        .showing .vehicle-details {
            text-align: center;
            animation: deetsMove .75s ease-out forwards;
            transform-origin: right;
            transform: rotateY(-10deg);
            font-family: 'NotoSansKR-m';
            letter-spacing: -3px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            height: 35%;
            align-content: flex-end;
            margin-bottom: 25px;
        }

        @keyframes deetsMove {
            0% {
                margin-bottom: 20%;
                opacity: 0;
            }
        }

        .slide img {
            max-width: 80%;
            margin: 0 auto;
        }

        .slide h1 {
            font-size: 22px;
            line-height: 100%;
            letter-spacing: -1px;
            width: auto;
            color: #333;
            margin: 0 auto;
            font-family: 'NotoSansKR-Thin';
        }

        .slide .v-info-item {
            display: inline-block;
            padding: 20px 0px;
            letter-spacing: -5px;
            font-size: 55px;
            border-right: 1px dotted var(--colorOne);
            width: 100%;
        }

        .slide .v-info-item:nth-child(2) {
            border: none;
        }

        .v-info {
            width: 100%;
        }

        .slide h2 {
            margin: 30px auto;
            font-size: 17px;
            letter-spacing: 2px;
            width: 100%;
            font-family: 'NanumGothic';
            margin-bottom: 0;
            color: #333;
        }

        #wrapMe a {
            text-decoration: none;
            color: inherit;
            width: 100%;
            line-height: 50px;
            display: inline-block;
        }

        .swapBtn {
            width: 60px;
            height: 60px;
            font-size: 40px;
            font-weight: 900;
            line-height: 65px;
            text-align: center;
            background: var(--colorOne);
            color: var(--colorTwo);
            border: 1px solid var(--ColorTwo);
            position: absolute;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 0 0 1px var(--colorTwo);
            transition: .15s;
            z-index: 99;
            display: none;
        }

        .swapBtn:nth-child(2) {
            transform: translateX(50%);
        }

        .swapBtn:nth-child(3) {
            right: 0;
            transform: translateX(-50%);
        }

        @media screen and (max-width:1110px) {
            #layMe:before {
                width: 75%;
                height: 50%;
                left: 0%;
                transform: none;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            #layMe:after {
                height: 40%;
                top: 5%;
                transform: none;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .showing {
                flex-direction: column;
                margin: 0 auto;
            }

            .slide img {
                display: block;
                width: 100%;
                max-width: 100%;
                margin: 0 auto;
            }

            .slide .vehicle-details {
                display: block;
                margin: 0 auto;
                text-align: center;
            }

            .slide .btn {
                margin: 25px auto;
            }

            .swapBtn:nth-child(2) {
                top: 25%;
                transform: translateX(0%) scale(.75);
            }

            .swapBtn:nth-child(3) {
                right: 0;
                top: 25%;
                transform: translateX(0%) scale(.75);
            }

            @keyframes imgMove {
                0% {
                    margin-left: 0;
                    margin-top: -10%;
                    opacity: 0;
                }
            }

            @keyframes deetsMove {
                0% {
                    margin: 0 auto;
                    opacity: 0;
                }
            }
        }

        @media screen and (max-width:520px) {
            #conMe {
                align-items: center;
            }

            .v-info-item {
                border-bottom: 1px dotted var(--colorOne);
                border-right: 0 !important;
            }

            .swapBtn {
                top: 15% !important;
            }

            #layMe:before {
                display: none;
            }

            #layMe:after {
                display: none;
            }
        }

    </style>
    <script>
        //background
        var colors = new Array(
            [103, 108, 127],
            [182, 188, 211],
            [253, 255, 244],
            [78, 117, 130],
            [165, 219, 216],
            [194, 206, 211]);

        var step = 0;
        //color table indices for: 
        // current color left
        // next color left
        // current color right
        // next color right
        var colorIndices = [0, 1, 2, 3];

        //transition speed
        var gradientSpeed = 0.004;

        function updateGradient() {

            if ($ === undefined) return;

            var c0_0 = colors[colorIndices[0]];
            var c0_1 = colors[colorIndices[1]];
            var c1_0 = colors[colorIndices[2]];
            var c1_1 = colors[colorIndices[3]];

            var istep = 1 - step;
            var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
            var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
            var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
            var color1 = "rgb(" + r1 + "," + g1 + "," + b1 + ")";

            var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
            var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
            var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
            var color2 = "rgb(" + r2 + "," + g2 + "," + b2 + ")";

            $('.gradient').css({
                background: "-webkit-gradient(linear, left top, right top, from(" + color1 + "), to(" + color2 + "))"
            }).css({
                background: "-moz-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
            });

            step += gradientSpeed;
            if (step >= 1) {
                step %= 1;
                colorIndices[0] = colorIndices[1];
                colorIndices[2] = colorIndices[3];

                //pick two new target color indices
                //do not pick the same as the current one
                colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
                colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
            }
        }

        setInterval(updateGradient, 10);

    </script>

    <!-- section2 -->
    <style>
        .sec2_content__box {
            display: block;
            width: 1200px;
            margin: 0 auto;
            height: auto;
            box-sizing: border-box;
            position: relative;
            padding: 150px 0;
            padding-bottom: 0;
        }

        .sec2_table {
            display: flex;
            flex-wrap: wrap;
            padding-top: 50px;
        }

        .sec2_table div.sec2_ta__box {
            width: 300px;
            height: 300px;
            box-sizing: border-box;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .sec2_table div.sec2_ta__full {
            width: 600px;
        }

        .sec2_ta__box1 {
            background-color: #fff;
            box-shadow: 2px 5px 12px rgba(0, 0, 0, 0.2);
        }

        .sec2_ta__box2 {
            background-color: rgba(36, 89, 132, 1);
        }

        .sec2_ta__box3 {
            background-color: #1b1f28;
        }

        .sec2_ta__box4 {
            background-color: #3e424d;
            box-shadow: 2px 5px 12px rgba(0, 0, 0, 0.2);

        }

        .sec2_ta__box5 {
            background-image: url("./img/sec2_cont5__bg.png");
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            box-shadow: 2px 5px 12px rgba(0, 0, 0, 0.2);

        }

        .sec2_ta__box6 {
            background-color: #fff;
            box-shadow: 2px 5px 12px rgba(0, 0, 0, 0.2);

        }

        .sec2_ta__txtbox {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .sec2_cont__tit {
            display: block;
            text-align: center;
            color: #fff;
            font-size: 25px;
            font-weight: 100;
            width: 100%;
        }

        .sec2_cont__line {
            display: block;
            width: 20px;
            height: 1px;
            background-color: #fff;
            display: block;
            margin: 20px auto;
        }

        .sec2_cont__txt {
            width: 100%;
            height: auto;
            text-align: center;
            color: #fff;
            line-height: 1.5;
        }

        .sec2_ta__box6 .sec2_cont__tit,
        .sec2_ta__box6 .sec2_cont__txt {
            color: rgba(36, 89, 132, 1);
        }

        .sec2_ta__box6 .sec2_cont__line {
            background-color: rgba(36, 89, 132, 1);
        }

        .sec2_link1 {
            display: block;
            padding: 15px;
            margin: 20px auto;
            margin-bottom: 0;
            border: 1px solid #fff;
            border-radius: 40px;
            color: #fff;
            width: 200px;
            text-align: center;
            transition: .2s;
        }

        .sec2_link1:hover {
            background-color: #fff;
            color: rgba(36, 89, 132, 1);
        }

        .sec2_link2 {
            display: block;
            padding: 15px;
            margin: 20px auto;
            margin-bottom: 0;
            border: 1px solid #fff;
            border-radius: 40px;
            color: #fff;
            width: 200px;
            text-align: center;
            transition: .2s;
        }

        .sec2_link2:hover {
            background-color: #fff;
            color: #333;
        }

        .sec2_link3 {
            display: block;
            padding: 15px;
            margin: 20px auto;
            margin-bottom: 0;
            border: 1px solid rgba(36, 89, 132, 1);
            border-radius: 40px;
            color: rgba(36, 89, 132, 1);
            width: 200px;
            text-align: center;
            transition: .2s;
        }

        .sec2_link3:hover {
            background-color: rgba(36, 89, 132, 1);
            color: #fff;
        }

        .board {
            width: 100%;
            padding: 40px;
        }

        .board_tit {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            border-bottom: 1px solid rgba(36, 89, 132, 0.4);
            padding: 20px 0;
            font-family: 'NanumGothic';
            color: rgba(36, 89, 132, 1);
        }

        .board_list {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
        }

        .board_list {
            width: 100%;
            height: auto;
            padding: 15px 0;
            font-size: .8em;
            display: flex;
            flex-wrap: nowrap;
            border-bottom: 1px solid rgba(36, 89, 132, 0.4);

        }

        .board_list:nth-last-child(1) {
            border-bottom: 0;
        }

        .bo_list__box {
            width: 100%;
        }

        .bo_list__con {
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: center;
        }

        .bo_list__con p {
            opacity: 0.4;
            font-size: .5em;
            font-weight: 100;

        }
        .bo_list__box a {
            transition: .4s;
        }
        .bo_list__box a:hover {
            color: #018cd5;
        }

        .bo_list__con span {
            display: inline-block;
            width: 350px;
            padding: 5px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .video_tit__box {
            width: 100%;
            height: auto;

            position: absolute;
            bottom: 0;
            left: 0;
        }

        .video_tit__box a {
            display: block;
            text-align: center;
            color: #fff;
            font-family: 'NanumGothicLight';
            width: 100%;
            height: 100%;
            padding: 20px;
            background-color: rgba(36, 89, 132, 0.7);
            transition: .2s;
        }

        .video_tit__box a:hover {
            color: #fff;
            background-color: rgba(36, 89, 132, 1);
        }

        iframe {
            width: 100%;
            height: 100%;
            display: block;
            opacity: 1;
        }

        .sec2_ta__box5 img {
            display: block;
            width: 100%;
            height: auto;
        }

    </style>

    <!-- section3 -->
    <style>
        .sec3_content__main {
            width: 1200px;
            height: auto;
            margin: 0 auto;
            padding-top: 50px;
        }

        .sec3_menu {
            width: 600px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sec3_menu button {
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: 0;
            font-size: 1em;
            cursor: pointer;
            color: rgba(36, 89, 132, .7);
            font-family: 'NotoSansKR-Thin';
            padding: 6px 20px;
            box-sizing: border-box;
            width: 150px;
            border-left: 1px solid #eee;
            text-align: center;
            position: relative;
            transition: .4s;
        }

        .sec3_menu button:nth-child(1) {
            border: 0;
        }

        .sec3_menu button.active p {
            position: absolute;
            width: 70%;
            left: 50%;
            bottom: 0;
            transform: translate(-50%, 0%);
            height: 0.2px;
            background-color: rgba(36, 89, 132, 1);
            transition: .4s;
        }

        .sec3_menu button.active {
            font-family: 'NotoSansKR-m';
            transition-timing-function: ease;
            color: rgba(36, 89, 132, 1);
        }

        .sec3_con__box {
            width: 1200px;
            margin: 0 auto;
            margin-top: 50px;
            height: 420px;
            display: flex;
            flex-wrap: nowrap;
            position: relative;
            overflow: hidden;

        }

        .sec3_left {
            width: 420px;
            height: 420px;
            background-color: #018cd5;
            padding: 50px;
            background-image: url("./img/sec3_content1.png");
            transition: .5s;
        }

        .sec3_left__box {
            position: absolute;
            top: 50px;
            left: -100%;
        }

        .sec3_left__box.active {
            left: 50px;
        }

        .sec3_left h1 {
            color: #fff;
            font-size: 2em;
            padding-top: 10px;
        }

        .sec3_left span {
            color: #fff;
            display: block;
            padding-top: 10px;
            opacity: .4;
            font-size: .7em;
            font-family: 'NanumGothicLight';
        }

        .sec3_left p {
            color: #fff;
            display: block;
            padding-top: 10px;
            font-size: 1.5em;
            font-family: 'NanumGothicLight';
        }

        .sec3_left h1 {
            transform: translate3d(-100px, 0, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_left span {
            transform: translate3d(-100px, 0, 0);
            transition-duration: 1.3s;
            opacity: 0;
        }

        .sec3_left p {
            transform: translate3d(-100px, 0, 0);
            transition-duration: 1.6s;
            opacity: 0;
        }

        .sec3_left h1.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_left span.active {
            opacity: .6;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_left p.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }



        .sec3_right {
            width: 780px;
            display: flex;
            flex-wrap: wrap;
            position: absolute;
            right: -100%;
            bottom: 0;
        }

        .sec3_right.active {
            right: 0;
        }

        .sec3_right__content {
            width: 390px;
            height: 210px;
            border: 1px solid #eee;
        }

        .sec3_right__content a {
            display: block;
            width: 100%;
            height: 100%;
            padding: 35px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .sec3_right__content h2 {
            display: block;
            color: #018cd5;
            font-size: 1.4em;
            font-family: 'NotoSansKR-Thin';
            width: 100%;
            padding-bottom: 10px;
            transform: translate3d(100px, 0, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_right__content h2.start {
            transform: translate3d(100px, 0, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_right__content h1.start {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.2s;
            opacity: 0;
        }

        .sec3_right__content span.start {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.4s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(2) h2 {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(3) h2 {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1s;
            opacity: 0;
        }

        .sec3_right__content h2.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_right__content h1 {
            display: block;
            font-size: 1.5em;
            font-family: 'NotoSansKR-m';
            width: 100%;
            padding-bottom: 10px;
            transform: translate3d(100px, 0, 0);
            transition-duration: 1.2s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(2) h1 {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.2s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(3) h1 {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.2s;
            opacity: 0;
        }

        .sec3_right__content h1.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_right__content span {
            display: block;
            font-family: 'NotoSansKR-Thin';
            color: #333;
            opacity: .8;
            line-height: 1.4;
            width: 100%;
            padding-bottom: 10px;
            transform: translate3d(100px, 0, 0);
            transition-duration: 1.4s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(2) span {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.4s;
            opacity: 0;
        }

        .sec3_right__content:nth-child(3) span {
            transform: translate3d(0, 100px, 0);
            transition-duration: 1.4s;
            opacity: 0;
        }

        .sec3_right__content span.active {
            opacity: 1;
            transform: translateZ(0);
            transition-timing-function: ease;
            transition-property: opacity, transform;
        }

        .sec3_right__top {
            width: 780px;
            border-bottom: 0;
        }

        .sec3_right__content:nth-child(2) {
            border-right: 0;
        }

    </style>
    <script>
        $(document).ready(function() {

            $(".sec3_menu button:nth-child(1)").click(function() {
                $("#sec3_r__cont1, #sec3_left_tit1").stop().addClass("active");
                $("#sec3_r__cont2, #sec3_left_tit2").stop().removeClass("active");
                $("#sec3_r__cont3, #sec3_left_tit3").stop().removeClass("active");
                $("#sec3_r__cont4, #sec3_left_tit4").stop().removeClass("active");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().addClass("active");
                $("#sec3_r__cont2 .sec3_right__content h2, #sec3_r__cont2 .sec3_right__content h1, #sec3_r__cont2 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont3 .sec3_right__content h2, #sec3_r__cont3 .sec3_right__content h1, #sec3_r__cont3 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont4 .sec3_right__content h2, #sec3_r__cont4 .sec3_right__content h1, #sec3_r__cont4 .sec3_right__content span").stop().removeClass("active");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().addClass("active");
                $(".sec3_left #sec3_left_tit2 h1, .sec3_left #sec3_left_tit2 span, .sec3_left #sec3_left_tit2 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit3 h1, .sec3_left #sec3_left_tit3 span, .sec3_left #sec3_left_tit3 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit4 h1, .sec3_left #sec3_left_tit4 span, .sec3_left #sec3_left_tit4 p").stop().removeClass("active");

                $(".sec3_left").css("background-image", "url(./img/sec3_content1.png)");

                $(this).stop().addClass("active");
                $(this).stop().siblings().removeClass("active");
            });
            $(".sec3_menu button:nth-child(2)").click(function() {
                $("#sec3_r__cont1, #sec3_left_tit1").stop().removeClass("active");
                $("#sec3_r__cont2, #sec3_left_tit2").stop().addClass("active");
                $("#sec3_r__cont3, #sec3_left_tit3").stop().removeClass("active");
                $("#sec3_r__cont4, #sec3_left_tit4").stop().removeClass("active");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-init");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-animate");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-duration");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-delay");

                $("#sec3_r__cont2 .sec3_right__content h2, #sec3_r__cont2 .sec3_right__content h1, #sec3_r__cont2 .sec3_right__content span").stop().addClass("active");
                $("#sec3_r__cont3 .sec3_right__content h2, #sec3_r__cont3 .sec3_right__content h1, #sec3_r__cont3 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont4 .sec3_right__content h2, #sec3_r__cont4 .sec3_right__content h1, #sec3_r__cont4 .sec3_right__content span").stop().removeClass("active");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("aos-init");
                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("aos-animate");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeAttr("data-aos");
                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeAttr("data-aos-duration");
                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeAttr("data-aos-delay");

                $(".sec3_left #sec3_left_tit2 h1, .sec3_left #sec3_left_tit2 span, .sec3_left #sec3_left_tit2 p").stop().addClass("active");
                $(".sec3_left #sec3_left_tit3 h1, .sec3_left #sec3_left_tit3 span, .sec3_left #sec3_left_tit3 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit4 h1, .sec3_left #sec3_left_tit4 span, .sec3_left #sec3_left_tit4 p").stop().removeClass("active");

                $(".sec3_left").css("background-image", "url(./img/sec3_content2.png)");

                $(this).stop().addClass("active");
                $(this).stop().siblings().removeClass("active");

            });
            $(".sec3_menu button:nth-child(3)").click(function() {
                $("#sec3_r__cont1, #sec3_left_tit1").stop().removeClass("active");
                $("#sec3_r__cont2, #sec3_left_tit2").stop().removeClass("active");
                $("#sec3_r__cont3, #sec3_left_tit3").stop().addClass("active");
                $("#sec3_r__cont4, #sec3_left_tit4").stop().removeClass("active");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-init");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-animate");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-duration");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-delay");

                $("#sec3_r__cont2 .sec3_right__content h2, #sec3_r__cont2 .sec3_right__content h1, #sec3_r__cont2 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont3 .sec3_right__content h2, #sec3_r__cont3 .sec3_right__content h1, #sec3_r__cont3 .sec3_right__content span").stop().addClass("active");
                $("#sec3_r__cont4 .sec3_right__content h2, #sec3_r__cont4 .sec3_right__content h1, #sec3_r__cont4 .sec3_right__content span").stop().removeClass("active");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit2 h1, .sec3_left #sec3_left_tit2 span, .sec3_left #sec3_left_tit2 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit3 h1, .sec3_left #sec3_left_tit3 span, .sec3_left #sec3_left_tit3 p").stop().addClass("active");
                $(".sec3_left #sec3_left_tit4 h1, .sec3_left #sec3_left_tit4 span, .sec3_left #sec3_left_tit4 p").stop().removeClass("active");

                $(".sec3_left").css("background-image", "url(./img/sec3_content3.png)");

                $(this).stop().addClass("active");
                $(this).stop().siblings().removeClass("active");
            });

            $(".sec3_menu button:nth-child(4)").click(function() {
                $("#sec3_r__cont1, #sec3_left_tit1").stop().removeClass("active");
                $("#sec3_r__cont2, #sec3_left_tit2").stop().removeClass("active");
                $("#sec3_r__cont3, #sec3_left_tit3").stop().removeClass("active");
                $("#sec3_r__cont4, #sec3_left_tit4").stop().addClass("active");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-init");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeClass("aos-animate");

                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-duration");
                $("#sec3_r__cont1 .sec3_right__content h2, #sec3_r__cont1 .sec3_right__content h1, #sec3_r__cont1 .sec3_right__content span").stop().removeAttr("data-aos-delay");

                $("#sec3_r__cont2 .sec3_right__content h2, #sec3_r__cont2 .sec3_right__content h1, #sec3_r__cont2 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont3 .sec3_right__content h2, #sec3_r__cont3 .sec3_right__content h1, #sec3_r__cont3 .sec3_right__content span").stop().removeClass("active");
                $("#sec3_r__cont4 .sec3_right__content h2, #sec3_r__cont4 .sec3_right__content h1, #sec3_r__cont4 .sec3_right__content span").stop().addClass("active");

                $(".sec3_left #sec3_left_tit1 h1, .sec3_left #sec3_left_tit1 span, .sec3_left #sec3_left_tit1 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit2 h1, .sec3_left #sec3_left_tit2 span, .sec3_left #sec3_left_tit2 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit3 h1, .sec3_left #sec3_left_tit3 span, .sec3_left #sec3_left_tit3 p").stop().removeClass("active");
                $(".sec3_left #sec3_left_tit4 h1, .sec3_left #sec3_left_tit4 span, .sec3_left #sec3_left_tit4 p").stop().addClass("active");

                $(".sec3_left").css("background-image", "url(./img/sec3_content4.png)");

                $(this).stop().addClass("active");
                $(this).stop().siblings().removeClass("active");
            });
        });

    </script>

    <!-- section4 -->
    <style>
        .sec4_box {
            width: 1200px;
            height: 100%;
            margin: 0 auto;
            padding: 150px 0px;
        }

        .sec4_box .cont_tit__box {
            color: #fff;
        }

        .sec4_main__visual {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .sec4_main__visual div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            width: 300px;
            height: 400px;
            text-align: center;
            padding: 25px;
            color: #333;
            align-content: flex-start;
            background-color: rgba(255, 255, 255, 0.7);
            margin: 10px;
            align-content: center;
            box-shadow: -1px 0px 14px rgba(255, 255, 255, 0.7);
            border-radius: 5px;
        }

        .sec4_main__visual div span {
            display: block;
            margin: 0px auto;
            margin-top: 0;
            color: #20556d;
            font-size: 2.3em;
            width: 100%;
        }

        .sec4_main__visual div h1 {
            width: 100%;
            text-align: center;
            margin: 35px auto;
            font-weight: bold;
            font-size: 18px;
            opacity: .75;
            color: #20556d;
            font-family: 'NanumGothicExtraBold';
        }

        .sec4_main__visual div h2 {
            line-height: 23px;
            font-size: 16px;
            text-indent: inherit;
            text-align: center;
            width: 100%;
            font-weight: 100;
            font-family: 'NotoSansKR-Thin';
        }

    </style>
    <script>
        $(document).ready(function() {
            $(".sec4_main__visual div").hover(function() {
                $(this).stop().not(":animated").animate({
                    "padding-top": "-50px"
                }, 500);

            });
            $(".sec4_main__visual div").mouseleave(function() {
                $(this).stop().not(":animated").animate({
                    "padding-top": "25px"
                }, 500);
            });
        });

    </script>

    <!-- section5 슬라이드섹션 -->
    <style>
        .sec5_visual__tit {
            width: 800px;

        }

        .sec5_visual__tit {
            display: flex;
            padding: 25px 0;
            border-bottom: 1px solid #018cd5;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: center;
            align-content: center;
            color: #018cd5;
        }

        .sec5_visual__tit p {
            margin-right: 25px;
            font-weight: bold;
            font-size: 1.3em;
        }

        .sec5_visual__tit h1 {
            font-family: 'NanumGothicLight';
            font-weight: 100;
            font-size: 1.4em;
        }

        .sec5_visual__txt {
            width: 630px;
            height: auto;
        }

        .sec5_visual__txt h2 {
            font-weight: bold;
            font-family: 'NotoSansKR-m';
            font-size: 2.5em;
            color: #018cd5;
            line-height: 1.2;
            margin: 50px 0px;
        }

        .sec5_visual__txt span {
            display: block;
            line-height: 2;
            font-size: 1.2em;
            font-family: 'NotoSansKR-Thin';
            text-align: justify;
            color: #333;
        }

        .sec5_video__box {
            width: 400px;
            height: 100%;
        }

        .sec5_video__box iframe {
            display: block;
            width: 100%;
            height: 100%;
        }



        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            object-fit: cover;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
        }

        .swiper_btn__box {
            width: auto;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .sw_arw {
            display: flex;
        }

        .swiper_btn__box .sw_arw div {
            margin-right: 20px;
            z-index: 9999;
        }

        .swiper_btn__box div:after {
            font-size: 1em;
            font-weight: bold;
            color: #018cd5;
        }

        .swiper-button-next,
        .swiper-button-prev,
        .swiper-pagination,
        .swiper-pagination-bullets.swiper-pagination-horizontal {
            position: relative;
            left: inherit;
            right: inherit;
            top: inherit;
            bottom: inherit;
            width: auto;
            height: auto;
            margin: 0;
        }

        .swiper-button-next,
        .swiper-button-prev {
            width: 25px;
            height: 25px;
        }

        .swiper-pagination-bullets.swiper-pagination-horizontal {}

        .swiper_btn__page {
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: space-between;
            width: 400px;
        }

        .swiper_line {
            display: block;
            width: 200px;
            height: 1px;
            background-color: #018cd5;
        }

        .swiper-pagination-bullet-active {
            color: #018cd5;
            background-color: #018cd5;
        }

    </style>

    <!-- section6 -->
    <style>
        .sec6_box {
            width: 1200px;
            height: auto;
            margin: 0 auto;
            padding: 240px 0;
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-end;
        }

        #sec6_plus1 .sec6_box,
        #sec6_plus3 .sec6_box {
            justify-content: flex-start;
        }

        .sec6_bg__img {
            position: absolute;
            bottom: -5px;
            left: 100px;
        }

        #sec6_plus1 .sec6_bg__img,
        #sec6_plus3 .sec6_bg__img {
            position: absolute;
            bottom: 100px;
            left: inherit;
            right: 0;
        }

        #sec6_plus3 .sec6_bg__img3 {
            left: 150px;
        }

        #sec6_plus3 .sec6_bg__img4 {
            bottom: -5px;
            left: inherit;
            right: 20px;
        }

        .sec6_text {
            display: block;
        }

        .sec6_text h1 {
            font-size: 50px;
            text-align: right;
            letter-spacing: -4.64px;
            color: #FFFFFF;
            font-weight: bold;
            font-family: 'NotoSansKR-m';
            line-height: 1.2;
        }

        #sec6_plus1 .sec6_text h1,
        #sec6_plus3 .sec6_text h1 {
            text-align: left;
        }

        .sec6_text h1 strong {
            font-weight: bold;
            font-family: 'NotoSansKR-r';
        }

        .sec6_text p {
            font-size: 20px;
            text-align: right;
            letter-spacing: -1.84px;
            color: #FFFFFF;
            line-height: 40px;
            font-weight: 400;
            font-family: 'NotoSansKR-Thin';
        }

        #sec6_plus1 .sec6_text p,
        #sec6_plus3 .sec6_text p {
            text-align: left;
        }

        .sec6_more {
            display: block;
            padding: 20px;
            background: none;
            border: 2px solid #fff;
            width: 200px;
            border-radius: 50px;
            color: #fff;
            text-align: center;
            float: right;
            margin-top: 50px;
            position: relative;
            transition: .2s;
        }

        .sec6_more.on {
            color: #3a4147;
            background: #fff;
        }

        #sec6_plus1 .sec6_more,
        #sec6_plus3 .sec6_more {
            float: left;
        }

    </style>
    <script>
        $(document).ready(function() {
            $(".sec6_more").hover(function() {
                $(this).addClass("on");
            });
            $(".sec6_more").mouseleave(function() {
                $(this).removeClass("on");
            });
        });

    </script>

    <!-- 파트너사 -->
    <style>
        .sec7_content__box {
            padding-top: 150px;
        }

        .partners {
            display: block;
            width: 1200px;
            margin: 0 auto;
        }

        .partners ul {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .partners ul li {
            width: 300px;
            text-align: center;

        }

        .partners ul li img {
            display: block;
            box-sizing: border-box;
            margin: 0 auto;
            height: auto;
            width: 200px;
            margin-top: 50px;
            border: 1px solid #b7dced;
        }

        .partners ul li p {
            color: #353b3d;
            opacity: .5;
            font-family: 'NanumGothic';
            font-weight: bold;
            padding-top: 15px;
        }

    </style>

    <!-- 인재채용 -->
    <style>
        #section8 {
            display: flex;
            align-content: center;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
        }

        .sec8_content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .sec8_tit {
            width: 100%;
            text-align: center;
            color: #fff;
            font-size: 2em;
            font-weight: 100;
            font-family: 'NotoSansKR-m';
            line-height: 1.4;
            padding: 50px;
            padding-top: 0;
        }

        .sec8_link {
            display: flex;
            flex-wrap: nowrap;

        }

        .sec8_link a {
            display: inline-block;
            margin: 0px 25px;
            margin-bottom: 0;
            border: 1px solid #fff;
            padding: 15px 50px;
            text-align: center;
            color: #fff;
            transition: .2s;
        }

        .sec8_link a:hover {
            background-color: #fff;
            color: #333;
        }

    </style>

    <!-- 반응형 쿼리 start -->
    <link rel="stylesheet" href="./css/common_media.css">
    <style>
        /* 모바일 */
        @media (max-width: 879px) {

            /* 공통 타이틀 */
            .cont_tit__box h1 {
                font-size: 1.2em;
            }

            .cont_tit__box p {
                font-size: .67em;
            }

            /* section1 */
            .section_txt {
                width: 100%;
                left: 50%;
                bottom: inherit;
                top: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                border: 0;
            }

            .sec_tit {
                font-size: 1.5em;
            }

            .sec_txt {
                font-size: 2em;
            }

            #conMe {
                align-items: center;
            }

            .slide .v-info-item {
                font-size: 30px;
                letter-spacing: -2px;
            }

            .slide h2 {
                font-size: 15px;
                width: 90%;
                line-height: 25px;
            }

            /* section2 */
            #section2 {
                padding-bottom: 0;
            }

            .sec2_content__box {
                width: 100%;
                padding: 75px 0px;
            }

            .sec2_table {
                justify-content: center;
            }

            .sec2_table div.sec2_ta__full,
            .sec2_table div.sec2_ta__box {
                width: 100%;
            }

            /* section4 */
            #section4 {
                height: auto;
            }

            .sec4_box {
                width: 100%;
                padding: 20px;
            }

            .sec4_main__visual {
                flex-wrap: wrap;
            }

            .sec4_main__visual div {
                width: 100%;
                border: 0;
            }

            .sec4_main__visual div:nth-child(1),
            .sec4_main__visual div:nth-child(3) {
                border-left: 0;
            }

            .sec4_main__visual div:nth-last-child(1) {
                border-right: 0;
            }

            /* 사업분류 레이아웃 */
            #section6 {
                background: linear-gradient(15deg, rgba(235, 238, 242, 1) 8%, rgba(143, 151, 170, 1) 100%);
            }

            .sec6_box {
                width: 100%;
                flex-wrap: wrap-reverse;
                justify-content: space-between;
                padding-bottom: 0;
                padding-top: 50px;
            }

            #sec6_plus1 .sec6_box,
            #sec6_plus3 .sec6_box {
                flex-wrap: wrap;
                justify-content: space-between;
                padding-bottom: 0;
            }

            .sec6_text {
                width: 100%;
            }

            .sec6_text h1 {
                font-size: 30px;
                letter-spacing: -2.5px;
                padding-bottom: 20px;

            }

            .sec6_text p {
                width: 100%;
                font-size: 18px;
                line-height: 25px;
            }

            .sec6_text h1,
            .sec6_text p,
            #sec6_plus1 .sec6_text h1,
            #sec6_plus3 .sec6_text h1,
            #sec6_plus1 .sec6_text p,
            #sec6_plus3 .sec6_text p {
                text-align: center;
            }

            .media_br {
                display: block;
            }

            .sec6_more,
            #sec6_plus1 .sec6_more,
            #sec6_plus3 .sec6_more {
                margin: 50px auto;
                float: inherit;
                padding: 15px;
            }

            .sec6_bg__img,
            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {
                position: inherit;
                left: 0;
                width: 100%;
            }

            .sec6_bg__img img {
                display: block;
                width: 100%;
            }

            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {}

            #sec6_plus3 .sec6_bg__img4 {
                right: 0;
            }

            /* 파트너사 레이아웃 */
            #section7 {
                padding: 75px 0;
            }

            .partners {
                width: 90%;
                margin: 0 auto;
            }

            .partners ul li {
                width: 30.33%;
                height: auto;
            }

            .partners ul li p {
                font-size: 10px;
            }

            .partners ul li img {
                display: block;
                width: 100%;
                height: auto;
                margin-top: 20px;
            }

            /* 채용공고 */
            #section8 {
                height: auto;
                padding: 75px 0;
                background-attachment: inherit;
                background-position: right;
                background-size: cover;
            }

            .sec8_tit {
                font-size: 1em;
                font-family: 'NanumGothic';
            }

            .sec8_link {
                width: 80%;
                margin: 0 auto;
                flex-wrap: wrap;
            }

            .sec8_link a {
                width: 100%;
                margin-top: 15px;
            }
        }

        /* 테블릿 큰사이즈 */
        @media (min-width: 880px) and (max-width: 1199px) {
            .section_txt {
                padding-bottom: 20px;
                left: 50px;
                width: calc(50% - 100px);
            }

            .sec_tit {
                font-size: 1.1em;
            }

            .sec_txt {
                font-size: 2.0em;
            }

            #conMe {
                align-items: center;
            }

            .sec2_content__box {
                width: 100%;
            }

            .sec2_table {
                justify-content: center;
            }

            #section4 {
                height: auto;
            }

            .sec4_box {
                width: 100%;
                padding: 50px 150px;
            }

            .sec4_main__visual {
                flex-wrap: wrap;
            }

            .sec4_main__visual div {
                width: 50%;
            }

            .sec4_main__visual div:nth-child(1),
            .sec4_main__visual div:nth-child(3) {
                border-left: 1px solid rgba(255, 255, 255, .15);
            }

            .sec4_main__visual div:nth-last-child(1) {
                border-right: 1px solid rgba(255, 255, 255, .15);
            }

            /* 사업분류 레이아웃 */
            .sec6_box {
                width: 100%;
                flex-wrap: wrap-reverse;
                justify-content: space-between;
                padding-bottom: 0;
            }

            #sec6_plus1 .sec6_box,
            #sec6_plus3 .sec6_box {
                flex-wrap: wrap;
                justify-content: space-between;
                padding-bottom: 0;
            }

            .sec6_text {
                width: 100%;
            }

            .sec6_text h1,
            .sec6_text p,
            #sec6_plus1 .sec6_text h1,
            #sec6_plus3 .sec6_text h1,
            #sec6_plus1 .sec6_text p,
            #sec6_plus3 .sec6_text p {
                text-align: center;
            }

            .media_br {
                display: none;
            }

            .sec6_more,
            #sec6_plus1 .sec6_more,
            #sec6_plus3 .sec6_more {
                margin: 25px auto;
                float: inherit;
                padding: 15px;
            }

            .sec6_bg__img,
            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {
                position: inherit;
                left: 0;
                width: 100%;
            }

            .sec6_bg__img img {
                display: block;
                width: 100%;
            }

            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {}

            #sec6_plus3 .sec6_bg__img4 {
                right: 0;
            }

            /* 파트너사 레이아웃 */
            .partners {
                width: 90%;
                margin: 0 auto;
            }

            .partners ul li {
                width: 23%;
                height: auto;
            }

            .partners ul li img {
                display: block;
                width: 100%;
                height: auto;
            }
        }

        /* 노트북 작은 사이즈 */
        @media (min-width: 1200px) and (max-width: 1399px) {
            .section_txt {
                padding-bottom: 20px;
                left: 50px;
                width: calc(50% - 100px);
            }

            .sec_tit {
                font-size: 2em;
            }

            .sec_txt {
                font-size: 3em;
            }

            /* 사업분류 레이아웃 */
            .sec6_box {
                flex-wrap: wrap-reverse;
                justify-content: space-between;
                padding-bottom: 0;
            }

            #sec6_plus1 .sec6_box,
            #sec6_plus3 .sec6_box {
                flex-wrap: wrap;
                justify-content: space-between;
                padding-bottom: 0;
            }

            .sec6_text {
                width: 100%;
            }

            .sec6_text h1,
            .sec6_text p,
            #sec6_plus1 .sec6_text h1,
            #sec6_plus3 .sec6_text h1,
            #sec6_plus1 .sec6_text p,
            #sec6_plus3 .sec6_text p {
                text-align: center;
            }

            .media_br {
                display: none;
            }

            .sec6_more,
            #sec6_plus1 .sec6_more,
            #sec6_plus3 .sec6_more {
                margin: 25px auto;
                float: inherit;
                padding: 15px;
            }

            .sec6_bg__img,
            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {
                position: inherit;
                left: 0;
                width: 100%;
            }

            .sec6_bg__img img {
                display: block;
                width: 100%;
            }

            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {}

            #sec6_plus3 .sec6_bg__img4 {
                right: 0;
            }
        }

        /* 노트북 */
        @media (min-width: 1400px) and (max-width: 1600px) {
            .section_txt {
                padding-bottom: 20px;
            }

            .sec_tit {
                font-size: 1.5em;
            }

            .sec_txt {
                font-size: 2.5em;
            }

            /* 사업분류 레이아웃 */
            .sec6_bg__img {
                left: 0;
            }

            #sec6_plus1 .sec6_bg__img,
            #sec6_plus3 .sec6_bg__img {
                top: 50%;
                right: -5vw;
                transform: translate(0%, -47.5%);
            }

            #sec6_plus3 .sec6_bg__img4 {
                right: 0;
            }
        }

    </style>
    <!-- 반응형 쿼리 end -->

    <!-- 이미지 마우스 트렌스 폼 -->
    <script>
        $(document).ready(function() {
            var mql = window.matchMedia("screen and (min-width: 1680px)");

            if (mql.matches) {
                let img1, img2, img3, img4;
                let x = 0,
                    y = 0;
                let mx = 0,
                    my = 0;
                const speed = 0.03;
                const loop = () => {
                    mx += (x - mx) * speed;
                    my += (y - my) * speed;
                    window.requestAnimationFrame(loop);
                }
                const mouseFunc = (e) => {
                    x = (e.clientX - window.innerWidth / 2), y = (e.clientY - window.innerHeight / 2);
                    img1.style.transform = `translate(${-(mx/22)}px, ${-(my/300)}px)`;
                    img2.style.transform = `translate(${-(mx/14)}px, ${-(my/21)}px)`;
                    img3.style.transform = `translate(${-(mx/12)}px, ${-(my/250)}px)`;
                    img4.style.transform = `translate(${-(mx/22)}px, ${-(my/300)}px)`;
                }
                window.onload = () => {
                    img1 = document.getElementById("sec6_plus__img1_moust");
                    img2 = document.getElementById("sec6_plus__img2_moust");
                    img3 = document.getElementById("sec6_plus__img3_moust");
                    img4 = document.getElementById("sec6_plus__img4_moust");

                    loop();
                    window.addEventListener("mousemove", mouseFunc);
                }
            }
        });

    </script>
    
    <style>
        .section_nav {
            position: fixed;
            z-index: 10;
            top: 0;
            right: 0;
            width: auto;
            padding: 20px;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .section_nav.mobile {
            display: none;
        }

        .section_nav ul {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }

        .section_nav ul li {
            width: auto;
            margin: 5px;
            position: relative;
        }

        .section_nav ul li a {
            display: block;
            width: 7px;
            height: 7px;
            background-color: #018cd5;
            border-radius: 10px;
            transition: 0.2s;
        }

        .section_nav ul li.on a {
            background-color: #fff;
            border: 1px solid rgba(36, 89, 132, 1);
            transform: scale(1.2);
        }

        .section_nav ul li.on a:before {
            font-family: 'NanumGothic';
            font-weight: 100;
            display: none;
            width: 120px;
            clear: both;
            font-size: .2em;
            position: absolute;
            left: -130px;
            top: -1px;
            text-align: right;
            color: #018cd0;
            transition: 0.5s;
        }

        .section_nav ul li.on:nth-child(1) a:before {
            /*content: "메인페이지";*/
            display: block;
        }

        .section_nav ul li.on:nth-child(2) a:before {
            /*content: "우리는 첸노";*/
            display: block;
        }

        .section_nav ul li.on:nth-child(3) a:before {
            /*content: "방송,광고 서비스";*/
            display: block;
            color: #fff;
        }

        .section_nav ul li.on:nth-child(4) a:before {
            /*content: "솔루션 개발";*/
            display: block;
            color: #fff;
        }

        .section_nav ul li.on:nth-child(5) a:before {
            /*content: "연구개발";*/
            display: block;
            color: #fff;
        }

        .section_nav ul li.on:nth-child(6) a:before {
            /*content: "공식쇼핑몰";*/
            display: block;
        }

        .section_nav ul li.on:nth-child(7) a:before {
            /*content: "파트너사";*/
            display: block;
        }

        .section_nav ul li.on:nth-child(8) a:before {
            /*content: "인재채용";*/
            display: block;
            color: #fff;
        }

        .section_nav ul li.on:nth-child(9) a:before {
            /*content: "CS정보";*/
            display: block;
            color: #fff;
        }

    </style>

    <script>
        $(document).ready(function(){
            var mql = window.matchMedia("screen and (min-width: 1600px)");
        if (mql.matches) {
            
            $("html, body").css("overflow-y", "hidden");
            
            var scroll = function() {

            var $nav = null,
                $cnt = null,
                moveCnt = null,
                moveIndex = 0,
                moveCntTop = 0,
                winH = 0,
                time = false; // 새로 만든 변수

            $(document).ready(function() {
                init();
                initEvent();
            });

            var init = function() {
                $cnt = $("#main_vs");
                $nav = $(".section_nav a");
                $nav2 = $(".section_nav");
            };

            var initEvent = function() {
                $("html ,body").scrollTop(0);
                winResize();
                $(window).resize(function() {
                    winResize();
                });
                $nav.on("click", function() {
                    moveIndex = $(this).parent("li").index();
                    moving(moveIndex);
                    return false;
                });
                $cnt.on("mousewheel", function(e) {
                    if (time === false) { // time 변수가 펄스일때만 휠 이벤트 실행
                        wheel(e);
                    }
                });
            };

            var winResize = function() {
                winH = $(window).height();
                $cnt.children("section").height(winH);
                $("html ,body").scrollTop(moveIndex.scrollTop);
            };

            var wheel = function(e) {
                if (e.originalEvent.wheelDelta < 0) {
                    if (moveIndex < 9) {
                        moveIndex += 1;
                        moving(moveIndex);
                    };
                } else {
                    if (moveIndex > 0) {
                        moveIndex -= 1;
                        moving(moveIndex);
                    };
                };
            };

            var moving = function(index) {
                time = true // 휠 이벤트가 실행 동시에 true로 변경
                moveCnt = $cnt.children("section").eq(index);
                moveCntTop = moveCnt.offset().top;
                $("html ,body").stop().animate({
                    scrollTop: moveCntTop
                }, 350, function() {
                    time = false; // 휠 이벤트가 끝나면 false로 변경
                });
                $nav.parent("li").eq(index).addClass("on").siblings().removeClass("on");

            };
        };

        scroll();
            
            
        } else {
            $("div.section_nav").addClass("mobile");
        }
        });
        


        

    </script>
    
</head>

<!-- oncontextmenu='return false' onselectstart='return false' ondragstart='return false' -->

<body>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/header.php"; ?>

    <!-- 첸노 홈페이지 메인 start -->
    <div id="main">

        <div class="section_nav">
            <ul>
                <li class="on" class="a"><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>

        <figure id="main_vs" class="content">

            <!-- 메인 비쥬얼 -->
            <section class="section gradient" id="section1">
                <img src="./img/sec1_bg.png" alt="" class="sec1_bg">
                <div id="wrapMe">
                    <div id="layMe">
                        <div id="conMe">
                            <!--       Vehicle One -->
                            <div class="slide showing">
                                <img src="./img/pc_layout__ex2.png" alt="" />
                                <div class="vehicle-details">
                                    <h1>Advertising X Technology</h1>
                                    <div class="v-info">
                                        <div class="v-info-item">
                                            광고와 기술이 만나다
                                            <h2>고객사들의 성공을 위해 다양한 광고 정보를 제공하고 안내 드립니다.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--       Vehicle One -->

                            <!--       Vehicle Three -->
                            <div class="slide">
                                <img src="./img/pc_layout__ex3.png" alt="" />
                                <div class="vehicle-details">
                                    <h1>Just be myself</h1>
                                    <div class="v-info">
                                        <div class="v-info-item">
                                            변화와 혁신을 거듭하는 기업
                                            <h2>끊임없는 변화와 혁신을 위해 광고주 입장을 바라보며, 매출과 이익창출에 극대화라는 명제를 실현합니다.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--       Vehicle Three -->
                            <!--       Vehicle Four -->
                            <div class="slide">
                                <img src="./img/pc_layout__ex4.png" alt="" />
                                <div class="vehicle-details">
                                    <h1>We are cenno</h1>
                                    <div class="v-info">
                                        <div class="v-info-item">
                                            우리는 첸노입니다
                                            <h2>첸노는 기존과 다른 서비스로 차별화된 서비스를 제공드립니다.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--       Vehicle Four -->
                        </div>
                        <!--     Swap Btns -->
                        <div class="swapBtn">&#8592;</div>
                        <div class="swapBtn">&#8594;</div>
                        <!--     Swap Btns -->

                    </div>
                </div>

                <script>
                    var btn = document.querySelectorAll(".swapBtn");
                    var slides = document.querySelectorAll(".slide").length - 1;
                    var slot = 0;

                    btn[0].addEventListener("click", function(e) {
                        if (play) {
                            clearInterval(play);
                        }
                        var e = document.querySelector(".showing");

                        if (slot == 0) {
                            slot = 3;
                            document.querySelectorAll(".slide")[slides].classList.add("showing");
                            e.classList.remove("showing");
                        } else {
                            slot--;
                            e.previousElementSibling.classList.add("showing");
                            e.classList.remove("showing");
                        }
                    });

                    btn[1].addEventListener("click", function(e) {
                        if (play) {
                            clearInterval(play);
                        }
                        var e = document.querySelector(".showing");

                        if (slot == slides) {
                            slot = 0;
                            document.querySelectorAll(".slide")[0].classList.add("showing");
                            e.classList.remove("showing");
                        } else {
                            slot++;
                            e.nextElementSibling.classList.add("showing");
                            e.classList.remove("showing");
                        }
                    });

                    function autoPlay() {
                        e = document.querySelector(".showing");
                        if (slot == slides) {
                            slot = 0;
                            document.querySelectorAll(".slide")[0].classList.add("showing");
                            e.classList.remove("showing");
                        } else {
                            slot++;
                            e.nextElementSibling.classList.add("showing");
                            e.classList.remove("showing");
                        }
                    }

                    var play = setInterval(autoPlay, 5000);

                </script>

                <div class="scroll_icon">
                    <a href=""><img src="./img/scroll.png" alt=""></a>
                </div>

            </section>

            <!-- section2 -->
            <section class="section" id="section2">
                <div class="sec2_content__box">

                    <div class="cont_tit__box">
                        <h1 data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">능력있는 회사, 우리는 첸노 입니다.</h1>
                        <p data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">Capable company, We are Cenno</p>
                    </div>

                    <div class="sec2_table">
                        <div class="sec2_ta__box sec2_ta__full sec2_ta__box1" data-aos="fade-up" data-aos-duration="800">
                            <div class="board">
                                <div class="board_tit">
                                    <h1>NEWS</h1>
                                    <a href="./board/board.php">+</a>
                                </div>



                                <!--<div class="board_list">
                                    <div class="bo_list__box"><a href="" class="bo_list__con">
                                            <td width="500"><a href="./read.php?idx=<?php echo $board["idx"];?>"><?php echo $title;?></a></td>
                                            <p>2022.01.03</p>
                                        </a></div>
                                    <div class="bo_list__box"><a href="" class="bo_list__con">
                                            <span>[임시텍스트] 같은 군영과 기쁘며, 있으랴? 풀이 구하지 풀밭에 위하여</span>
                                            <p>2022.01.03</p>
                                        </a></div>
                                    <div class="bo_list__box"><a href="" class="bo_list__con">
                                            <span>[이반케어] 입안 염증으로 고생 한다면 ... 이반케어 15초 광고 (치아교</span>
                                            <p>2022.01.03</p>
                                        </a></div>
                                    <div class="bo_list__box"><a href="" class="bo_list__con">
                                            <span>미묘한 그들에게 것이다.보라, 넣는 있는 어디 부패를 칼이다, 약동 하</span>
                                            <p>2022.01.03</p>
                                        </a></div>
                                </div>-->
                                <?php
            if(isset($_GET['page'])){
              $page = $_GET['page'];
                }else{
                  $page = 1;
                }
                  $sql = mq("select * from board");
                  $row_num = mysqli_num_rows($sql);
                  $list = 4;

                  $start_num = ($page-1) * $list;

                  $sql2 = mq("select * from board order by idx desc limit $start_num, $list");  
                  while($board = $sql2->fetch_array()){
                  $title=$board["title"]; 
                    if(strlen($title)>30)
                    { 
                      $title=str_replace($board["title"],mb_substr($board["title"],0,40,"utf-8")." ...",$board["title"]);
                    }
                  ?>
                                <div class="board_list">
                                    <div class="bo_list__box">
                                        <a href="./board/read.php?idx=<?php echo $board["idx"];?>" class="bo_list__con"><?php echo $title;?>
                                            <p><?php echo $board['date']?></p>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                        </div>
                        <div class="sec2_ta__box sec2_ta__box2" data-aos="fade-up" data-aos-duration="800">
                            <div class="sec2_ta__txtbox">
                                <h1 class="sec2_cont__tit">회사소개</h1>
                                <span class="sec2_cont__line"></span>
                                <p class="sec2_cont__txt">첸노는 방송/광고 솔루션 개발 및<br>서비스 전문기업 입니다.</p>
                                <a href="" class="sec2_link1">자세히 보기</a>
                            </div>

                        </div>
                        <div class="sec2_ta__box sec2_ta__box3" data-aos="fade-up" data-aos-duration="800">
                            <div class="sec2_ta__txtbox">
                                <h1 class="sec2_cont__tit">사업분야</h1>
                                <span class="sec2_cont__line"></span>
                                <p class="sec2_cont__txt">첸노의 최고의 기술력과 서비스를<br>경험해 보세요.</p>
                                <a href="" class="sec2_link2">자세히 보기</a>
                            </div>
                        </div>
                        <div class="sec2_ta__box sec2_ta__box4" data-aos="fade-down" data-aos-duration="800">
                            <div class="sec2_ta__txtbox">
                                <h1 class="sec2_cont__tit">오시는길안내</h1>
                                <span class="sec2_cont__line"></span>
                                <p class="sec2_cont__txt">만족만큼 믿음을 줄 수 있는<br>첸노 입니다.</p>
                                <a href="" class="sec2_link2">지도안내 바로가기</a>
                            </div>
                        </div>
                        <div class="sec2_ta__box sec2_ta__box6" data-aos="fade-down" data-aos-duration="800">
                            <div class="sec2_ta__txtbox">
                                <h1 class="sec2_cont__tit">채용정보</h1>
                                <span class="sec2_cont__line"></span>
                                <p class="sec2_cont__txt">첸노와 함께 발전 할 인재를<br>기다립니다.</p>
                                <a href="" class="sec2_link3">첸노 인재상 확인하기</a>
                            </div>
                        </div>
                        <div class="sec2_ta__box sec2_ta__full sec2_ta__box5" data-aos="fade-down" data-aos-duration="800">



                            <!-- Swiper -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="section_in swiper-slide"><img src="./img/sec2_last_slide1.png" alt=""></div>
                                    <div class="section_in swiper-slide"><img src="./img/sec2_last_slide2.png" alt=""></div>
                                    <div class="section_in swiper-slide"><img src="./img/sec2_last_slide3.png" alt=""></div>
                                    <div class="section_in swiper-slide"><img src="./img/sec2_last_slide4.png" alt=""></div>


                                </div>

                                <div class="swiper_btn__box">
                                    <div class="sw_arw">
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>

                                    <div class="swiper_btn__page">
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>



                            </div>

                            <!-- Swiper JS -->
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    slidesPerView: 1,
                                    spaceBetween: 30,
                                    loop: true,
                                    pagination: {
                                        el: ".swiper-pagination",
                                        clickable: true,
                                    },
                                    navigation: {
                                        nextEl: ".swiper-button-next",
                                        prevEl: ".swiper-button-prev",
                                    },

                                    autoplay: {
                                        delay: 3000,
                                        disableOnInteraction: true // 쓸어 넘기거나 버튼 클릭 시 자동 슬라이드 정지.
                                    },
                                });

                            </script>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section4 -->
            <section class="section" id="section4">
                <div class="sec4_box">
                    <div class="cont_tit__box">
                        <h1 data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">About Us</h1>
                        <p data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">첸노는 클라이언트의 Needs에 맞는 최상의 서비스를 제공하고 있습니다.</p>
                    </div>

                    <div class="sec4_main__visual">
                        <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                            <span><i class="fa-solid fa-square-poll-vertical"></i></span>
                            <h1>RESULT</h1>
                            <h2>상상하는 것 이상의<br>결과를 만들어 냅니다.</h2>
                        </div>

                        <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                            <span><i class="fa-solid fa-handshake"></i></span>
                            <h1>CREATIVE</h1>
                            <h2>첸노는 크리에이티브한 발상으로<br>특별함을 선사해드립니다.</h2>
                        </div>

                        <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
                            <span><i class="fa-solid fa-list-check"></i></span>
                            <h1>VISION</h1>
                            <h2>브랜드의 가치는 곧<br>우리의 가치입니다.</h2>
                        </div>

                        <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="700">
                            <span><i class="fa-solid fa-diagram-project"></i></span>
                            <h1>CONNECT</h1>
                            <h2>고객의 니즈반영에 그치지 않고<br>혁신가치 그 이상을 창출하기 위해<br>지속적으로 소통합니다.</h2>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section6 -->
            <section class="section sec6_plus" id="section6">
                <div class="sec6_box">
                    <div class="sec6_bg__img" id="sec6_plus__img1_moust">
                        <img src="./img/pc_layout.png" alt="" class="sec6_pc" data-aos="fade-up" data-aos-duration="1600">
                    </div>
                    <div class="sec6_text">
                        <h1 data-aos="fade-up" data-aos-duration="1600" data-aos-delay="300">차별화된 방송, 광고 <br class="media_br"><strong>서비스 전문기업</strong></h1>
                        <p data-aos="fade-up" data-aos-duration="1600" data-aos-delay="600"><br>첸노는 방송/광고 등의 <br class="media_br">서비스 전문 기업으로 고객과의 <br class="media_br">신뢰를 최우선으로 합니다.<br><br class="media_br">최고의 기술력과<br class="media_br">서비스를 경험하실 수 있도록 <br class="media_br">첸노가 나서겠습니다.</p>

                        <a href="" class="sec6_more" data-aos="fade-up" data-aos-duration="1600" data-aos-delay="200">자세히보기 →</a>
                    </div>

                </div>

            </section>

            <!-- section6 sec6_plus1 -->
            <section class="section" id="sec6_plus1">
                <div class="sec6_box">

                    <div class="sec6_text">
                        <h1 data-aos="fade-left" data-aos-duration="1600" data-aos-delay="300">프로그램 솔루션 <br class="media_br"><strong>개발 전문기업</strong></h1>
                        <p data-aos="fade-left" data-aos-duration="1600" data-aos-delay="600"><br>맞춤형 CRM을 개발하여 <br class="media_br">실 사용에 안정적인 <br class="media_br">서비스를 제공합니다.<br><br class="media_br">최상의 솔루션 플랫폼으로 <br class="media_br">실 사용에 최적화된 프로그램을 <br class="media_br">사용해 보세요.</p>
                        <a href="" class="sec6_more" data-aos="fade-up" data-aos-duration="1600" data-aos-delay="200">자세히보기 →</a>
                    </div>

                    <div class="sec6_bg__img" id="sec6_plus__img2_moust">
                        <img src="./img/sec6_program__img.png" alt="" class="sec6_pc" data-aos="fade-right" data-aos-duration="1600">
                    </div>

                </div>

            </section>

            <!-- section6 sec6_plus2 -->
            <section class="section" id="sec6_plus2">
                <div class="sec6_box">
                    <div class="sec6_bg__img sec6_bg__img3" id="sec6_plus__img3_moust">
                        <img src="./img/sec6_RnD__img.png" alt="" class="sec6_pc" data-aos="fade-right" data-aos-duration="1600">
                    </div>
                    <div class="sec6_text">
                        <h1 data-aos="fade-left" data-aos-duration="1600" data-aos-delay="300">첸노 R &amp; D 사업의 <br class="media_br"><strong>핵심 연구 개발</strong></h1>
                        <p data-aos="fade-left" data-aos-duration="1600" data-aos-delay="600"><br>발전가능성의 경쟁력을 조사하여 <br class="media_br">뛰어난 기술력으로 연구개발을 <br class="media_br">진행하고 있습니다.<br><br class="media_br">첸노만의 기술력으로 <br class="media_br">시장발전에 대한 노력을 <br class="media_br">가하고 있습니다.</p>
                        <a href="" class="sec6_more" data-aos="fade-up" data-aos-duration="1600" data-aos-delay="200">자세히보기 →</a>
                    </div>

                </div>

            </section>

            <!-- section6 sec6_plus3 -->
            <!--<section class="section" id="sec6_plus3">
                <div class="sec6_box">

                    <div class="sec6_text">
                        <h1 data-aos="fade-left" data-aos-duration="1600" data-aos-delay="300">온라인 종합 스토어 <br class="media_br"><strong>얼씨구넷</strong></h1>
                        <p data-aos="fade-left" data-aos-duration="1600" data-aos-delay="600"><br>상품 마케팅을 전문으로 <br class="media_br">제품의 퀄리티와 가격 경쟁력이 <br class="media_br">우수한 상품을 판매합니다.<br><br class="media_br">고객의 니즈를 만족시키기 위해 <br class="media_br">최선을 다하는 <br class="media_br">온라인 스토어 입니다.</p>
                        <a href="" class="sec6_more" data-aos="fade-up" data-aos-duration="1600" data-aos-delay="200">자세히보기 →</a>
                    </div>

                    <div class="sec6_bg__img sec6_bg__img4" id="sec6_plus__img4_moust">
                        <img src="./img/sec6_mall__img.png" alt="" class="sec6_pc" data-aos="fade-right" data-aos-duration="1600">
                    </div>

                </div>

            </section>-->

            <!-- section7 -->
            <section class="section" id="section7">
                <div class="sec7_content__box">
                    <div class="cont_tit__box">
                        <h1 data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">첸노와 함께하는 파트너사 입니다.</h1>
                        <p data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">Cenno partners</p>
                    </div>

                    <div class="partners">
                        <ul>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_skylife.png" alt="">
                                <p>KT 스카이라이프</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_skbroadband.png" alt="">
                                <p>SK 브로드밴드</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_lguplus.png" alt="">
                                <p>LG 유플러스</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_hellolg.png" alt="">
                                <p>LG 헬로비전 충남방송</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_kbbank.png" alt="">
                                <p>KB 국민은행</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_kbbank2.png" alt="">
                                <p>KB 증권</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_koreapress.png" alt="">
                                <p>한국언론진흥재단</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_seongnam.png" alt="">
                                <p>성남시</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_globalgyung.png" alt="">
                                <p>경기도</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_kwangdong.png" alt="">
                                <p>광동제약</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_gunjiin.png" alt="">
                                <p>건지인</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <img src="./img/partner/pt_amos.png" alt="">
                                <p>아모스팜</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- section8 -->
            <section class="section" id="section8">
                <div class="sec8_content">
                    <h1 class="sec8_tit" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">신뢰와 열정으로 첸노와 함께 발전 할<br>인재를 기다립니다.</h1>

                    <div class="sec8_link">
                        <a href="" class="sec8_link__a" target="_blank" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">첸노 인재상 →</a>
                        <a href="" class="sec8_link__a" target="_blank" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">첸노 채용공고 →</a>
                    </div>
                </div>

            </section>

            <!-- section9 -->
            <section class="section" id="section9">
                <!-- 첸노 푸터 start -->
                <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
                <!-- 첸노 푸터 end -->
            </section>
        </figure>
    </div>
    <!-- 첸노 홈페이지 메인 end -->
    <script>
        AOS.init();

    </script>
</body>

</html>
