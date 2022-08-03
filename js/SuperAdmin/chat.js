$(function(e) {
    $('.tick_list').click(function () {
        $('#chat_container').show();
        var tick_id = $(this).attr('tick_id');
        var use_name = $(this).children().find('span').eq(0).text();
        var tick_name = $(this).children().find('p').text();
        var image = $(this).children().find('img').attr('src');
        $('#tick_name').text(tick_name);
        $('#tick_name').attr('tick_id', tick_id);
        $('#use_name').text(use_name);
        $('#chat_use_img').attr("src", image);
        var chat_body = $('#ChatBody').children('div');
        chat_body.empty();
        $.ajax({
            url: "tickets/chats/" + tick_id,
            type: "GET",
            datatype: "JSON",
            success: function(result){
                var chats = JSON.parse(result);
                $.each(chats, function(index, chat_info){
                    var insert_chat = (chat_info['is_admin'] == 1) ? chat_right : chat_left;
                    var chat_img = (chat_info['is_admin'] == 1) ? $('#session_img').attr('src') : image;
                    insert_chat = insert_chat.replace("$image", chat_img);
                    insert_chat = insert_chat.replace("$text", chat_info['chat_txt']);
                    insert_chat = insert_chat.replace("$time", chat_info['chat_datetime']);
                    chat_body.append(insert_chat);
                });
            },
            error: function(xhr, status, error){
                swal({
                    type: "error",
                    title: "Chat was unable to load",
                    text: xhr.status + " " + xhr.statusText,
                });
            }
        });
    });

    $("#chat_input").bind("keypress", function(e)
    {
        if(e.keyCode == 13)
            post_chat();
    });
});
var chat_right = '<div class="media flex-row-reverse"><div class="main-img-user"><img alt="" src="$image"></div><div class="media-body"><div class="main-msg-wrapper right">$text</div><div><span>$time</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a></div></div></div>';
var chat_left = '<div class="media"><div class="main-img-user"><img alt="" src="$image"></div><div class="media-body"><div class="main-msg-wrapper left">$text</div><div><span>$time</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a></div></div></div>';

var post_chat = function(){
    var tick_id = $('#tick_name').attr('tick_id');
    var is_admin = 1;
    var text = $('#chat_input').val();
    send_chat(tick_id, is_admin, text);
    $('#chat_input').val('');
}

var send_chat = function(tick_id, is_admin, text){
    $.ajax({
        url: "tickets/post_chat",
        type: "POST",
        data: {
            tick_id: tick_id,
            is_admin: is_admin,
            chat_txt: text
        },
        datatype: "JSON",
        success: function(result){
            var time = JSON.parse(result);
            var insert_chat = (is_admin == 1) ? chat_right : chat_left;
            var chat_img = (is_admin == 1) ? $('#session_img').attr('src') : image;
            insert_chat = insert_chat.replace("$image", chat_img);
            insert_chat = insert_chat.replace("$text", text);
            insert_chat = insert_chat.replace("$time", time);
            $('#ChatBody').children('div').append(insert_chat);
        },
        error: function(xhr, status, error){
            swal({
                type: "error",
                title: "Chat was unable to send",
                text: xhr.status + " " + xhr.statusText,
            });
        }
    });
}