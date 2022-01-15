<?php

    $json = file_get_contents("gatos.json");

    // ARRAY
    $data = json_decode($json, true);
    
    // OBJETO
    $dataObject = json_decode($json);

    print_r($data);

    print_r($dataObject);