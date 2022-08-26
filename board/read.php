<?php include  $_SERVER['DOCUMENT_ROOT']."/homepage/data/dbconfig.php"; ?>
<!doctype html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="첸노">
    <meta name="keywords" content="첸노">
    <meta name="author" content="첸노">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    
    <title>:: CENNO :: NOTICE ::</title>
    
    
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
            margin-top: 50px;
        }
        .sub_main_tit p.on {
            opacity: .71;
            transform: translateZ(0);
        }
        
        #board_area {
            width: 100%;
            height: auto;
            margin: 0 auto;
        }
        
        #board_read {
            width: 100%;
            margin: 100px auto;
            display: flex;
            flex-wrap: wrap;
            margin-top: 0;
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
        .bo_file {
            width: 1200px;
            
            border: 1px solid #eee;
            border-radius: 5px;
            margin: 50px auto;
        }
        .list_back {
            color: #eee;
            font-size: 14px;
            font-family: 'NanumGothic';
        }
        .bo_file a {
            width: 100%;
            height: 100%;
            display: block;
            color: #333;
            font-size: 14px;
            font-family: 'NanumGothicLight';
            padding: 15px 20px;
            transition: 0.3s;
            border: 1px solid #fff;
            border-radius: 5px;
        }
        .bo_file a:hover {
            color: #245984;
            border: 1px solid #245984;
            border-radius: 5px;
        }
        #bo_content {
            width: 1200px;
            height: auto;
            margin: 0 auto;
            padding: 0px 50px;
            padding-bottom: 50px;
        }
        .bo_cont__tit {
            width: 100%;
            text-align: center;
            margin: 50px auto;
            margin-bottom: 0;
            color: #61666c;
            text-align: center;
            display: block;
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

<body>
   
   <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/header.php"; ?>
   
    <div class="main">
        <div class="sub_main__visual">
           <div class="sub_main_tit">
              
              <?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
              
              
               <h1 class="page_tit"><?php echo $board['title']; ?></h1>
            <span class="page_line"></span>
            <p>작성자 : <?php echo $board['name']; ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;작성날짜 : <?php echo $board['date']; ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;조회 : <?php echo $board['hit']; ?></p>
           </div>
        </div>
        

           
           <div id="board_area">
    <!-- 글 불러오기 -->
    <div id="board_read">
        
        <!-- 목록, 수정, 삭제 -->
        <div id="bo_ser">
          <div class="bo_ser_box">
              <div class="page_nav">
                <a href=""><i class="fa-solid fa-house-chimney"></i> HOME</a>
                <a href="">커뮤니티</a>
                <div>공지사항<i class="fa-solid fa-chevron-down"></i>
                    <div class="page_nav__sub">
                        <ul>
                            <li><a href="./board.php" class="on">공지사항<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                            <li><a href="./cs_center.php" class="">1:1문의<i class="fa-solid fa-arrow-right-long right_arow"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul>
                <li class="list_back"><a href="./board.php">목록으로</a></li>
                <?php if(isset($_SESSION['userid'])){ ?>
                <li><a href="write_reset.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
                <li><a href="delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
                <?php } ?>
            </ul>
          </div>
           
        </div>
        
        <div class="bo_cont__tit">&#91; <?php echo $board['title']; ?> &#93;</div>
        
        <div class="bo_file">
            <a href="./no_file/<?php echo $board['file'];?>" download><i class="fa-solid fa-download">&nbsp;&nbsp;|&nbsp;&nbsp;</i><?php echo $board['file']; ?></a>
        </div>

        <div id="bo_content">
           
            <?php echo nl2br("$board[content]"); ?>
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
