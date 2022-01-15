<?php

    $link = "./temp/test.jpg";

    $content = file_get_contents($link);

    $parse = parse_url($link);

    // ALTERAR NOME DO ARQUIVO ...
    $basename = basename($parse['path']);

    $file = fopen($basename, 'w+');

    fwrite($file, $content);

    fclose($file);

    echo json_encode(['msg' => 'ok']);
