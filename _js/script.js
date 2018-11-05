
$(function() {
    $('.back-to-top').hide();
    
    $(window).scroll(function() {
        if($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }     
    });

    $('.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    });
});

$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() > 100) {
            $('#logo').fadeOut();
        } else {
            $('#logo').fadeIn();
        }     
    });

    $('#logo').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    });
});