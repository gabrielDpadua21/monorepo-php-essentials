<?php

    echo "\nChave - Valor\n";

    $array = array(
        "nome" => "frajola",
        "idade" => 8
    );

    $array2 = array(
        "name" => "Thor",
        "Money" => 10000.0
    );

    echo $array["nome"];
    echo "\n";
    echo $array["idade"];

    echo "\n\n";

    foreach ($array2 as $key => $value) {
        echo $key;
        echo " -> ";
        echo $value;
        echo "\n";
    }

    echo "\n";

    echo var_dump($array2);