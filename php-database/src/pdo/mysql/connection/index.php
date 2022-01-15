<?php

    $db = new PDO('mysql:dbname=db_phpdb;host=phpdb-mysql', 'root', 'toor');

    $conn = $db->prepare('SELECT * FROM tb_users ORDER BY des_login');

    $conn->execute();

    $results = $conn->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);

    