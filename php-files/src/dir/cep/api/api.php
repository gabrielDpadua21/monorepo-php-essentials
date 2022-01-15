<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $cep = $_POST['cep'];

        $url = 'http://viacep.com.br/ws/'.$cep.'/json';

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $reponse = curl_exec($ch);

        curl_close($ch);

        $data = json_decode($reponse);

        echo json_encode($data);

    }