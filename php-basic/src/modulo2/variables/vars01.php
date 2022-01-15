<?php

    // PHP É FRACAMENTO TIPADO - NÃO E NECESSÁRIO DEFINIR O TIPO DA VARIAVEL
    $string = "isso é um texto";
        
    // BOAS PRATICAS - CAMEL CASE
    $primeiroNome = "Frajola";
    $sobreNome    = "Chato";
    $cor          = "Pretão ai";

    // CONCATENAÇÃO
    echo $primeiroNome . " " . $sobreNome;
    echo '<br/>';

    // EXCLUINDO UMA VARIAVEL
    unset($primeiroNome);

    // VERIFICA SE A VARIAVEL EXISTE
    if(isset($primeiroNome)) {
        echo $primeiroNome;
    } else {
        echo "Variavel não definida";
    }

    
    