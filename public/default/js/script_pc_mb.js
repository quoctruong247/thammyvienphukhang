    $(window).scroll(function() {
    if ($(this).scrollTop() > 400 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
    });
    $(function(){
      $(".scroll").click(function(){
        $("html,body").animate({scrollTop:$(".thetop").offset().top},"2000");
        return false;
      });
    })