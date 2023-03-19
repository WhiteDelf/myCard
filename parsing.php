<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP );

$headers = "GET /Scraping/?data=data HTTP/1.1\r\n" .
    "Host: locallhost\r\n" .
    "\r\n";

if(socket_connect($socket,'127.0.0.1', 80)){

    socket_write($socket, $headers);


    while ($data = socket_read($socket, 1024 )){
        echo $data;
    }


}