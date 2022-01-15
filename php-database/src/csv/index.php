<?php

    require_once('config.php');

    $sql = new Sql();

    $users = $sql->select('SELECT id_user, des_login, dt_createat FROM tb_users ORDER BY dt_createat');

    $headers = [];

    foreach ($users[0] as $key => $value) {
        array_push($headers, ucfirst($key));
    }

    $file = fopen('users.csv', 'w+');

    fwrite($file, implode(",", $headers) . "\r\n");

    foreach ($users as $row) {
        
        $data = [];

        foreach ($row as $key => $value) {

            array_push($data, $value);

        }

        fwrite($file, implode(",", $data) . "\r\n");

    }

    fclose($file);

    $filename = 'users.csv';

    if (file_exists($filename)) {

        $file = fopen('users.csv', 'r');

        $titles = explode(',', fgets($file));

        $values = [];

        while($row = fgets($file)) {
            
            $rowData = explode(',', $row);
            $linha = [];

            for($i = 0; $i < count($titles); $i++) {

                $linha[$titles[$i]] = $rowData[$i];

            }

            array_push($values, $linha);
        }

        fclose($file);

        echo json_encode($values);

    }