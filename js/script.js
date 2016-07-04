$(document).ready(function(){
    
    $("li#clickme").click(function() {
        if ($(".mobile_menu_wrapper").hasClass("show")) {
            $(".mobile_menu_wrapper").removeClass("show").fadeOut('slow');
           
        } else {
            $(".mobile_menu_wrapper").addClass("show").fadeIn('slow');
            $(".container").addClass("containFade");
        }
    });

    $("#close_mobile_menu").click(function() {
        $(".mobile_menu_wrapper").removeClass("show").fadeIn('slow');
        $(".container").removeClass("containFade").addClass("removeFade");      
    });

     $("#gimmeMore").click(function() {
        $(".mobile_main_nav").addClass("mainnav_out").animate({left: '250px'});
        $("#sub_menu").addClass("subnav_in");
   });

   $("#menuBack").click(function() {
    $(".mobile_main_nav").removeClass("mainnav_out").animate({right: '250px'});
         $("#sub_menu").removeClass("subnav_in");

   });

   // $("li#shareMe").click(function() {
   //      $(".body").addClass("mask");
   //  });

  


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

    //  $(window).scroll(function(){
    //     if ($(window).scrollTop() >= 130) {
    //         $('.bannerImage, .bannerImageMain').addClass('blur');
    //     }
    //     else {
    //        $('.bannerImage, .bannerImageMain').removeClass('blur');
    //     }
    // });

 
    //wrap all iframe videos in class to make responsive
    $('iframe').wrap("<div class='videowrapper'></div>");
});

$(window).scroll(function() {

          var scrollTop = $(window).scrollTop();
          var divam = 90;
          var blurstr = "blur("+scrollTop/divam+"px)";
              $(".bannerImage, .bannerImageMain").css({
                  "-webkit-filter": blurstr,
                    "filter": blurstr   
              }).addClass("blur");

        });