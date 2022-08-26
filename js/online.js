$(function(){
    $(window).on('scroll', function(){
        const ht = $(window).scrollTop();

        if(ht > 0) {
            $(".paralax_title").css({transform:"translateX(-"+ht / 20 + "%)"});
        }
    });
});