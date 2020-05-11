$("#navListButton").click(function(){
    $("#navList").slideToggle();
});


let winH = $(window).height() * 0.8;

$(window).on('scroll', function () {
    if ($(this).scrollTop() > winH ) {
        $('#nav').addClass('bgRed');
        $('#headerImg').attr('src', 'media/logo2.png');
    } else {
        $('#nav').removeClass('bgRed');
        $('#headerImg').attr('src', 'media/logo2.png');
    }
}).on('resize', function(){
   winH = $(this).height() * 0.8;
});



// Slideshow JS
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 60000); // Change image every 2 seconds
}
