<?php

    $db = new PDO('mysql:dbname=db_phpdb;host=phpdb-mysql', 'root', 'toor');

    $conn = $db->prepare("DELETE FROM tb_users WHERE id_user = :ID");

    $id = 6;

    $conn->bindParam(':ID', $id);

    $conn->execute();

    echo json_encode(["msg" => "ok"]);