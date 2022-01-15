<?php

    require_once("config.php");

    use Client\Register;

    $reg = new Register();

    $reg->setName("Frajola");
    $reg->setEmail("frajola21@gmail.com");
    $reg->setPassword("123456");

    $reg->sell();