<?php

    function getMyName($name) {

        if(!$name) {
            throw new Exception("the name is empty");
        }

        echo json_encode(["name" => $name]);

    }

    try {

        getMyName("Frajola");
        getMyName("");

    } catch(Exception $e) {

        echo json_encode(['message' => $e->getMessage()]);

    } finally {
        echo json_encode(['dispacher'=> 'event']);
    }