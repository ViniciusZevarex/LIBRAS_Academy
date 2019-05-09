var $target_right  = $('.anime-scroll-right'),
    $target_left   = $('.anime-scroll-left'),
    animationClass = 'anime-start',
    offset         = $(window).height()*3/4;

function animateScroll(){
  var documentTop = $(document).scrollTop();
  
  $target_left.each(function(){
    var itemTop = $(this).offset().top;
    
    if(documentTop > itemTop - offset){
      $(this).addClass(animationClass);
    }else{
      $(this).removeClass(animationClass);
    }
  });

  $target_right.each(function(){
    var itemTop = $(this).offset().top;
    
    if(documentTop > itemTop - offset){
      $(this).addClass(animationClass);
    }else{
      $(this).removeClass(animationClass);
    }
  });
}


//suavizar Scroll
function suavizarScroll(){
  $('.scroll').click(function(e){
    e.preventDefault();
    
    var id           = $(this).attr('href');
    var targetOffset = $(id).offset().top;
    
    $('html, body').animate({
      scrollTop: targetOffset
    },1500);
  
  });
}

$(document).scroll(function(){
  animateScroll();
});

(function($){
  $(function(){
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.tooltipped').tooltip();
    suavizarScroll();
    animateScroll();
    $('.collapsible').collapsible();
    $('select').formSelect();
    $(".dropdown-trigger").dropdown();
  }); // end of document ready
})(jQuery); // end of jQuery name space
