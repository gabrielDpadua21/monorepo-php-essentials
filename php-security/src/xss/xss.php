<?php

    $search = $_POST['search'];

    echo strip_tags($search);
    
    echo "\n";

    echo htmlentities($search);