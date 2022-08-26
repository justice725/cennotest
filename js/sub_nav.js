// 서브페이지 네비게이션 스크립트
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

// 서브페이지 배너 타이틀 애니메이션 스크립트
// 공통 스크립트 
$(document).ready(function(){
    $(".sub_main_tit h1").addClass("on");
    $(".sub_main_tit span").addClass("on");
    $(".sub_main_tit p").addClass("on");
    
});