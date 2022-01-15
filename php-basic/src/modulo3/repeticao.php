<?php

    // FOR
    for($i = 0; $i < 10; $i++) {

        if($i >= 2 && $i <= 5) continue;

        echo "<li>" . $i . "</li>";
    
    }

    echo "<select>";
    for ($x=date('Y'); $x >= date('Y')-118; $x--) { 
        echo "<option >" . $x . "</option>";
    }
    echo "</select>";




