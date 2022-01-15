<?php

    $id = (isset($_GET['id']))?$_GET['id']:1;

    if(!is_numeric($id)) {
        exit('Fuck you hacker');
    }

    $conn = mysqli_connect('phpsec-mysql', 'root', 'toor', 'db_phpsec');

    $query = "SELECT * FROM tb_users WHERE id_user = $id";

    $exec = mysqli_query($conn, $query);

    $resultado = mysqli_fetch_object($exec);

    while($resultado = mysqli_fetch_object($exec)) {
            var_dump($resultado);
    }

    