$(document).ready(function(){
    $(".nav-mobile").html($(".row.twelve.columns.nav-bar").html());
    $(".nav-trigger span").click(function(){
        if ($(".nav-mobile ul").hasClass("expanded")) {
            $(".nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
            $(this).removeClass("open");
        } else {
            $(".nav-mobile ul").addClass("expanded").slideDown(250);
            $(this).addClass("open");
        }
    });


    if ( $(window).width() < 800 ) {
        $('.nine.columns, .sideOptions').insertAfter('.seasonPics');
    }

    //wrap all iframe videos in class to make responsive
    $('iframe').wrap("<div class='iframe-flexible-container'></div>");
});