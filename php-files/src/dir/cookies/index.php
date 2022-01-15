<?php

    $infos = [
        'url' => 'teste.com.br', 
        'sesstion' => '01'
    ];

    setcookie('MY_COOKIE', json_encode($infos), time() + 10);

    $data = [];

    if(isset($_COOKIE['MY_COOKIE'])) {
        $data = json_decode($_COOKIE['MY_COOKIE']);
    }

    echo json_encode($data);
