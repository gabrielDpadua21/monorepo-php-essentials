<?php
    // TIPOS DE DADOS - VARIAVEIS (8 tipos primitivos)
    // GRUPOS (BASICOS, COMPOSTOS, ESPECIAS)

    // TIPOS BASICOS (strint, int, float, bool)
    $nome   = "Frajola";
    $idade  = 5;
    $peso   = 4.5;
    $dormes = true; 

    // TIPOS COMPOSTOS
    $gatos = array("thor", "frajola", "lucifer");

    $date = new DateTime();
    //var_dump($date);

    $arquivo = fopen("vars01.php", "r");
    //var_dump($arquivo);

    // TIPOS ESPECAIS

    // NULO E DIFERENTE DE VAZIO
    // NULO A VARIAVEL NÃO EXISTE
    // VAZIO NÃO A VALOR NA VARIAVEL POREM FOI ALOCADO ESPAÇO NA MAMORIA
    $nulo = NULL;
