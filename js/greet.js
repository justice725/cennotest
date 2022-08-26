$(function(){
    $(window).on('scroll', function(){
        const ht = $(window).scrollTop();
        const wH = $(window).height();
        const page_title_flex = $(".page_title_flex").offset().top;
        const bold_ani_1 = $(".bold_ani_1").offset().top; // 타이틀 애니메이션
        const bold_ani_2 = $(".bold_ani_2").offset().top; // 타이틀 애니메이션

        const com_ani_1 = $(".com_ani_1").offset().top; // 코멘트 애니메이션
        const com_ani_2 = $(".com_ani_2").offset().top; // 코멘트 애니메이션
        const com_ani_3 = $(".com_ani_3").offset().top; // 코멘트 애니메이션
        const com_ani_4 = $(".com_ani_4").offset().top; // 코멘트 애니메이션
        const com_ani_5 = $(".com_ani_5").offset().top; // 코멘트 애니메이션


        

        // ceomessage 텍스트 좌우스크롤 애니메이션
        if(ht > 0) {
            $(".paralax_title").css({transform:"translateX(-"+ht / 20 + "%)"});
        };
        // ceomessage 텍스트 좌우스크롤 애니메이션 끝

        // 메인섹션 타이틀 애니메이션 
        if(ht-(page_title_flex-(wH/2))>= 1) {
            $('.page_title_flex h2').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.page_title_flex h2').stop().css({opacity:"0", transform:"translateY(100%)"});
        }
        // 메인섹션 타이틀 애니메이션 끝

        // bold 타이틀 애니메이션
        if(ht-(bold_ani_1-(wH/2))>= 1) {
            $('.bold_ani_1').stop().css({opacity:"1", transform:"translateY(0)"});
            
        } else {
            $('.bold_ani_1').stop().css({opacity:"0", transform:"translateY(100%)"});
        };

        if(ht-(bold_ani_2-(wH/2))>= 1) {
            $('.bold_ani_2').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.bold_ani_2').stop().css({opacity:"0", transform:"translateY(100%)"});
        }
        // bold 타이틀 애니메이션 끝


        // 코멘트 애니메이션 
        if(ht-(com_ani_1-(wH/2))>= -200) {
            $('.com_ani_1').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.com_ani_1').stop().css({opacity:"0", transform:"translateY(100%)"});
        }

        if(ht-(com_ani_2-(wH/2))>= -200) {
            $('.com_ani_2').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.com_ani_2').stop().css({opacity:"0", transform:"translateY(100%)"});
        }

        if(ht-(com_ani_3-(wH/2))>= -200) {
            $('.com_ani_3').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.com_ani_3').stop().css({opacity:"0", transform:"translateY(100%)"});
        }

        if(ht-(com_ani_4-(wH/2))>= -200) {
            $('.com_ani_4').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.com_ani_4').stop().css({opacity:"0", transform:"translateY(100%)"});
        }

        if(ht-(com_ani_5-(wH/2))>= -200) {
            $('.com_ani_5').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
            $('.com_ani_5').stop().css({opacity:"0", transform:"translateY(100%)"});
        }
        // 코멘트 애니메이션 끝
    });
});