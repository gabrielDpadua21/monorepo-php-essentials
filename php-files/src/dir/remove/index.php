<?php

    if(!is_dir("logs")) mkdir("logs");

    $file01 = fopen('./logs/log01.txt', 'w+');

    fwrite($file01, date('Y-m-d H:i:s') . "\r\n");

    fclose($file01);

    $file02 = fopen('./logs/log02.txt', 'w+');

    fwrite($file02, date('Y-m-d H:i:s') . "\r\n");

    fclose($file02);

    $file03 = fopen('./logs/log03.txt', 'w+');

    fwrite($file03, date('Y-m-d H:i:s') . "\r\n");

    fclose($file03);

    foreach (scandir('logs') as $item) {
       if(!in_array($item, ['.', '..'])) {
           unlink('logs/' . $item);
       }
    }

    echo json_encode(['msg' => 'ok']);