$(function(){
    $(window).on('scroll', function(){
        const ht = $(window).scrollTop();
        const PageWrapTop = $('.page_wrap').offset().top;
        const deviceHt = $(window).outerHeight(true);
        const CUHt = $('.context_us').offset().top;

        const wH = $(window).height();
        
        const map_flex = $(".map_flex").offset().top;
        const left_title = $(".left_title").offset().top;
        const right_top = $(".right_top").offset().top;
        const right_bot = $(".right_bot").offset().top;
        const context_us = $(".context_us").offset().top;
        const table_animate_1 = $(".table_animate_1").offset().top;


        // way to come 텍스트 좌우스크롤 애니메이션
        if(ht > 0) {
            $(".paralax_title").css({transform:"translateX(-"+ht / 20 + "%)"});
        }
        // way to come 텍스트 좌우스크롤 애니메이션

        // mapflex 애니메이션
        if(ht-(left_title-(wH/2))>= 1) {
            $(".left_title h2").stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.left_title h2').stop().css({opacity:"0", transform:"translateY(20%)"});
        };

        if(ht-(right_top-(wH/2))>= 1) {
            $(".right_top_animate").stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $(".right_top_animate").stop().css({opacity:"0", transform:"translateY(30%)"});
        }

        if(ht-(right_bot-(wH/2))>= 1) {
            $("#map").stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $("#map").stop().css({opacity:"0", transform:"translateY(20%)"});
        }

        if(ht-(context_us-(wH/2))>= 1) {
            $('.context_title').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.context_title').stop().css({opacity:"0", transform:"translateY(200%)"});
        }
    });
});