<?php

    $filename = 'images/html.png';

    $base64 = base64_encode(file_get_contents($filename));

    $fileinfo = new finfo(FILEINFO_MIME_TYPE);

    $mimetype = $fileinfo->file($filename);

    $base64encode = 'data:'.$mimetype.';base64,' . $base64;

    echo json_encode(['img' => $base64encode]);