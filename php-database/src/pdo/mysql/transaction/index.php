<?php

    $db = new PDO('mysql:dbname=db_phpdb;host=phpdb-mysql', 'root', 'toor');

    $db->beginTransaction();

    $conn = $db->prepare("INSERT INTO tb_users(des_login, des_password) VALUES (?, ?)");

    $login = 'teste02';
    $password = '123456';

    $conn->execute(array($login, $password));

    //$db->rollback();

    $db->commit();

    echo json_encode(["msg" => "ok"]);