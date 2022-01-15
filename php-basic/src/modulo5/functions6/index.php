<?php

    # MULTIPLE RETURNS FUNCTIONS ...

    function sumIntegers(int ...$values) {
        return array_sum($values);
    }

    function sumFloats(float ...$values) {
        return array_sum($values);
    }

    function sumFloatsRetString(float ...$values):string {
        return array_sum($values);
    }

    echo sumIntegers(1, 2);

    echo "\n\n";

    echo sumIntegers(1, 2, 3);

    echo "\n\n";

    echo sumIntegers(1.2, 3.5, 2.3);

    echo "\n\n";

    var_dump(sumFloats(2.2, 5.5));

    echo "\n\n";

    var_dump(sumFloatsRetString(2.2, 3.3));



