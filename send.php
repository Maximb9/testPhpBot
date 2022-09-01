<?php

require 'vendor/autoload.php';

$title = $_POST['title'];
$description = $_POST['description'];

$text = "<b>$title</b>".PHP_EOL.$description.PHP_EOL."<a href='google.com'>Ссылка на гугл</a>";

$array = array(
    'chat_id'    => 462541603,
    'text' => $text,
    'parse_mode' => 'html',
);

$ch = curl_init('https://api.telegram.org/bot5653804639:AAENt_Piz4Tg5OX0VVLZ1vXKh9BSj--B0f0/sendMessage');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);

dd($res);