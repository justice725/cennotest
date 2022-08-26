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
    
    <title>:: CENNO :: CSCENTER ::</title>
    
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

    <link rel="stylesheet" href="../css/font.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- 기본 css start -->
    <link rel="stylesheet" href="../css/default.css">
    <!-- 기본 css end -->
    
    <!-- 첸노 헤더 start -->
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/header.js"></script>

    <style>
        #hd {
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
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

        ul.fnb li a {
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

    <!-- 첸노 푸터 start -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- 첸노 푸터 end -->
    
    <!-- 본페이지 시작 -->
    <style>
        .sub_main__visual {
            width: 100%;
            height: 600px;
            background-size: 100% auto;
            background-image: url("./img/cs_bg.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .sub_main_tit {
            width: 1200px;
            margin: 0 auto;
            height: 100%;
            display: flex;
            text-align: left;
            align-items: center;
            align-content: center;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .sub_main_tit h1 {
            text-align: center;
            width: 100%;
            color: #fff;
            font-size: 65px;
            font-family: 'NotoSansKR-r';
            letter-spacing: -5px;
            /*text-shadow: 1px 1px 12px #fff;*/
            transition-timing-function: ease;
            transform: translate3d(0,100px,0);
            opacity: 0;
            transition-duration: 1s;
            transition-delay: .3s;
            margin-top: 30px;
        }
        .sub_main_tit h1.on {
            opacity: 1;
            transform: translateZ(0);
        }
        .sub_main_tit span {
            display: block;
            width: 20px;
            height: 3px;
            background-color: #fff;
            margin: 25px auto;
            transition-timing-function: ease;
            transform: translate3d(0,100px,0);
            opacity: 0;
            transition-duration: 1s;
            transition-delay: 0.45s;
            display: none;
        }
        .sub_main_tit span.on {
            opacity: 0.5;
            transform: translateZ(0);
        }
        .sub_main_tit p {
            width: 100%;
            text-align: center;
            color: #fff;
            font-size: 18px;
            font-family: 'NotoSansKR-Thin';
            /*text-shadow: 1px 1px 8px #fff;*/
            transition-timing-function: ease;
            transform: translate3d(0,100px,0);
            opacity: 0;
            transition-duration: 1s;
            transition-delay: 0.55s;
            margin-top: 20px;
        }
        .sub_main_tit p.on {
            opacity: .71;
            transform: translateZ(0);
        }
        
        /* 페이지 네비 */
        #bo_ser {
            margin: 0px auto;
            margin-bottom: 0;
            color: #333;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            width: 100%;
            
        }
        .bo_ser_box {
            width: 1200px;
            margin: 0 auto;
            height: 65px;
            line-height: 65px;
            display: flex;
            flex-wrap: nowrap;
            align-content: center;
            align-items: center;
            justify-content: space-between;
        }
        #bo_ser > ul {
            display: flex;
            flex-wrap: nowrap;
            align-content: center;
            
        }
        #bo_ser a {
            display: block;
            color: #333;
        }
        #bo_content {
            width: 100%;
            padding-bottom: 50px;
            margin-bottom: 50px;
            border-bottom: 1px solid #eee;
        }
        
        
        .page_nav {
            display: flex;
            flex-wrap: nowrap;
            align-content: center;
            text-align: center;
        }
        .page_nav > a, .page_nav > div {
            display: block;
            width: 150px;
            height: 100%;
            text-align: center;
            color: #eee;
            font-size: 14px;
            font-family: 'NanumGothicLight';
            position: relative;
        }
        .page_nav > a {
            opacity: 0.4;
        }
        .page_nav > a:after {
            position: absolute;
            right: 0;
            content: " > ";
            display: inline-block;
            clear: both;
            text-align: center;
        }
        .page_nav > div {
            color: #333;
            font-size: 14px;
            cursor: pointer;
            position: relative;
        }
        
         .page_nav > div i {
            font-size: 10px;
            padding-left: 10px;
             right: 10px;
        }
        
        .page_nav__sub {
            width: 150px;
            position: absolute;
            left: 0;
            z-index: 999;
            display: none;
        }
        .page_nav__sub ul {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-between;
        }
        .page_nav__sub ul li {
            width: 100%;
            border: 1px solid #eee;
            height: 50px;
            text-align: center;
            line-height: 50px;
        }
        .page_nav__sub ul li {
            border-top: 0;
        }
        .page_nav__sub ul li a {
            width: 100%;
            height: 100%;
            position: relative;
            transition: 0.3s;
        }
        .page_nav__sub ul li a.on {
            color: #fff !important;
            background-color: #2c6cb9;
        }
        .page_nav__sub ul li a.hover {
            color: #fff !important;
            background-color: #2c6cb9;
        }
        .page_nav > div i {
            transition: .3s;
            transform-origin: center;
        }
        .page_nav > div.click i.fa-chevron-down {
            transform: rotateX( -180deg );
            
        }
        /* 페이지 네비 끝 */
        
        #board_area {
            width: 1200px;
            height: auto;
            margin: 0 auto;
        }
        .content_tit {
            width: 100%;
            height: auto;
            margin: 75px auto;
            text-align: center;
            margin-bottom: 100px;
        }
        .content_tit h1 {
            display: block;
            margin: 25px auto;
            font-size: 65px;
            font-family: 'NotoSansKR-r';
            color: #61666c;
        }
        .content_tit span {
            display: block;
            width: 20px;
            height: 3px;
            background-color: #61666c;
            margin: 25px auto;
            opacity: .4;
        }
        .content_tit h4 {
            display: block;
            font-size: 17px;
            font-family: 'NotoSansKR-Thin';
            color: #61666c;
        }
        
        .form_box {
            width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: nowrap;
            margin-bottom: 100px;
        }
        .form_box .form_left {
            width: 400px;
            height: auto;
            border: 1px solid #333;
            padding: 50px;
        }
        .form_box .form_right {
            width: 800px;
            height: auto;
            border: 1px solid #333;
            padding: 50px;
            background: #333;
        }
        .form_right h1 {
            display: block;
            padding-bottom: 50px;
            font-size: 80px;
            letter-spacing: -2.5px;
            font-weight: bold;
            color: #7e7e87;
            font-family: 'NotoSansKR-m';
        }
        .form_right span {
            display: block;
            font-size: 20px;
            color: #7e7e87;
            line-height: 30px;
            font-family: 'NotoSansKR-Thin';
            padding-bottom: 50px;
        }
        
        /* 서클 내용 */
        .cs_order {
            display: block;
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            align-content: center;
            margin-bottom: 100px;
        }
        .cs_order div {
            width: 200px;
            height: 200px;
            border: 4px solid #e0e6ed;
            border-radius: 200px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .cs_order div i {
            padding: 15px;
            font-size: 25px;
            color: #018cd5;
        }
        .cs_order div p {
            padding: 25px;
            font-size: 17px;
            color: #018cd5;
            font-family: 'NanumGothic';
        }
        
        /* 서클 아래 텍스트 */
        .circle_txt {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        .circle_txt div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: space-between;
        }
        .circle_txt div:nth-child(1) {
            width: 900px;
        }
        .circle_txt div span {
            display: block;
            text-align: left;
            width: 100%;
            padding: 10px 0px;
            font-family: 'NanumGothicLight';
            font-size: 14px;
            color: #e13051;
        }
        .company_down {
            display: block;
            padding: 15px 25px;
            border: 2px solid #018cd5;
            color: #018cd5;
            border-radius: 50px;
            transition: 0.2s;
        }
        .company_down:hover {
            color: #fff;
            background-color: #018cd5;
        }
    </style>
    
     <script>
$(document).ready(function(){
    $(".page_nav > div").click(function(){
                $(this).toggleClass("click");
        $(".page_nav__sub").stop().slideToggle(300);
            });
    $(".page_nav__sub ul li a").hover(function(){
        $(this).addClass("hover");
    });
    $(".page_nav__sub ul li a").mouseleave(function(){
        $(this).removeClass("hover");
    });
});
            

    </script>
    
    <script>
        $(document).ready(function(){
            $(".sub_main_tit h1").addClass("on");
            $(".sub_main_tit span").addClass("on");
            $(".sub_main_tit p").addClass("on");
        });
    </script>
    <!-- 본페이지 끝 -->
    
    <!-- 반응형 쿼리 start -->
    <link rel="stylesheet" href="../css/common_media.css">
    <!-- 반응형 쿼리 end -->
    
    <script type="text/javascript">
		function mail_check(v, n) {
			var regEmail = /\w{2,}[@][\w\-]{2,}([.]([\w\-]{2,})){1,3}$/;
			var tmps = new Array();
			if(v.indexOf(',') > -1) {
				tmps = v.split(',');
			}
			else if(v.indexOf(';') > -1) {
				tmps = v.split(';');
			}
			else {
				tmps.push(v);
			}
			for(var i=0; i<tmps.length; i++) {
				if(tmps[i].indexOf('<') > -1 && tmps[i].indexOf('>') > -1) {
					tmps[i] = tmps[i].substring(tmps[i].indexOf('<')+1, tmps[i].indexOf('>'));
				}
				if(!regEmail.test(tmps[i])) {
					return false;
				}
			}
			if(n == 1 && tmps.length != 1) {
				return false;
			}
			return true;
		}
		function mail_proc(f) {
			if(!f.femail.value) {
				alert('보내는이 메일 주소를 입력하세요.');
				f.femail.focus();
				return false;
			}
			if(!mail_check(f.femail.value, 1)) {
				alert('이메일 주소가 유효하지 않습니다.');
				f.femail.focus();
				return false;
			}
			if(!f.temail.value) {
				alert('받는이 메일 주소를 입력하세요.');
				f.temail.focus();
				return false;
			}
			else {
				if(!mail_check(f.temail.value)) {
					alert('메일 주소가 유효하지 않습니다.');
					f.temail.focus();
					return false;
				}
			}
			if(f.remail.value) {
				if(!mail_check(f.remail.value)) {
					alert('메일 주소가 유효하지 않습니다.');
					f.remail.focus();
					return false;
				}
			}
			if(f.hemail.value) {
				if(!mail_check(f.hemail.value)) {
					alert('메일 주소가 유효하지 않습니다.');
					f.hemail.focus();
					return false;
				}
			}
			if(!f.subject.value) {
				alert('제목을 입력하세요.');
				f.subject.focus();
				return false;
			}
			var editObj = CKEDITOR.instances.message;
			if(editObj.getData().length == 0) {
				alert('메일 내용을 입력하세요.');
				editObj.focus();
				return false;
			}
			f.target = 'frame_mail_proc';
			f.submit();
			return false;
		}
	</script>
    
</head>

<body id="cBody">
   <?php include_once "./header.php" ?>
   
   <div class="main">
        <div class="sub_main__visual">
           <div class="sub_main_tit">
               <h1 class="page_tit">CENNO CSCENTER</h1>
            <span class="page_line"></span>
            <p>언제나 고객님 곁에 첸노가 함께하겠습니다.</p>
           </div>
        </div>
        
        <div id="bo_ser">
          <div class="bo_ser_box">
              <div class="page_nav">
                <a href=""><i class="fa-solid fa-house-chimney"></i> HOME</a>
                <a href="">커뮤니티</a>
                <div>1:1문의<i class="fa-solid fa-chevron-down"></i>
                    <div class="page_nav__sub">
                        <ul>
                            <li><a href="./board.php" class="">공지사항<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                            <li><a href="./cs_center.php" class="on">1:1문의<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
          </div>
           
        </div>
           
           <div id="board_area">
       <div class="content_tit">
           <h1 data-aos="fade-up" data-aos-duration="800">고객문의</h1>
           <span data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-50"></span>
        <h4 data-aos="fade-up" data-aos-duration="1200" data-aos-offset="-50">문의내용에 대한 답변은 작성하신 메일을 통해 빠른 시일내로 안내 드리겠습니다.</h4>
       </div>
       
       <div class="cs_order">
           <div class="circle circle1" data-aos="fade-up" data-aos-duration="1200">
               <span>
                  <i class="fa-solid fa-file-pen"></i>
                   <p>문의내용 작성</p>
               </span>
            </div>
            <div class="circle circle2" data-aos="fade-up" data-aos-duration="1400">
               <span>
                  <i class="fa-solid fa-user-tie"></i>
                   <p>담당자 확인</p>
               </span>
            </div>
            <div class="circle circle3" data-aos="fade-up" data-aos-duration="1600">
               <span>
                  <i class="fa-solid fa-comments"></i>
                   <p>해당부서 전달</p>
               </span>
            </div>
            <div class="circle circle4" data-aos="fade-up" data-aos-duration="1800">
               <span>
                  <i class="fa-solid fa-list-check"></i>
                   <p>답변 조치</p>
               </span>
            </div>
            <div class="circle circle5" data-aos="fade-up" data-aos-duration="2000">
               <span>
                  <i class="fa-solid fa-check"></i>
                   <p>결과 진행</p>
               </span>
            </div>
       </div>
       
       <div class="circle_txt">
           <div>
               <span>* 문의내용 작성 시, 꼭 담당자 정보를 정확하게 기입해주셔야 합니다.</span>
               <span>* 잘못된 정보를 기입하는 경우, 답변이 어려울 수 있습니다.</span>
               <span>* 첨부파일은 최대 500MB까지 업로드 가능합니다.</span>
           </div>
           <div>
               <a href="" class="company_down"><i class="fa-solid fa-download"></i>&nbsp;&nbsp;회사소개서 다운로드</a>
           </div>
       </div>
       
       <div class="form_box">
          
           <div class="form_left">
               <a href="" class="left_content">
                   <h1>광고 서비스</h1>
               </a>
               <a href="" class="left_content">
                   <h1>솔루션 서비스</h1>
               </a>
           </div>
           
           <div class="form_right">
               <h1>CONTACT</h1>
               <span>최상의 마케팅은 원활한 소통부터 시작합니다.<br>어떤 브랜드를 지향하는지, 마케팅을 통해 어떤 성과를 얻고 싶은지,<br>내용을 남겨주세요.<br>최고의 마케팅 성과로 보답하겠습니다.</span>
               
               <!-- 폼태그 -->
       <div id="mail_con">
	    <div id="mail_body__layer" class="layer_col">
            <div id="mail_form__layer">
                <table>
                    <form name="mail_form" method="post" enctype="multipart/form-data" action="./mail_form.php" onsubmit="return mail_proc(this);">
                    <tr>
                        <td><label for="femail">이메일</label><input type="text" name="femail" value="" placeholder="이메일을 적어 주세요."/></td>
                    </tr>


                    <tr style="position: fixed;top: -99999px;">
                        <td width="110" align="left">받는이</td>
                        <td align="left"><input type="text" name="temail" style="width:658px;" value="julee@cenno.co.kr" /></td>
                    </tr>
                    <tr style="position: fixed;top: -99999px;">
                        <td width="110" align="left">참조</td>
                        <td align="left"><input type="text" name="remail" style="width:658px;" /></td>
                    </tr>
                    <tr style="position: fixed;top: -99999px;">
                        <td width="110" align="left">숨은참조</td>
                        <td align="left"><input type="text" name="hemail" style="width:658px;" /></td>
                    </tr>


                    <tr>
                        <td><label for="subject">제목</label><input type="text" name="subject" placeholder="제목을 적어 주세요."/></td>
                    </tr>
                    
                    <!-- 추가 -->
                    <tr>
                        <td><label for="subject">회사명</label><input type="text" name="subject" placeholder="회사명을 적어 주세요."/></td>
                    </tr>
                    
                    <tr>
                        <td><label for="subject">담당자</label><input type="text" name="subject" placeholder="담당자를 적어 주세요."/></td>
                    </tr>
                    
                    <tr>
                        <td><label for="e_tell">연락처</label><input type="text" name="subject" placeholder="연락처를 적어 주세요."/></td>
                    </tr>
                    
                        
                    <!-- 추가 끝 -->
                    
                    <tr>
                        
                        <td><label for="attach">첨부파일</label><input type="file" name="attach" /></td>
                    </tr>

                    <tr>
                        <td>
                            <textarea name="message" placeholder="회사 홈페이지 주소, 예산, 기타 상담 요청 시 문의 주실 사항을 적어주세요."></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="메일발송" onclick="return mail_proc(this.form);" class="submit_btn"/>
                        </td>
                    </tr>
                </form>
            </table>
                <div style="display:none;">
                    <iframe src="" name="frame_mail_proc" id="frame_mail_proc" frameborder=0 margin=0 allowTransparency=false width="100%" height="100%"></iframe>
                </div>
            </div>
	    </div>

	</div>
           </div>
       </div>
       
       
        
        
    </div>
    
    </div>
    
    <!-- 첸노 푸터 start -->
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
    <!-- 첸노 푸터 end -->
    
    <script>
        AOS.init();
    </script>
</body>
