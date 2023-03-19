<?php
include_once ('simplehtmldom_1_9_1/simple_html_dom.php');
$url = "https://serpstat.com/ru/promo/start-trial/?admitad_uid=b1b13e285296770802e5c9692aa0b100&utm_source=admitad&utm_medium=cpa"; // замените на URL-адрес вашего сайта

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if($response === false) {
    echo 'Ошибка CURL: ' . curl_error($ch);
} else {
    $html = str_get_html($response); // создаем объект HTML-документа
    //echo "<pre>";print_r($html->find('div'));die;
    $title = $html->find('title', 0)->plaintext; // находим заголовок страницы

    echo $title;
}

curl_close($ch);
