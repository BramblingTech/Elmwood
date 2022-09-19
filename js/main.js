$(document).ready(function(){
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
          window.location.hash = hash;
        });
      }
    });
  });

  $(document).ready(function(){
    $('.slider-prof').on('init', function(event, slick){
      let step = slick.$slides.length / slick.options.slidesToScroll;
      $(this).next('.slick-navs').find('.slick-total').text(step);
      $(this).next('.slick-navs').find('.slick-progress-line').css('width', (100 / step) + '%');
    }).on('afterChange', function(event, slick, currentSlide){
      let steps = slick.$slides.length / slick.options.slidesToScroll;
      let last = slick.$slides.length - slick.options.slidesToScroll;
      let step = (currentSlide+slick.options.slidesToScroll)/slick.options.slidesToScroll;
      if(currentSlide==0){
        $(this).next('.slick-navs').find('.slick-progress-line').css('width', (100 * (slick.options.slidesToScroll/slick.$slides.length)) + '%');
        //$(this).next('.slick-navs').find('.slick-progress-line').css('width', (100 / step) + '%');
      }else{
        let w = currentSlide==0?steps:currentSlide/last;
        $(this).next('.slick-navs').find('.slick-progress-line').css('width', (100 *w) + '%');
      }
      $(this).next('.slick-navs').find('.slick-current').text(step);
    }).slick({
      infinite: false,
      slidesToShow: 2,
      slidesToScroll: 2,
      prevArrow: $('.prev-slide'),
      nextArrow: $('.next-slide'),
      dots:false,
    });
  });


$(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 700) {
      $('.upbutton').fadeIn();
    } else {
      $('.upbutton').fadeOut();
    }
  });
  $(window).scroll(function(){
    if ($(this).scrollTop() > 0) {
      $('header').addClass('scrolled');
    } else {
      $('header').removeClass('scrolled');
    }
  });

});
