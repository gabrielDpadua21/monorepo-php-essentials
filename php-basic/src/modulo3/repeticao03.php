<?php

    $cond = true;
    $tentativas = 0;

    while($cond) {
        $numero = rand(1, 10);

        if($numero === 3) {
            echo "<br>";
            echo "Acertou";
            echo "<br>";
            echo "Tentativas: " . $tentativas;
            echo "<br>";

            $cond = false;
        }

        $tentativas++;
    }