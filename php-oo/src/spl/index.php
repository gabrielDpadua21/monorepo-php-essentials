<?php

    function includeClass($class) {
        if(file_exists("class". DIRECTORY_SEPARATOR .$class.".php") === true) {
            require_once("class". DIRECTORY_SEPARATOR .$class.".php");
        }
    }

    function includeAbstract($abstract) {
        if(file_exists("abstract".DIRECTORY_SEPARATOR.$abstract.".php") === true) {
            require_once("abstract".DIRECTORY_SEPARATOR.$abstract.".php");
        }
    }

    spl_autoload_register("includeClass");
    spl_autoload_register("includeAbstract");

    $h1 = new Aquaman();

    echo $h1->swin();
