<?php

    $db = new PDO('mysql:dbname=db_phpdb;host=phpdb-mysql', 'root', 'toor');

    $conn = $db->prepare("INSERT INTO tb_users(des_login, des_password) VALUES (:LOGIN, :PASSWORD)");

    $login = 'teste02';
    $password = '123456';

    $conn->bindParam(':LOGIN', $login);
    $conn->bindParam(':PASSWORD', $password);

    $conn->execute();

    echo json_encode(["msg" => "ok"]);