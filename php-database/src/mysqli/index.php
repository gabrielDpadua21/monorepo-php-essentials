<?php

    $db = new mysqli("phpdb-mysql", "root", "toor", "db_phpdb");

    if($db->connect_error) {
        echo 'Error: '.$db->connect_error;
    } else {
        echo 'Conexão bem sucedida';
    }

    $conn = $db->prepare('INSERT INTO tb_users(des_login, des_password) VALUES(?, ?)');

    $conn->bind_param('ss', $login, $pass);

    $login = "user";
    $pass = "1234";

    $conn->execute();