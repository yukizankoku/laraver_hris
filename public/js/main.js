$(document).ready(function(){
  $('#carouselExampleCaptions').on('slid.bs.carousel', function () {
    $('.carousel-caption > h1, .carousel-caption > h2').addClass('fade-in-text');
    setTimeout(function() {
      $('.carousel-caption > h1, .carousel-caption > h2').removeClass('fade-in-text');
    }, 2000); // Sesuaikan durasi dengan animation-duration
  });
});
