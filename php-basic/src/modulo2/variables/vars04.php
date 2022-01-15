<?php
    
    // ESCOPO DE VARIAVEIS

    $nome = "Lucifer";

    function printer() {
        global $nome;
        echo $nome;
    }

    function printer2() {
        global $nome;
        echo $nome . ' em 2';
    }

    printer();
    echo '<br/>';
    printer2();