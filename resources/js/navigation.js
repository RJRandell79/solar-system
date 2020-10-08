var $ = require('jquery');

$(function() {

    $('a.menu-toggle').on('click', function(e) {
        if($(this).parent().hasClass('open-menu')) {
            $(this).parent().removeClass('open-menu');
            $(this).find('span').text('Show Nav');
        } else {
            $(this).find('span').text('Hide Nav');
            $(this).parent().addClass('open-menu');
        }
        e.preventDefault();
    });

    $('a.off-canvas-btn').on('click', function(e) {
        if($('.canvas').hasClass('open')) {
            $('.canvas').removeClass('open');
        } else {
            $('.canvas').addClass('open');
        }
        e.preventDefault();
    });

});
