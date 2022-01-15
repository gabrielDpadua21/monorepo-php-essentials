<?php

    // include
    require_once('../../vendor/autoload.php');
    require_once('./config.php');

    $sendEmail = $_POST['email'];
    $name      = $_POST['name'];
    $message   = $_POST['message'];

    $email = new Email($sendEmail, $name, $message);

    $email->sendEmail();

    