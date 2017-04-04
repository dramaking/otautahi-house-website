$(document).ready(function () {
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
            $("#overlay").toggleClass("open");
        });        

        $("#overlay ul li a").on("click", function() {
            $(".navbar-toggle").trigger("click");
        });

        // for (var i = 0; i < array.length; i++) {
        //     var element = array[i];
            
        // }

        $(".scroll-to-main").click(function() {
            $('html,body').animate({
                scrollTop: $(".main-point").offset().top}, 'slow');
        });

        // Guide-navigation
        $(".guide-nav-mobile").html($(".guide-nav-container").html());

   
        $(window).click(function(event) {
            if ($(".guide-nav-mobile ul").hasClass("expanded")) {
                $(".guide-nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                $(".guide-nav-trigger span").removeClass("open");
                $(".guide-nav-trigger span").removeClass("update");
            }
    
        });
    
         $(".guide-nav-trigger span").click(function(event){      
            event.stopPropagation();  
            if ($(".guide-nav-mobile ul").hasClass("expanded")) {
                $(".guide-nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                $(this).removeClass("open");
                $(this).removeClass("update");
            } else {
                $(".guide-nav-mobile ul").addClass("expanded").slideDown(250);
                $(this).addClass("open");
                $(this).addClass("update");
            }
        });
    
});