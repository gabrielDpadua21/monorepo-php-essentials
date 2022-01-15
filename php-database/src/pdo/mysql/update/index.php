<?php

    $db = new PDO('mysql:dbname=db_phpdb;host=phpdb-mysql', 'root', 'toor');

    $conn = $db->prepare("UPDATE tb_users SET des_login = :LOGIN, des_password = :PASSWORD WHERE id_user = :ID");

    $login = 'Frajola01';
    $password = 'asterix2108';
    $id = 1;

    $conn->bindParam(':ID', $id);
    $conn->bindParam(':LOGIN', $login);
    $conn->bindParam(':PASSWORD', $password);

    $conn->execute();

    echo json_encode(["msg" => "ok"]);