<?php

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, 
        http_build_query([
            'secret'=>'6Lf8GeQUAAAAAGz-c2rELn4OGZPPjstWFJAqwy6b',
            'response'=>$_POST['g-recaptcha-response'],
            'remoteip'=>$_SERVER['REMOTE_ADD']
        ])
    );

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $recaptcha = json_decode(curl_exec($ch), true);

    echo json_encode($recaptcha);