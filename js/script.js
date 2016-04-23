$(document).ready(function(){
    $(".nav-mobile").html($(".nav-bar").html());
    $(".nav-trigger span").click(function(){
        if ($(".nav-mobile ul").hasClass("expanded")) {
            $(".nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
            $(this).removeClass("open");
        } else {
            $(".nav-mobile ul").addClass("expanded").slideDown(250);
            $(this).addClass("open");
        }
    });



    $(window).scroll(function(){
        if ($(window).scrollTop() >= 130) {
            $('.nav-bar').addClass('fixed');
        }
        else {
           $('.nav-bar').removeClass('fixed');
        }
    });

     $(window).scroll(function(){
        if ($(window).scrollTop() >= 110) {
            $('.bannerImage').addClass('blur');
            $('.bannerImageMain').addClass('blur');
        }
        else {
           $('.bannerImage').removeClass('blur');
           $('.bannerImageMain').removeClass('blur');
        }
    });

 
    //wrap all iframe videos in class to make responsive
    $('iframe').wrap("<div class='iframe-flexible-container'></div>");
});