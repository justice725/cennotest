
$(function(){
    
    $(window).on('scroll', function(event, delta){
        const scrollTriger = 0;
            if(delta > 0) { // 스크롤 올릴 때
                scrollTriger++;
                console.log(scrollTriger+"scrolltriger On");
            } else if(delta < 0) { // 스크롤 내릴 때
                scrollTriger--;
                console.log(scrollTriger+"scrolltriger Down");
            };
            
            

        const WHeight = $('body').height(); // pc 기준 8230
        const ht = $(window).scrollTop();
        const sec1Offset = $('.page_wrap').offset().top; // pc 기준 766
        const wH = $(window).height();

        const sec0_2 = $(".section0_2").offset().top; // 두번째 brand mission 애니메이션 높이
        const animate_1 = $(".animate_1").offset().top; // 첫번째 카드 애니메이션 높이 
        const animate_2 = $(".animate_2").offset().top; // 두번째 카드 애니메이션 높이 
        const animate_3 = $(".animate_3").offset().top; // 세번째 카드 애니메이션 높이 

        const sec3_animate_1 = $(".sec3_animate_1").offset().top; // section3 첫번째 카드 애니메이션 높이
        const sec3_animate_2 = $(".sec3_animate_2").offset().top; // section3 두번째 카드 애니메이션 높이
        const sec3_animate_3 = $(".sec3_animate_3").offset().top; // section3 세번째 카드 애니메이션 높이
        const sec3_animate_4 = $(".sec3_animate_4").offset().top; // section3 네번째 카드 애니메이션 높이
        const text_wrap1_1 = $(".animate_1 .text_wrap").offset().top; // 카드 텍스트 애니메이션 모바일 높이
        const text_wrap1_2 = $(".animate_2 .text_wrap").offset().top; // 카드 텍스트 애니메이션 모바일 높이
        const text_wrap1_3 = $(".animate_3 .text_wrap").offset().top; // 카드 텍스트 애니메이션 모바일 높이

        const who_we_are = $(".who_we_are").offset().top; // we are cenno top 애니메이션 높이
        const comment = $(".comment").offset().top; // we are cenno 텍스트 애니메이션 높이
        const value_1 = $(".value_1").offset().top; // we are cenno 첫번째 카드 애니메이션 높이
        const value_2 = $(".value_2").offset().top; // we are cenno 두번째 카드 애니메이션 높이
        const value_3 = $(".value_3").offset().top; // we are cenno 세번째 카드 애니메이션 높이

        const text_animate_4 = $(".text_animate_4").offset().top; // 하단 첫번째 텍스트 애니메이션 높이
        const text_animate_4_wrap = $(".text_animate_4_wrap").offset().top
        const text_animate_5 = $(".text_animate_5").offset().top; // 하단 두번째 텍스트 애니메이션 높이
        const text_animate_5_wrap = $(".text_animate_5_wrap").offset().top


        // 첫번째 brandmission 텍스트 좌우스크롤 애니메이션
        if(ht > 0) {
            $(".paralax_title").css({transform:"translateX(-"+ht / 20 + "%)"});
        };
        // 첫번째 brandmission 텍스트 좌우스크롤 애니메이션 끝

        // 두번째 brandmission 텍스트 좌우스크롤 애니메이션
        if(ht > WHeight / 2) {
            $(".paralax_title2").css({transform:"translateX(-"+(ht /100)*22 + "%)"});
        };
        // 두번째 brandmission 텍스트 좌우스크롤 애니메이션 끝

        // 두번째 카드애니메이션 텍스트 애니메이션
        if(ht-(text_animate_4_wrap-(wH/2))>= 1 ) {
            $(".text_animate_4").stop().css({transform:"translateY(0)"});
        } else {
            $(".text_animate_4").stop().css({transform:"translateY(120%)"});
        }

        if(ht-(text_animate_5_wrap-(wH/2))>= 1 ) {
            $(".text_animate_5").stop().css({transform:"translateY(0)"});
        } else {
            $(".text_animate_5").stop().css({transform:"translateY(120%)"});
        }
        // 두번째 카드애니메이션 텍스트 애니메이션 끝

        if(ht > sec1Offset / 2) {
            $(".tit_holder .txt_mask:nth-child(1) span").stop().css({transform:"translateY(0)"});
            $(".tit_holder .txt_mask:nth-child(2) span").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".tit_holder .txt_mask:nth-child(3) span").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
        } else {
            $(".tit_holder .txt_mask:nth-child(1) span, .tit_holder .txt_mask:nth-child(2) span, .tit_holder .txt_mask:nth-child(3) span").stop().css({transform:"translateY(100%)"});
        }


        // 첫번째, 두번째, 세번째 카드 애니메이션 시작
        if(ht-(animate_1-(wH/2))>= 1 ) {
            $(".container_columns:nth-child(1) .txt_motion .txt_mask span").stop().css({transform:"translateY(0)"});
            $(".card1_1 .img_holder .img_wrap").stop().css({width:"100%",height:"100%","border-radius":"0"});
            $(".card1_1").stop().css({opacity:"1", transform:"translate3d(0,"+ -(ht-(animate_1-(wH/2)))/2.5+"px, 0)"});
            // 텍스트 애니메이션
            $(".card1_1 .text_animate_1 p").stop().css({transform:"translateY(0)"});
            $(".card1_1 .text_wrap h3").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".card1_1 .text_wrap .text_animate_3 p").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
        } else {
            $(".container_columns:nth-child(1) .txt_motion .txt_mask span").stop().css({transform:"translateY(120%)"});
        };

        if(ht-(animate_2-(wH/2))>= 1) {
            $(".container_columns:nth-child(2) .txt_motion .txt_mask span").stop().css({transform:"translateY(0)"});
            $(".card1_2 .img_holder .img_wrap").stop().css({width:"100%",height:"100%","border-radius":"0"});
            $(".card1_2").stop().css({opacity:"1", transform:"translate3d(0,"+ -(ht-(animate_2-(wH/2)))/2.5+"px, 0)"});
            // 텍스트 애니메이션
            $(".card1_2 .text_animate_1 p").stop().css({transform:"translateY(0)"});
            $(".card1_2 .text_wrap h3").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".card1_2 .text_wrap .text_animate_3 p").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
        } else {
            $(".container_columns:nth-child(2) .txt_motion .txt_mask span").stop().css({transform:"translateY(120%)"});
        };

        if(ht-(animate_3-(wH/2))>= 1) {
            $(".container_columns:nth-child(3) .txt_motion .txt_mask span").stop().css({transform:"translateY(0)"});
            $(".card1_3 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
            $(".card1_3").css({opacity:"1", transform:"translate3d(0,"+ -(ht-(animate_3-(wH/2)))/2.5+"px, 0)"});
            // 텍스트 애니메이션
            $(".card1_3 .text_animate_1 p").stop().css({transform:"translateY(0)"});
            $(".card1_3 .text_wrap h3").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".card1_3 .text_wrap .text_animate_3 p").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
        } else {
            $(".container_columns:nth-child(3) .txt_motion .txt_mask span").stop().css({transform:"translateY(120%)"});
        };
        // 첫번째, 두번째, 세번째 카드 애니메이션 끝

        

        // 하단 container_columns 카드 애니메이션 
        if(ht-(sec3_animate_1-(wH/2))>= 1) {
            $(".sec3_animate_1 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
        }

        if(ht-(sec3_animate_2-(wH/2))>= 1) {
            $(".sec3_animate_2 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
        }

        if(ht-(sec3_animate_3-(wH/2))>= 1) {
            $(".sec3_animate_3 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
        }

        if(ht-(sec3_animate_4-(wH/2))>= 1) {
            $(".sec3_animate_4 .img_holder .img_wrap").css({width:"100%",height:"100%","border-radius":"0"});
        }
        // 하단 container_columns 카드 애니메이션 끝

        // we are cenno top 애니메이션 시작
        if(ht-(who_we_are-(wH/2))>= 1) {
            $('.who_we_are p').stop().css({opacity:"1", transform:"translateY(0)"});
            $('.who_we_are h2').delay(300).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.who_we_are p, .who_we_are h2').stop().css({opacity:"0", transform:"translateY(100%)"});
        }
        // we are cenno top 애니메이션 끝

        // we are cenno 텍스트 애니메이션 시작
        if(ht-(comment-(wH/2))>= 1) {
            $('.comment p').delay(300).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.comment p').stop().css({opacity:"0", transform:"translateY(100%)"});
        }
        // we are cenno 텍스트 애니메이션 끝

        // we are cenno 첫번째 카드 애니메이션 시작
        if(ht-(value_1-(wH/2))>= 1) {
            $('.value_1').delay(0).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.value_1').stop().css({opacity:"0", transform:"translateY(20%)"});
        }
        // we are cenno 첫번째 카드 애니메이션 끝

        // we are cenno 두번째 카드 애니메이션 시작
        if(ht-(value_2-(wH/2))>= 1) {
            $('.value_2').delay(300).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.value_2').stop().css({opacity:"0", transform:"translateY(20%)"});
        }
        // we are cenno 두번째 카드 애니메이션 끝

        // we are cenno 세번째 카드 애니메이션 시작
        if(ht-(value_3-(wH/2))>= 1) {
            $('.value_3').delay(600).queue(function(next){
                $(this).stop().css({opacity:"1", transform:"translateY(0)"});
                next();
            });
        } else {
            $('.value_3').stop().css({opacity:"0", transform:"translateY(20%)"});
        }
        // we are cenno 두번째 카드 애니메이션 끝
        


        // 미디어 쿼리 스크립트 시작
        const maxwidth = matchMedia("screen and (max-width:766px)");

        if(maxwidth.matches) {
            // 첫번째, 두번째, 세번째 카드 애니메이션 시작
            if(ht-(animate_1-(wH/2))>= 1 ) {
                $(".card1_1").stop().css({opacity:"1", transform:"translate3d(0,0,0)"});                
            } else {
                $(".container_columns:nth-child(1) .txt_motion .txt_mask span").stop().css({transform:"translateY(120%)"});
            };

            if(ht-(animate_2-(wH/2))>= 1 ) {
                $(".card1_2").stop().css({opacity:"1", transform:"translate3d(0,0,0)"});                
            } else {
                $(".container_columns:nth-child(2) .txt_motion .txt_mask span").stop().css({transform:"translateY(120%)"});
            };

            if(ht-(animate_3-(wH/2))>= 1 ) {
                $(".card1_3").stop().css({opacity:"1", transform:"translate3d(0,0,0)"});                
            } else {
                $(".container_columns:nth-child(3) .txt_motion .txt_mask span").stop().css({transform:"translateY(120%)"});
            }; 
            // 첫번째, 두번째, 세번째 카드 애니메이션 끝


            // 두번째 brandmission 텍스트 좌우스크롤 애니메이션
            if(ht-(sec0_2-(wH/2))>= 1) {
                $(".paralax_title2").css({transform:"translateX(-"+(+(ht-(sec0_2-(wH/2))) /2) +"%)"});
            };
            // 두번째 brandmission 텍스트 좌우스크롤 애니메이션 끝

            // 카드 텍스트 애니메이션
            if(ht-(text_wrap1_1-(wH/2))>=-200) {
            $(".card1_1 .text_animate_1 p").stop().css({transform:"translateY(0)"});
            $(".card1_1 .text_wrap h3").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".card1_1 .text_wrap .text_animate_3 p").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            
            } else {
                $(".card1_1 .text_animate_1 p").stop().css({transform:"translateY(100%)"});
                $(".card1_1 .text_wrap h3").stop().css({transform:"translateY(100%)"});
                $(".card1_1 .text_wrap .text_animate_3 p").stop().css({transform:"translateY(121%)"});
            }

            if(ht-(text_wrap1_2-(wH/2))>=-200) {
                $(".card1_2 .text_animate_1 p").stop().css({transform:"translateY(0)"});
            $(".card1_2 .text_wrap h3").delay(300).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            });
            $(".card1_2 .text_wrap .text_animate_3 p").delay(600).queue(function(next){
                $(this).stop().css({transform:"translateY(0)"});
                next();
            }); 
            } else {
                $(".card1_2 .text_animate_1 p").stop().css({transform:"translateY(100%)"});
                $(".card1_2 .text_wrap h3").stop().css({transform:"translateY(100%)"});
                $(".card1_2 .text_wrap .text_animate_3 p").stop().css({transform:"translateY(121%)"});
            }

            if(ht-(text_wrap1_3-(wH/2))>=-200) {
                $(".card1_3 .text_animate_1 p").stop().css({transform:"translateY(0)"});
                $(".card1_3 .text_wrap h3").delay(300).queue(function(next){
                    $(this).stop().css({transform:"translateY(0)"});
                    next();
                });
                $(".card1_3 .text_wrap .text_animate_3 p").delay(600).queue(function(next){
                    $(this).stop().css({transform:"translateY(0)"});
                    next();
                });
            } else {
                $(".card1_3 .text_animate_1 p").stop().css({transform:"translateY(100%)"});
                $(".card1_3 .text_wrap h3").stop().css({transform:"translateY(100%)"});
                $(".card1_3 .text_wrap .text_animate_3 p").stop().css({transform:"translateY(121%)"});
            }
            // 카드 텍스트 애니메이션 끝
            

            if(ht-( text_animate_4-(wH/2))>= 1 ) {
                $(".text_animate_4").stop().css({transform:"translateY(0)"});
            } else {
                $(".text_animate_4").stop().css({transform:"translateY(120%)"});
            }

            if(ht-( text_animate_5-(wH/2))>= 1 ) {
                $(".text_animate_5").stop().css({transform:"translateY(0)"});
            } else {
                $(".text_animate_5").stop().css({transform:"translateY(120%)"});
            }
            // 


            // we are cenno 첫번째 카드 애니메이션 시작
            if(ht-(value_1-(wH/2))>= 1) {
                $('.value_1').stop().css({opacity:"1", transform:"translateY(0)"});
            } else {
                $('.value_1').stop().css({opacity:"0", transform:"translateY(20%)"});
            }
            // we are cenno 첫번째 카드 애니메이션 끝

            // we are cenno 두번째 카드 애니메이션 시작
            if(ht-(value_2-(wH/2))>= 1) {
                $('.value_2').stop().css({opacity:"1", transform:"translateY(0)"});
            } else {
                $('.value_2').stop().css({opacity:"0", transform:"translateY(20%)"});
            }
            // we are cenno 두번째 카드 애니메이션 끝

            // we are cenno 세번째 카드 애니메이션 시작
            if(ht-(value_3-(wH/2))>= 1) {
                $('.value_3').stop().css({opacity:"1", transform:"translateY(0)"});
            } else {
                $('.value_3').stop().css({opacity:"0", transform:"translateY(20%)"});
            }
            // we are cenno 두번째 카드 애니메이션 끝
        } 
    });


    
});