<?php

    function getFiles($class) {

        var_dump($class);

        $path = "class";
        $fileName = $path . DIRECTORY_SEPARATOR . $class . ".php";

        if(file_exists($fileName)) {
            require_once($fileName);
        }

    }

    spl_autoload_register("getFiles");


