<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $file = $_FILES['file-upload'];

        if ($file['error']) {
            throw new Exception('Error' . $file['error']);
        }

        $dirTemp = 'temp';

        if(!is_dir($dirTemp)) {
            mkdir($dirTemp);
        }

        if(move_uploaded_file($file['tmp_name'], $dirTemp . DIRECTORY_SEPARATOR . $file['name'])) {
            echo json_encode(["msg" => "upload realizado com sucesso"]);
        } else {
            throw new Exception("Error to upload file");
        }

    }