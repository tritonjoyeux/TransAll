$(function () {
    //get messages
    $.ajax({
        url: '/messages',
        type: 'GET',
        dataType: 'json',
        success: function (data) {

            for (var conv in data.allConv) {
                $('#messagerie').prepend(data.allConv[conv]);
            }
            $('#messagerie ul').click(function(){
                var content = $(this).html();
                var form = $(this).next().next().html();
                $('.messages').html('Debut de la conversation avec :'+content+'<form class="send">'+form+'</form>');
                $('.messages li ul li').css({'display':'block'});
                $('.messages li ul').css({'border':'none'});
                $('.messages li ul').css({'cursor':'auto'});
                $('.messages form').css({'display':'inline-block'});
                $('.messages img').css({'display':'none'});
                $('.messages li img').css({'display':'inline-block'});
                $('.messages span').css({'height':'auto'});
                $('.messages span').css({'line-height':'normal'});
                $('.messages li').css({'font-size':'13px'});
                $('.messages li').css({'margin':'10px'});
                $('.messages li').css({'list-style':'none'});
                $('.button_delete').val('Supprimer');
                $('.button_delete').css({'background-color':'#ffffff'});
                $('.button_delete').css({'border':'none'});
                $('.button_delete').css({'cursor':'pointer'});
                $('.button_delete').css({'color':'gray'});
                $('.button_delete').css({'padding':'0px'});
                console.log($('.send_icone').val());
                $('.send_submit').val();

                //bind for all send submit
                $('.send').bind("submit", '#form_new', function () {
                    var data = $(this).serialize();
                    $.ajax({
                        url: '/message/send',
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        success: function (data) {
                            if (data.user1 > data.user2) {
                                var temp = 0;
                                temp = data.user1;
                                data.user1 = data.user2;
                                data.user2 = temp;
                            }
                            var name_class = 'conv_' + data.user1 + '_' + data.user2;
                                $('.messages form').before('<li class="' + data.id + '">' +
                                    '<ul style="border: none;">' +
                                    '<img src="/images/profile/'+data.img+'" style="display: inline-block;">'+
                                    '<li style="display: block; font-size: 13px;">' + data.writter + ' :</li>' +
                                    '<li style="display: block; font-size: 13px;">' + data.body + '</li>' +
                                    '<li style="display: block; font-size: 13px;">' + data.day + ' ' + data.hour +
                                    '<form method="post" class="delete" style="display: inline-block;">' +
                                    '<input type="hidden" value="' + data.id + '" name="id">' +
                                    '<input type="submit" value="X" name="delete" class="button_delete">' +
                                    '</form></li>' +
                                    '</ul></li>');
                                $('.delete').bind("submit", function () {
                                    var data = $(this).serialize();
                                    $.ajax({
                                        url: '/message/delete',
                                        type: 'POST',
                                        data: data,
                                        dataType: 'json',
                                        success: function (data) {
                                            $('.' + data).remove();
                                        }
                                    });
                                    return false;
                                });
                        }
                    });
                    return false;
                });

                $('.delete').bind("submit", function () {
                    var data = $(this).serialize();
                    $.ajax({
                        url: '/message/delete',
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        success: function (data) {
                            $('.' + data).remove();
                        }
                    });
                    return false;
                });
            });
        }
    });

    //new message
    $('#form_new').on('submit', function () {
        var data = $(this).serialize();
        $.ajax({
            url: '/message/send',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function (data) {
                if (data.user1 > data.user2) {
                    var temp = 0;
                    temp = data.user1;
                    data.user1 = data.user2;
                    data.user2 = temp;
                }
                var name_class = 'conv_' + data.user1 + '_' + data.user2;
                $('.' + name_class).append('<li class="' + data.id + '">' +
                    '<ul>' +
                    '<li>' + data.writter + '</li>' +
                    '<li>' + data.body + '</li>' +
                    '<li>' + data.day + ' ' + data.hour +
                    '<form method="post" class="delete">' +
                    '<input type="hidden" value="' + data.id + '" name="id">' +
                    '<input type="submit" value="X" name="delete" class="button_delete">' +
                    '</form></li>' +
                    '</ul></li>');
                $('.delete').bind("submit", function () {
                    var data = $(this).serialize();
                    $.ajax({
                        url: '/message/delete',
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        success: function (data) {
                            $('#' + data).remove();
                        }
                    });
                    return false;
                });
            }
        });
        return false;
    });
});

