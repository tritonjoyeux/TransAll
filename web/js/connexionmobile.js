$(function () {
    $('.cote_cookist').css('color','grey');
    $('.cote_client').css('color','white');
    $('.client').css('display','inline-block');
    $('.cookist').css('display','none');

    $('.cote_cookist').click(function () {
        $('.client').css('display','none');
        $('.cookist').css('display','inline-block');
        $('.cote_cookist').css('color','white');
        $('.cote_client').css('color','grey');
    });

    $('.cote_client').click(function () {
        $('.client').css('display','inline-block');
        $('.cookist').css('display','none');
        $('.cote_cookist').css('color','grey');
        $('.cote_client').css('color','white');
    });
});
