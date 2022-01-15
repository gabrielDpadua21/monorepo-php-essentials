<?php

  // FUNÇÕES DE STRING

  $nome = "Frajola";
  $gato = "thor odcsson";
  $gato2 = "lucifer diabinho";

  // MAIUSCULAS
  $nomeUpper = strtoupper($nome);
  $nomeLower = strtolower($nomeUpper);

  echo $nomeUpper;

  echo "<br/>";

  echo $nomeLower;

  echo "<br/>";

  // PRIMEIRAS LETRAS MAIUSCULAS
  echo ucwords($gato);

  echo "<br/>";

  // PRIMEIRA LETRA MAIUSCULA
  echo ucfirst($gato2);

  echo "<br/>";

  // REPLACE
  $gato = str_replace('odcsson', 'não e odscsson', $gato);

  echo $gato;

  