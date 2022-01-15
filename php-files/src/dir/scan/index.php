<?php

    $images = scandir('img');

    $data = [];
    $baseUri = 'http://localhost:8001/dir/scan/';

    foreach ($images as $img) {
        if (!in_array($img, ['.', '..'])) {

            $filename = 'img' . DIRECTORY_SEPARATOR . $img;

            $info = pathinfo($filename);

            $info['size'] = filesize($filename);
            $info['modify'] = date('d/m/Y H:i:s', filemtime($filename));
            $info['url'] = $baseUri . $filename;

            array_push($data, $info);

        }
    }

    echo json_encode($data);