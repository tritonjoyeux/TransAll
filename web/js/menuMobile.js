$(function(){

    $('aside').css('display', 'none');

    $('.menu').click(function(){
        $('aside').slideDown('slow', function(){
            $('aside').css('display', 'block');
        })

        $('aside').css({
            "position":"fixed",
            "z-index":"1"
        });
    });

    $('.close').css('cursor', 'pointer');
    $('.close').click(function(){
        $('aside').slideUp('slow', function(){
            $('aside').css('display', 'none');
        })
    });


});