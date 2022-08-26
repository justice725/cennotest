<?php 
  include $_SERVER['DOCUMENT_ROOT']."/homepage/data/dbconfig.php";
session_start();
?>

<!DOCTYPE html>
<html lang="ko">

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
            background-image: url("./img/bg.png");
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
        
        .list_table {
            display: block;
            width: 1200px;
            margin: 0 auto;
        }
        tbody {
            display: block;
            color: #61666c;
            padding: 35px 10px;
            border-bottom: 1px solid #eee;
        }
        tbody:nth-child(1) {
            border-top: 1px solid #eee;
        }
        .no {
            width: 50px;
            text-align: center;
            font-size: 15px;
        }
        .tit {
            width: 800px;
            text-align: left;
            font-size: 20px;
            padding-left: 50px;
            font-family: 'NotoSansKR-m';
            transition: 0.3s;
        }
        .tit:hover {
            color: #2c6cb9 !important;
            padding-left: 55px;
            
        }
        .name {
            width: 120px;
            text-align: center;
            font-size: 15px;
        }
        .date {
            width: 200px;
            text-align: center;
            font-size: 15px;
        }
        .hit {
            width: 50px;
            text-align: center;
            font-size: 12px;
        }
        
        #page_num {
            display: block;
            margin: 75px auto;
            width: 1200px;
            text-align: center;
            color: #666;
            font-size: 13px;
            font-weight: 100;
            
        }
        #page_num ul {
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            font-family: 'NanumGothicLight';
        }
        #page_num ul li {
            padding: 0px 10px;
            color: #2c6cb9;
            cursor: pointer;
        }
        #page_num ul li a {
            color: #666;
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
    
</head>

<body>
   <?php include_once "./header.php"; ?>
   
   <div class="main">
        <div class="sub_main__visual">
           <div class="sub_main_tit">
               <h1 class="page_tit">CENNO NOTICE</h1>
            <span class="page_line"></span>
            <p>열린 마음으로 미래를 내다보며 당신의 최고의 파트너가 되겠습니다.</p>
           </div>
        </div>
        
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
            
          </div>
           
        </div>
    </div>
   
    <div id="board_area">
       <div class="content_tit">
           <h1 data-aos="fade-up" data-aos-duration="800">공지사항</h1>
           <span data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-50"></span>
        <h4 data-aos="fade-up" data-aos-duration="1200" data-aos-offset="-50">첸노의 소식을 전해드립니다.</h4>
       </div>
        <!-- 첸노 디자인팀 board license ft.wook -->
        <table class="list_table">
            <?php
            if(isset($_GET['page'])){
              $page = $_GET['page'];
                }else{
                  $page = 1;
                }
                  $sql = mq("select * from board");
                  $row_num = mysqli_num_rows($sql); //총 레코드 수 호출
                  $list = 5; //페이지당 노출 수
                  $block_ct = 5; //불록 페이지 수

                  $block_num = ceil($page/$block_ct); // 현페 블록 구하기
                  $block_start = (($block_num - 1) * $block_ct) + 1; // 블록 시작
                  $block_end = $block_start + $block_ct - 1; //블록 마지막

                  $total_page = ceil($row_num / $list);
                  if($block_end > $total_page) $block_end = $total_page;
                  $total_block = ceil($total_page/$block_ct);
                  $start_num = ($page-1) * $list;

                  $sql2 = mq("select * from board order by idx desc limit $start_num, $list");  
                  while($board = $sql2->fetch_array()){
                  $title=$board["title"]; 
                    if(strlen($title)>40)
                    { 
                      $title=str_replace($board["title"],mb_substr($board["title"],0,35,"utf-8")."...",$board["title"]);
                    }
                    //$sql3 = mq("select * from reply where con_num='".$board['idx']."'");
                    //$rep_count = mysqli_num_rows($sql3);
                  ?>
            <tbody data-aos="fade-up" data-aos-duration="800">
                <tr>
                    <td class="no"><?php echo $board['idx']; ?></td>
                    <td class="tit"><a href="./read.php?idx=<?php echo $board["idx"];?>"><?php echo $title;?></a></td>
                    <td class="name"><?php echo $board['name']?></td>
                    <td class="date"><?php echo $board['date']?></td>
                    <td class="hit"><?php echo $board['hit']; ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <div id="page_num">
            <ul>
                <?php
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면
            echo "<li class='fo_re'> &#60;&#60; </li>"; //처음이라는 글자에 빨간색 표시 
          }else{
            echo "<li><a href='?page=1'> &#60;&#60; </a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
          }
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면 빈값
            
          }else{
          $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
            echo "<li><a href='?page=$pre'> &#60; </a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
          }
          for($i=$block_start; $i<=$block_end; $i++){ 
            //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
            if($page == $i){ //만약 page가 $i와 같다면 
              echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
            }else{
              echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
            }
          }
          if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
          }else{
            $next = $page + 1; //next변수에 page + 1을 해준다.
            echo "<li><a href='?page=$next'> &#62; </a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
          }
          if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
            echo "<li class='fo_re'> &#62;&#62; </li>"; //마지막 글자에 긁은 빨간색을 적용한다.
          }else{
            echo "<li><a href='?page=$total_page'> &#62;&#62; </a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
          }
        ?>
            </ul>
        </div>
        <div id="write_btn">
           <?php
                if(isset($_SESSION['userid'])){ ?><a href="./write.php"><button>글쓰기</button></a> <?php }  ?>
            
        </div>
    </div>
    
    <!-- 첸노 푸터 start -->
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/homepage/footer.php"; ?>
    <!-- 첸노 푸터 end -->
    
    <script>
        AOS.init();
    </script>
</body>
