<?php

    $diaDaSemana = date('w');

    switch($diaDaSemana) {

        case 0;
            echo 'Domingo';
            break;

        case 1:
            echo 'Segunda-Feira';
            break;

        case 2:
            echo 'Terça-Feira';
            break;

        case 3:
            echo 'quarta-Feira';
            break;


        case 4:
            echo 'Quinta-Feira';
            break;

        case 5:
            echo 'Sexta-Feira';
            break;

        case 2:
            echo 'Sabádo';
            break;

        default:
            echo 'Erro';
            break;
    }