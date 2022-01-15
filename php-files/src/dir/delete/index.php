<?php

    $file = fopen('log.txt', 'w+');

    fclose($file);

    unlink('log.txt');

    echo json_encode(['msg'=>'file deleted']);