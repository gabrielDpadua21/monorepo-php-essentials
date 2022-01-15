<?php

    function getFiles($class) 
    {
        $file = 'class' . DIRECTORY_SEPARATOR . $class  . '.php';

        if(file_exists($file)) {
            require_once($file);
        }

    }

    spl_autoload_register('getFiles');