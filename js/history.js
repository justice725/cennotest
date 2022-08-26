// 하단 연혁 스크롤 애니메이션 끝
const his = document.getElementById('history');
const hisBt = his.querySelector(".bottom");
const hisYear = hisBt.querySelector('.year .yearBox');
const hisYearTxt = hisYear.querySelector('h1');
const hisMonth = hisBt.querySelectorAll('.month table');
let hisBtY;

window.addEventListener('scroll', () => {
  historyAction();
})
const historyAction = () => {
  hisBtY = hisBt.getBoundingClientRect().y;
  if(hisBtY < 0) {hisYear.style.position = "fixed";hisYear.classList.add('on');}
  else {hisYear.style = "";hisYear.classList.remove('on');}
  for (let i = 0; i < hisMonth.length; i++) {
    const hisMtY = hisMonth[i].getBoundingClientRect().y;
    hisMtY < 0 ? hisYearTxt.innerText = hisMonth[i].dataset.year : '';
    if (hisMtY < window.innerHeight/3) {
      hisMonth[i].style.opacity = 1;
    }else{
      hisMonth[i].style.opacity = 0.2;
    }
  }
}
historyAction();
// 하단 연혁 스크롤 애니메이션 끝

$(function(){
    $(window).on('scroll', function(){
        const ht = $(window).scrollTop();
        const wH = $(window).height();

        const left_box = $(".page_center .left_box").offset().top; // 상단 left_box history 소개 부분 애니메이션
        const right_box = $(".page_center .right_box").offset().top; // 상단 right_box history 소개 부분 애니메이션
        const center_box_animate_1 = $(".center_box_animate_1").offset().top; // 하단 center_box 애니메이션
        const center_box_animate_2_1 = $(".center_box_animate_2 .card_1").offset().top; // 하단 center_box 애니메이션
        const center_box_animate_2_2 = $(".center_box_animate_2 .card_2").offset().top; // 하단 center_box 애니메이션
        const center_box_animate_2_3 = $(".center_box_animate_2 .card_3").offset().top; // 하단 center_box 애니메이션
        const hisHt = $("#box").height();

        if(ht > 0) {
            $(".paralax_title").css({transform:"translateX(-"+ht / 20 + "%)"});
        }

        // 상단 left_box history 소개 부분 애니메이션
        if(ht - (left_box-(wH/2)) >= 1 ) {
            $('.title_box .left_box p').stop().css({opacity:"1", transform:"translateY(0)"});
            $(".title_box .left_box h2").delay(300).queue(function(next){
                $(this).stop().css({opacity:"1",transform:"translateY(0)"});
                next();
            });
        } else {
          $('.title_box .left_box p').stop().css({opacity:"0", transform:"translateY(100%)"});
          $('.title_box .left_box h2').stop().css({opacity:"0", transform:"translateY(50%)"});
        };
        // 상단 left_box history 소개 부분 애니메이션 끝

        // 상단 right_box history 소개 부분 애니메이션
        if(ht - (right_box-(wH/2)) >= 1 ) {
          $('.title_box .right_box p').stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
          $('.title_box .right_box p').stop().css({opacity:"0", transform:"translateY(30%)"});
        }
        // 상단 right_box history 소개 부분 애니메이션 끝

        // 하단 center_box 애니메이션
        if(ht - (center_box_animate_1-(wH/2)) >= 1 ) {
          $(".center_box_animate_1 p").stop().css({opacity:"1", transform:"translateY(0)"});
        } else {
          $(".center_box_animate_1 p").stop().css({opacity:"0", transform:"translateY(100%)"});
        }

        // 하단 center_box columns 애니메이션
        if(ht - (center_box_animate_2_1-(wH/2)) >= 1 )  {
          $('.card_1').stop().css({opacity:"1",transform:"translateY(0)"});
        } else {
          $('.card_1').stop().css({opacity:"0",transform:"translateY(30%)"});
        }

        // 하단 center_box columns 애니메이션
        if(ht - (center_box_animate_2_2-(wH/2)) >= 1 )  {
          $('.card_2').stop().css({opacity:"1",transform:"translateY(0)"});
        } else {
          $('.card_2').stop().css({opacity:"0",transform:"translateY(30%)"});
        }

        // 하단 center_box columns 애니메이션
        if(ht - (center_box_animate_2_3-(wH/2)) >= 1 )  {
          $('.card_3').stop().css({opacity:"1",transform:"translateY(0)"});
        } else {
          $('.card_3').stop().css({opacity:"0",transform:"translateY(30%)"});
        }
        // 하단 center_box columns 애니메이션 끝

        const maxwidth = matchMedia("screen and (max-width:766px)");

        if(maxwidth.matches) {
          if($("#box").hasClass("on") == true) {
            $(".month").stop().css("padding-top",hisHt);
          } else {
            $(".month").stop().css("padding-top","0");
          }
        }
        
    });

    
});