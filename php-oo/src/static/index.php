<?php

    include "../class/document.php";
    
    $dt = new Document();

    #$dt->setNumber("11111111111");

    $dt->setNumber("25812540098");

    var_dump($dt->getNumber());

    echo "\n\n";

    var_dump(Document::documentValidate("97214514010"));

    echo "\n";

    var_dump(Document::documentValidate("22222222222"));