$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3100,
    fade: true,
    dots: false,
    arrows: false,
    slidesToShow: 1,
  });
});

$(document).ready(function(){
 $('.discover__items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  dots: false,
  arrows: false,
  responsive: [
    {
      breakpoint: 1214,
      settings: {
        slidesToShow: 3,
        centerPadding: '40px',

      }
    },
    {
      breakpoint: 936,
      settings: {
        slidesToShow: 2,
      }
      },
    {
      breakpoint: 638,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});
});

var opened = false;
$(".material-symbols-outlined").click(function(){
  opened = !opened;
  if(opened) {
       document.getElementById('responsive__menu').style.width = 100 + "%";
    } else {
    document.getElementById('responsive__menu').style.width = 0 + "%";
    }
});