<?php
 // VARIAVEIS GLOBAIS - ARRAYS SUPER GLOBAIS
 // PRÉ-DEFINIDAS

 // EXEMPLOS MAIS UTILIZADOS
 $nome  = $_GET["a"];
 // CONVERSÃO DO TIPO DE DADOS
 $idade = (int)$_GET["b"]; 

//  var_dump($nome);
//  var_dump($idade);

// VARIAVEL QUE VERIFICA IP DO USUARIO
$ip = $_SERVER["REMOTE_ADDR"];
// VERIFICA LOCAL ACESSADO
$ip2 = $_SERVER["SCRIPT_NAME"];

var_dump($ip);
var_dump($ip2);
