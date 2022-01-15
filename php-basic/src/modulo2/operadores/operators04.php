<?php

    $a = 100;
    $b = 100.0;
    $c = NULL;
    $d = NULL;

    // MAIOR QUE
    var_dump($a > $b);

    echo "<br/>";

    // MENOR QUE
    var_dump($a < $b);

    echo "<br/>";

    // IGUAL - COMPARAÇÃO DE VALORES
    var_dump($a == $b);

    echo "<br/>";

    // IGUAL - COMPARAÇÃO DE VALOR E TIPO
    var_dump($a === $b);

    echo "<br/>";

    // DIFERENTE
    var_dump($a != $b);

    echo "<br/>";

    // EXCLUSIVO DO PHP 7
    // RETORNA 1 SE A > B, 0 A = B E -1 SE B > A
    var_dump($a <=> $b);

    echo "<br/>";

    // TRATAMENTO DE VERIFICAÇÃO DE NULOS
    echo $d ?? $c ?? $a;