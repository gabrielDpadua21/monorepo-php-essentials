<?php

$data = [
    'nome'=>'Frajola'
];

define('SECRET', pack('a16', 'senha'));

$mcrypt = mcrypt_encrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
);

$final = base64_encode($mcrypt);

var_dump($final);

$msg = mcrypt_decrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    base64_decode($final),
    MCRYPT_MODE_ECB
);

var_dump($msg);