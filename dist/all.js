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
    

    $(window).scroll(function(){
        if ($(window).scrollTop() >= 110) {
            $('.nav-bar').addClass('fixed');
        }
        else {
           $('.nav-bar').removeClass('fixed');
        }
    });

     $(window).scroll(function(){
        if ($(window).scrollTop() >= 110) {
            $('.bannerImage, .bannerImageMain').addClass('blur');
        }
        else {
           $('.bannerImage, .bannerImageMain').removeClass('blur');
        }
    });

 
    //wrap all iframe videos in class to make responsive
    // $('iframe').wrap("<div class='videowrapper'></div>");


    var $iframes = $("iframe");

    $iframes.each(function () {
        $(this).removeAttr("width");
        $(this).removeAttr("height");
        $(this).wrap("<div class='videowrapper'></div>");
    });


// var cards = document.querySelectorAll(".card.effect__click");
//   for ( var i  = 0, len = cards.length; i < len; i++ ) {
//     var card = cards[i];
//     clickListener( cardGallery );
//   }

//   function clickListener(card) {
//     cardGallery.addEventListener( "click", function() {
//       var c = this.classList;
//       c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
//     });
//   }





        
    var init = function() {
  var card = document.getElementById('card');
  
  document.getElementById('flip').addEventListener( 'click', function(){
    card.toggleClassName('flipped');
  }, false);
};

window.addEventListener('DOMContentLoaded', init, false);

});


