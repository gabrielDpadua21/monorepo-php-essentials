<?php

    # GET FUNCTION ARGS ...

    function my_args() {
        $argumentos = func_get_args();

        return $argumentos;
    }

    var_dump(my_args("bom dia"));

    echo "\n\n";

    var_dump(my_args(1000, "salario"));

    echo "\n\n";

    var_dump(my_args("test.php", "names.txt"));

