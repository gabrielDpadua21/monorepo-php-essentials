<?php

    $frajola = 1;
    $thor = 2;
    $lucifer = 1.5;

    if($frajola > $lucifer) {
        echo "Frajola e mais velho que o lucifer";
    } else if ($thor > $lucifer) {
        echo "Thor e mais velho que o lucifer";
    } else {
        echo "Lucifer e mais velho que frajola";
    }

    // OPERADOR TERNÁRIO

    echo "<br>";

    echo ($frajola > $thor) ? "Frajola mais velho que Thor" : "Thor mais velhor que frajola";