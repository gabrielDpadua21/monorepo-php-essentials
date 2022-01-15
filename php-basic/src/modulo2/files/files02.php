<?php

    // INCLUDE REQUIRE - NÃO PERMITE A EXECUÇÃO
    // CASO O ARQUIVO NÃO EXISTA
    require 'requires/require01.php';
    require_once 'requires/require02.php';
    require_once 'requires/require02.php';

    $result = mult(20, 20);
    $msg = hello();

    echo $result;
    echo $msg;