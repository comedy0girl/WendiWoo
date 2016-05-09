$(document).ready(function(){
    
    $("li#clickme").click(function() {
        if ($(".mobile_menu_wrapper").hasClass("show")) {
            $(".mobile_menu_wrapper").removeClass("show").fadeOut('slow');
        } else {
            $(".mobile_menu_wrapper").addClass("show").addClass('mask').fadeIn('slow');
            $(".body").addClass("mask");
        }
    });

    $("#close_mobile_menu").click(function() {
            $(".mobile_menu_wrapper").removeClass("show").fadeIn('slow');      
    });

   $("li#shareMe").click(function() {
        $(".body").addClass("mask");
    });


    $('a.back-to-top').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 700);
    return false;
});

    var feed = new Instafeed({
        get: 'user',
        userId: '1561907447',
        limit: 10,
        sortBy: 'most-recent',
        clientId: '3bfba065cf224b38b146d6b02db4b9f5'
    });
    feed.run();
    

    $(window).scroll(function(){
        if ($(window).scrollTop() >= 130) {
            $('.nav-bar').addClass('fixed');
        }
        else {
           $('.nav-bar').removeClass('fixed');
        }
    });

     $(window).scroll(function(){
        if ($(window).scrollTop() >= 130) {
            $('.bannerImage, .bannerImageMain').addClass('blur');
        }
        else {
           $('.bannerImage, .bannerImageMain').removeClass('blur');
        }
    });

 
    //wrap all iframe videos in class to make responsive
    $('iframe').wrap("<div class='videowrapper'></div>");
});