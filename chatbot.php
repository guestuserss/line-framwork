<!-- Lỗi có thể xảy ra :
linecorp/line-bot-sdk 7.3.0 requires ext-sockets * -> it is missing from your system. Install or enable PHP's sockets extension.
Fix : https://titanwolf.org/Network/Articles/Article?AID=16e702f9-ff48-4043-8fbc-eb657069381c
-->
GO !
<?php
lineBroadcast('send message');
function lineBroadcast($text){
    $channelToken = '';
    $headers = [
        'Authorization: Bearer '.$channelToken,
        'Content-Type: application/json;charset=utf-8'
    ];
    $post = [
        'messages' => [
            'type' => 'text',
            'text' => $text
        ]
    ];
}
$url = 'https://api.line.me/v2/bot/message/broadcast';
$post = json_encode($post);
$options = [
    
]

?>