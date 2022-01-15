<?php

    include "../class/people.php";

    echo "OBJECT ORIENTED PROGRAMMING";

    echo "\n\n";

    $p1 = new People();

    $p1->name = "Frajola";

    echo $p1->speak();