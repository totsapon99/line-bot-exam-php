<?php


$access_token = 'gBXyGT4YhPlm55PdXaB4FKfXgh65UxQgctQd6JQt60PC/vkQtcaNFObBI2j2rk/CJS2ttXu9Q3awUaGqx4Xy8lrShTFfEbJcVMNnl8NQqEM/6PLexDc9aHyoq4wOTqMVUACBerfjrlyK7n4Ar7XnEAdB04t89/1O/w1cDnyilFU=';

$userId = 'U536072c75417220a443fe0a9e07e6cd3';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

