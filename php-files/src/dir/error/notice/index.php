<?php

    error_reporting(E_ALL & ~E_NOTICE);

    $name = $_GET['name'];

    echo json_encode(['name' => $name]);