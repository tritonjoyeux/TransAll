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
                        if ($('ul').hasClass(name_class)) {
                            $('.' + name_class).append('<li id="' + data.id + '">' +
                                '<ul>' +
                                '<li>' + data.writter + '</li>' +
                                '<li>' + data.body + '</li>' +
                                '<li>' + data.day + ' ' + data.hour +
                                '<form method="post" class="delete">' +
                                '<input type="hidden" value="' + data.id + '" name="id">' +
                                '<input type="submit" value="X" name="delete">' +
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
                        } else {
                            $('#messagerie').prepend('<ul class="' + name_class + '">' + data.getter + '<li id="' + data.id + '">' +
                                '<ul>' +
                                '<li>' + data.writter + '</li>' +
                                '<li>' + data.body + '</li>' +
                                '<li>' + data.day + ' ' + data.hour +
                                '<form method="post" class="delete">' +
                                '<input type="hidden" value="' + data.id + '" name="id">' +
                                '<input type="submit" value="X" name="delete">' +
                                '</form></li>' +
                                '</ul></li></ul><form method="post" class="send">' +
                                '<input type="hidden" name="destinataire" value="' + data.getter + '"><br>' +
                                '<input type="text" name="body" placeholder="body"><br>' +
                                '<input type="submit" value="send" name="send">' +
                                '</form>');
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
                        $('#' + data).remove();
                    }
                });
                return false;
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
                $('.' + name_class).append('<li id="' + data.id + '">' +
                    '<ul>' +
                    '<li>' + data.writter + '</li>' +
                    '<li>' + data.body + '</li>' +
                    '<li>' + data.day + ' ' + data.hour +
                    '<form method="post" class="delete">' +
                    '<input type="hidden" value="' + data.id + '" name="id">' +
                    '<input type="submit" value="X" name="delete">' +
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

