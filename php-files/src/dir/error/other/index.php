<?php

    function error_hendler($code, $message, $file, $line) {

        echo json_encode([
            'code' => $code,
            'message' => $message,
            'file' => $file, 
            'line' => $line
        ]);

    }

    set_error_handler('error_hendler');

    echo 100 / 0;