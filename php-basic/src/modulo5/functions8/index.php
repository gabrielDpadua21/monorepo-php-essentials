<?php

    ## ANONIMOUS FUNCTIONS ...

    function text($callback) {

        // CALLBACK FUNCTION ...

        $callback();
    }

    text(function() {
        echo "Finished";
    });

    echo "\n\n";

    $fn = function($a) {
        echo $a;
    };

    $fn("Hello");