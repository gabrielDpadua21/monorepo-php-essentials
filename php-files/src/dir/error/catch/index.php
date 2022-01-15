<?php

    try {

        throw new Exception("Ocorreu um erro inexperado!", 400);
        
    } catch (Exception $e) {

        echo json_encode([
            'message' => $e->getMessage(),
            'line' => $e->getLine(),
            'file' => $e->getFile(),
            'code' => $e->getCode()
        ]);

    }