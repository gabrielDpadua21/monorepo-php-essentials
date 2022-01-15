<?php

    /*
    
    PERMISSOES

    0 - NENHUMA
    1 - EXECUÇÃO
    2 - GRAVAÇÃO
    3 - EXECUÇÃO E GRAVAÇÃO
    4 - LEITURA
    5 - LEITURA E EXECUÇÃO
    6 - LEITURA E GRAVAÇÃO
    7 - LEITURA EXECUÇÃO E GRAVAÇÃO

    */

    $directory = 'files';
    $permissao = '0775';

    if(!is_dir($directory)) {
        mkdir($directory, $permissao);
    }

    echo json_encode(['msg' => 'diretorio criado com sucesso']);

