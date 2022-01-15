<?php

    $gatos = array('Thor', 'Frajola', 'Lucifer');
    $pessoas = array();

    print_r($gatos);

    echo end($gatos);  
    
    array_push($pessoas, array(
        "nome" =>  "Sheldon",
        "Status" => "Gordo"
    ));

    array_push($pessoas, array(
        "nome" => "Lola",
        "Status" => "Fofa"
    ));

    print_r($pessoas);