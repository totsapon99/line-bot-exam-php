<?php


$access_token = 'ZoKTYATnWwPD2ppISqXZmsSH9L14uyTzb3ky3FAVO4sr0JQUBe0yDfa8O9ZF6hgYFCbWQ4a6xIJ5p4DnVC5cHZZwdA4JXymYdNZ2JzKC5FU+FPCLH5wSl6VD+4fiitR4V4ptpZnsbbzdeMn9E14iLQdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
