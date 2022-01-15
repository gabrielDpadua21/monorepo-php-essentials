<?php

    function __autoload($class) {
        require_once("$class.php");
    }

    $s1 = new Superman();

    echo $s1->power("Good");
