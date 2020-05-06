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
