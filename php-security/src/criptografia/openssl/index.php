<?php

    define('SECRET_IV', pack('a16', 'senha'));
    define('SECRET', pack('a16', 'senha'));

    $data = [
        'nome' => 'frajola'
    ];

    $openssl = openssl_encrypt(
        json_encode($data),
        'AES-128-CBC',
        SECRET,
        0,
        SECRET_IV
    );

    var_dump($openssl);

    $info = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

    var_dump($info);