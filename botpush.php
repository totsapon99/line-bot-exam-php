<?php



require "vendor/autoload.php";

$access_token = 'gBXyGT4YhPlm55PdXaB4FKfXgh65UxQgctQd6JQt60PC/vkQtcaNFObBI2j2rk/CJS2ttXu9Q3awUaGqx4Xy8lrShTFfEbJcVMNnl8NQqEM/6PLexDc9aHyoq4wOTqMVUACBerfjrlyK7n4Ar7XnEAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







