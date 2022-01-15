<?php

    $cep = '18010040';

    $link = 'http://viacep.com.br/ws/'.$cep.'/json';

    $ch = curl_init($link);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($response);

    echo json_encode($data);