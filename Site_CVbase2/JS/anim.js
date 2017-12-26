var arrow_down = document.getElementById('arrow_down');
var arrow_up = document.getElementById('arrow_up');

$(document).ready(function(){
  $('.multiple_items').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
  });
});
