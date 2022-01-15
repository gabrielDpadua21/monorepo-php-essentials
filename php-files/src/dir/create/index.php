<?php

    $name = 'images';

    if (!is_dir($name)){
        mkdir($name);

        echo 'Directory create success ' . $name;

    } else {

        rmdir($name);

        echo 'Error to create directory, ' . $name . ' already exists - removed';

    }