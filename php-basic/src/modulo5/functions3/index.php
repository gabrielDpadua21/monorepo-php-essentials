<?php

    # FUNCTION PARAMS ...

    function hello($text = "Word", $periodo = "Good Morning") {
        return "Hello $text - $periodo <br/>";
    }

    echo hello();
    echo hello("Thor", "Good Night");
    echo hello("frajola", "");