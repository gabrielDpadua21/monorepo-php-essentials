<?php

    $db = new PDO('sqlsrv:Database=db_serverdbphp7;server=phpdb-mssql;ConnectionPooling=0', 'SA', 'Asterix2108@');

    $conn = $db->prepare('SELECT * FROM tb_users ORDER BY des_login');

    $conn->execute();

    $results = $conn->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);

    