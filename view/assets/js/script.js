$(window).scroll(function(){
    $(".carousel").css("opacity", 1 - $(window).scrollTop() / 500);
  });
