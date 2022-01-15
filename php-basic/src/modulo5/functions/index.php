<?php

    ## INTRODUCION TO FUNCTIONS ...

    function hello() {

        echo "Hello function word";

    }

    function helloReturner() {
        return "Returning a function";
    }

    hello();

    $ret = helloReturner();

    echo "\n";

    echo $ret;