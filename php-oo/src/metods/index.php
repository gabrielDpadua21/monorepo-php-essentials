<?php

    include "../class/car.php";

    $c1 = new Car();

    $c1->setModelo("Ferrari");
    $c1->setMotor("v8");
    $c1->setYear("2015");

    var_dump($c1->show());