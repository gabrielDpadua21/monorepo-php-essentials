<?php

    include "../class/animal.php";
    include "../class/cat.php";

    $a1 = new Animal();
    $c1 = new Cat();

    $a1->showData();

    echo "\n\n";

    $c1->showData();