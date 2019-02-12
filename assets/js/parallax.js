$(window).on('resize', function () {
    var test = $(window).height() - 64;
    $('.parallax-container').css({
        'height': test + "px"
    });
});
$(document).ready(function () {
    $(window).trigger('resize');
});
