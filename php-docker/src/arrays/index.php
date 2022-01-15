<?php

    echo "\nTrabalhando com arrays\n";

    $array = array(1, 2, 3, 4, 5, 6);
    $array2 = [6, 5, 4, 3, 2, 1];

    echo $array[0];

    // LOOP FOR ARRAY ...
    for($i = 0; $i < count($array); $i++) {
        echo "\n";
        echo $array[$i];
    }

    echo "\n";
    
    // LOOP EACH FOR ARRAY ...
    foreach ($array2 as $key => $value) {
        echo "\nChave -> ";
        echo $key;
        echo "\nValor -> ";
        echo $value;
    }

