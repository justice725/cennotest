        $(document).ready(function() {
            var header = document.querySelector("#hd");
            var headerHeight = header.offsetHeight;

            window.onscroll = function() {
                var windowTop = window.scrollY;

                if (windowTop >= headerHeight - 50) {
                    header.classList.add("drop");
                } else {
                    header.classList.remove("drop");
                }
            };
            
            $("#hd, .hd_visual div").hover(function() {
                $("#hd").stop().addClass("on");
                $("nav .manu a").css("color", "#245984");
                $(".hd_logo a").addClass("on");
                $(".hd_visual").addClass("on");

            });
            $("#hd, .hd_visual div").mouseleave(function() {
                $("#hd").stop().removeClass("on");
                $("nav .manu a").css("color", "#fff");
                $(".hd_logo a").removeClass("on");
                $(".hd_visual").removeClass("on");

            });



            $(".nav_list1").hover(function() {
                $(".menu_sub__1 a").css("display", "block");
                $(".menu_sub__1").siblings().find("a").css("display", "none");
                $(".menu_sub__1").addClass("on");
                $(".menu_sub__1").siblings().removeClass("on");

                $(".menu_sub__1").css("padding", "15px 0");
                $(".menu_sub__1").siblings().css("padding", "0");
            });

            $(".nav_list2").hover(function() {
                $(".menu_sub__2 a").css("display", "block");
                $(".menu_sub__2").siblings().find("a").css("display", "none");
                $(".menu_sub__2").addClass("on");
                $(".menu_sub__2").siblings().removeClass("on");

                $(".menu_sub__2").css("padding", "15px 0");
                $(".menu_sub__2").siblings().css("padding", "0");
            });

            $(".nav_list3").hover(function() {
                $(".menu_sub__3 a").css("display", "block");
                $(".menu_sub__3").siblings().find("a").css("display", "none");
                $(".menu_sub__3").addClass("on");
                $(".menu_sub__3").siblings().removeClass("on");

                $(".menu_sub__3").css("padding", "15px 0");
                $(".menu_sub__3").siblings().css("padding", "0");
            });

            $(".nav_list4").hover(function() {
                $(".menu_sub__4 a").css("display", "block");
                $(".menu_sub__4").siblings().find("a").css("display", "none");
                $(".menu_sub__4").addClass("on");
                $(".menu_sub__4").siblings().removeClass("on");

                $(".menu_sub__4").css("padding", "15px 0");
                $(".menu_sub__4").siblings().css("padding", "0");
            });
            
            
            $(".nav_list5").hover(function() {
                $(".menu_sub__5 a").css("display", "block");
                $(".menu_sub__5").siblings().find("a").css("display", "none");
                $(".menu_sub__5").addClass("on");
                $(".menu_sub__5").siblings().removeClass("on");

                $(".menu_sub__5").css("padding", "15px 0");
                $(".menu_sub__5").siblings().css("padding", "0");
            });
            
            $(".nav_list6").hover(function() {
                $(".menu_sub__6 a").css("display", "block");
                $(".menu_sub__6").siblings().find("a").css("display", "none");
                $(".menu_sub__6").addClass("on");
                $(".menu_sub__6").siblings().removeClass("on");

                $(".menu_sub__6").css("padding", "15px 0");
                $(".menu_sub__6").siblings().css("padding", "0");
            });
            $(".nav_list7").hover(function() {
                $(".menu_sub__7 a").css("display", "block");
                $(".menu_sub__7").siblings().find("a").css("display", "none");
                $(".menu_sub__7").addClass("on");
                $(".menu_sub__7").siblings().removeClass("on");

                $(".menu_sub__7").css("padding", "15px 0");
                $(".menu_sub__7").siblings().css("padding", "0");
            });

        });