$(function () {
    $('.cote_cookist').css('backgroundColor','white');    
    $('.cote_client').css('backgroundColor','#F5F5F5'); 
    $('.client').css('display','inline-block');
    $('.cookist').css('display','none');
    
    $('.cote_cookist').click(function () {
        $('.client').css('display','none');
        $('.cookist').css('display','inline-block');
        $('.cote_cookist').css('backgroundColor','#F5F5F5');    
        $('.cote_client').css('backgroundColor','white');
    });
    
    $('.cote_client').click(function () {
        $('.client').css('display','inline-block');
        $('.cookist').css('display','none');
        $('.cote_cookist').css('backgroundColor','white');    
        $('.cote_client').css('backgroundColor','#F5F5F5'); 
    });
});
