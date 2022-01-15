<?php

    # PASSING FUNCTIONS ...

    $a = 10;
    $b = 20;

    # PARAMETER PASSING BY VALUE ... 

    function change($a) {
        return $a + 20;
    }

    # PARAMETER PASSING BY REFERENCE ...

    function changeReference(&$b) {
        $b += 20;

        return $b;
    }

    echo change($a);
    echo "\n";
    echo $a;

    echo "\n\n";

    echo changeReference($b);
    echo "\n";
    echo $b;